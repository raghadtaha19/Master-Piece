<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SellForm;
use App\Models\LandImages;
use App\Models\Category;

class FrontSellFormController extends Controller
{

    public function create()
{
    $categories = Category::all();
    $users = User::all();

    return view('pages.sellform', compact('categories', 'users'));
}


    public function store(Request $request)
    {
        
        $validatedData = $request->validate([ 
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'idNumber'=>'required|string|max:20',
            'phone' => 'required|string|max:20',
            'land_type' => 'required',
            'governorate' => 'required|string|max:255',
            'directorate' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'basin' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'pieceNumber' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'additionalinfo' => 'required',
        ]);
        $relativeImagePath = null;
        $newImageName = uniqid() . '-' . $request->addedLandImagesName . '.' . $request->file('landimage1')->extension();
        $relativeImagePath = 'assets/images/' . $newImageName;
        $request->file('landimage1')->move(public_path('images'), $newImageName); 
        
       
        $relativeImagePath = null;
        $newImageName = uniqid() . '-' . $request->addedLandImagesName . '.' . $request->file('landimage2')->extension();
        $relativeImagePath = 'assets/images/' . $newImageName;
        $request->file('landimage2')->move(public_path('images'), $newImageName);
        
        $relativeImagePath = null;
        $newImageName = uniqid() . '-' . $request->addedLandImagesName . '.' . $request->file('landimage3')->extension();
        $relativeImagePath = 'assets/images/' . $newImageName;
        $request->file('landimage3')->move(public_path('images'), $newImageName);

        $relativeImagePath = null;
        $newImageName = uniqid() . '-' . $request->addedLandImagesName . '.' . $request->file('landimage4')->extension();
        $relativeImagePath = 'assets/images/' . $newImageName;
        $request->file('landimage4')->move(public_path('images'), $newImageName);
   
          $users = User::create([
            'first_name' => $validatedData['firstName'],
            'last_name' => $validatedData['lastName'],
            'phone_number' => $validatedData['phone'],
            
        ]);

        $selectedCategory = Category::find($request->input('land_type'));
        $sellforms = SellForm::create([
            'ID_number' => $validatedData['idNumber'],
            'land_type' => $selectedCategory->name,
            'governorate' => $validatedData['governorate'],
            'directorate' => $validatedData['directorate'],
            'village' => $validatedData['village'],
            'basin' => $validatedData['basin'],
            'district' => $validatedData['district'],
            'piece_number' => $validatedData['pieceNumber'],
            'area' => $validatedData['area'],
            'price' => $validatedData['price'],
            'additional_information'=>$validatedData['additionalinfo'],
            'description' => $validatedData['description'],
        

        ]);
       
        LandImages::create([
            'image1' => $relativeImagePath,
            'image2' => $relativeImagePath,
            'image3' => $relativeImagePath,
            'image4' => $relativeImagePath,
        ]);

       
    }
    public function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->addedLandImagesName . '.' . $request->file('landimage1')->extension();
        $relativeImagePath = 'images/' . $newImageName;
        $request->file('landimage1')->move(public_path('images'), $newImageName);
        return $relativeImagePath;

        $newImageName = uniqid() . '-' . $request->addedLandImagesName . '.' . $request->file('landimage2')->extension();
        $relativeImagePath = 'images/' . $newImageName;
        $request->file('landimage2')->move(public_path('images'), $newImageName);
        return $relativeImagePath;

        $newImageName = uniqid() . '-' . $request->addedLandImagesName . '.' . $request->file('landimage3')->extension();
        $relativeImagePath = 'images/' . $newImageName;
        $request->file('landimage3')->move(public_path('images'), $newImageName);
        return $relativeImagePath;

        $newImageName = uniqid() . '-' . $request->addedLandImagesName . '.' . $request->file('landimage4')->extension();
        $relativeImagePath = 'images/' . $newImageName;
        $request->file('landimage4')->move(public_path('images'), $newImageName);
        return $relativeImagePath;
    }
    
   
   
}
