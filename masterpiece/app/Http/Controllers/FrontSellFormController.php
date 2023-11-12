<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SellForm;
use App\Models\LandImages;
use App\Models\Category;
use Alert;
use Illuminate\Support\Facades\Session;

class FrontSellFormController extends Controller
{

    public function create()
{
    $categories = Category::all();
    $users = User::all();

    return view('pages.sellform', compact('categories'));
}


    public function store(Request $request)
    {

        $validatedData = $request->validate([ 
            'firstName'=>'required|string|max:50',
            'lastName'=>'required|string|max:50',
            'phone' => ['required', 'numeric', 'regex:/(079|077|078)\d{7}/'],
            'idNumber'=>'required|numeric|max:20',
            'land_type' => 'required',
            'governorate' => 'required|string|max:50',
            'directorate' => 'required|string|max:50',
            'village' => 'required|string|max:50',
            'basin' => 'required|string|max:50',
            'district' => 'required|string|max:50',
            'pieceNumber' => 'required|string|max:20',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'additionalinfo' => 'required|string',
            'landimage1' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',
            'landimage2' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',
            'landimage3' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',
            'landimage4' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',


        ], [
            'phone.regex' => 'The phone number must start with 079, 077, or 078 followed by 7 digits.',
            'idNumber.regex'=>'The id number must be 10 digits'
        ]);
        // Session::flashInput($validatedData);


        $relativeImagePath1 = null;
        $imageName = time() . '_1' . $request->addedLandImagesName. '.' . $request->file('landimage1')->extension();
        $relativeImagePath1 = $imageName;
        $request->file('landimage1')->move(public_path('images'), $imageName);
       


        $relativeImagePath2 = null;
        $imageName = time() . '_2' . $request->addedLandImagesName. '.' . $request->file('landimage2')->extension();
        $relativeImagePath2 = $imageName;
        $request->file('landimage2')->move(public_path('images'), $imageName);
        
        $relativeImagePath3 = null;
        $imageName = time() . '_3' . $request->addedLandImagesName. '.' . $request->file('landimage3')->extension();
        $relativeImagePath3 = $imageName;
        $request->file('landimage3')->move(public_path('images'), $imageName);

        $relativeImagePath4 = null;
        $imageName = time() . '_4' . $request->addedLandImagesName. '.' . $request->file('landimage4')->extension();
        $relativeImagePath4 = $imageName;
        $request->file('landimage4')->move(public_path('images'), $imageName);

        

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
            'user_id' => auth()->user()->id,
        

        ]);

    
       
        LandImages::create([
            'image1' => $relativeImagePath1,
            'image2' => $relativeImagePath2,
            'image3' => $relativeImagePath3,
            'image4' => $relativeImagePath4,
            'sell_form_id'=>$sellforms->id,
        ]);

        Alert::success('Congrats','Your Message has been sent successfully');
        return redirect()->back();


       
    }
    // public function storeImage(Request $request)
    // {
    //     $landimages = new LandImages();
    
    //     $request->validate([
    //         'sell_form_id' => 'required|exists:sell_forms,id',
    //     ]);
    
    //     $sell_form_id = $request->input('sell_form_id');
    //     $landimages->sell_form_id = $sell_form_id;
    
    //     $allowedColumns = ['image1', 'image2', 'image3', 'image4'];
        
    //     foreach ($allowedColumns as $column) {

    //         if ($request->hasFile($column)) {
    //             $image = $request->file($column);
    //             $imageName = time() . '_' . $column . '.' . $image->getClientOriginalExtension();
                
    //             $image->move(public_path('images'), $imageName);
    
    //             $landimages->$column = $imageName;
    //         }
    //     }
        
    
    //     $landimages->save();
    //     return redirect()->route('landimages.index')->with('success', 'Land Images uploaded successfully.');
    // }
}    
