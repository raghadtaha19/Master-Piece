<?php

namespace App\Http\Controllers;

use App\Models\LandCard;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class LandCardController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $landcards=LandCard::get();
        $users=User::get();
       return view('dashboard.landcards.index', compact('users','landcards','categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.landcards.create', compact('categories'));
    
    }

    public function store(Request $request)
{
    $relativeImagePath = null;
    $newImageName = uniqid() . '-' . $request->addedLandCardName . '.' . $request->file('image')->extension();
    $relativeImagePath = 'assets/images/' . $newImageName;
    $request->file('image')->move(public_path('assets/images'), $newImageName);
    

    $request->validate([
        
        'category_id' => 'required',
        'price' => 'required',
        'governorate' => 'required',
        'district' => 'required',
        'area' => 'required',
        'image' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',

    ]);
   
    $selectedCategory = Category::find($request->input('category_id'));
    if ($selectedCategory) {
        $land_type = $selectedCategory->name;    

    LandCard::create([
        'image' => $relativeImagePath,
        'land_type' =>$land_type,
        'price' => $request->input('price'),
        'governorate' => $request->input('governorate'),
        'district' => $request->input('district'),
        'area' => $request->input('area'),
        'category_id' => $request->input('land_type'),
    ]);

    return redirect()->route('landcards.index')->with('success', 'Land Card created successfully');

} else {
  
    return redirect()->route('landcards.create')->withInput()->with('error', 'Selected category does not exist.');

}

}


public function edit($id)
{
    $landcards = LandCard::findOrFail($id);
    $categories = Category::all();

    return view('dashboard.landcards.edit', compact('landcards', 'categories'));
}

public function update(Request $request, $id)
{
    $data = $request->except(['_token', '_method']);

    // Find the LandCard by ID
    $landcards = LandCard::findOrFail($id);

    // Check if a new image was uploaded
    if ($request->hasFile('image')) {
        $newImage = $this->storeImage($request);

        // Update the image column only if a new image was uploaded
        $data['image'] = $newImage;
    }

    // Update properties
    $landcards->update($data);

    return redirect()->route('landcards.index')->with('success', 'Land Card updated successfully.');
}

    public function destroy($id)
    {
        LandCard::destroy($id);
        return back()->with('success', 'Land Card deleted successfully.');
    }

    
    public function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->addedLandCardName . '.' . $request->file('image')->extension();
        $relativeImagePath = 'assets/images/' . $newImageName;
        $request->file('image')->move(public_path('assets/images'), $newImageName);


        return $relativeImagePath;

    }
}

