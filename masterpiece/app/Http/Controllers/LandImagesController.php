<?php

namespace App\Http\Controllers;

use App\Models\LandImages;
use App\Models\SellForm;
use Illuminate\Http\Request;

class LandImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $landimages=LandImages::get();
        return view('dashboard.landimages.index', compact('landimages'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellforms = SellForm::all();
        return view('dashboard.landimages.create', compact('sellforms'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $landimages = new LandImages();
    
        
        $request->validate([
            'sell_form_id' => 'required|exists:sell_forms,id',
            'image1' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',

        ]);

    
        $sell_form_id = $request->input('sell_form_id');
        $landimages->sell_form_id = $sell_form_id;
        
        if ($request->hasFile('image1')) {
            $images = [$request->file('image1'), $request->file('image2'), $request->file('image3'), $request->file('image4')];
                
            foreach ($images as $key => $image) {
                  $allowedColumns = ['image1', 'image2', 'image3', 'image4'];

                if ($image && isset($allowedColumns[$key])) {
                    $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images'), $imageName);
    
                    // Save the image's file name to the corresponding column
                    $imageField = $allowedColumns[$key];
                    $landimages->$imageField = $imageName;
                    

                }
            }

        }
        
        $landimages->save();
        
        
    
        return redirect()->route('landimages.index')->with('success', 'Land Images uploaded successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandImages  $landImages
     * @return \Illuminate\Http\Response
     */
    public function show(LandImages $landImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandImages  $landImages
     * @return \Illuminate\Http\Response
     */
    public function edit(LandImages $landImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandImages  $landImages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandImages $landImages,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandImages  $landImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandImages $landImages,$id)
    {
        LandImages::destroy($id);
        return back()->with('success', 'LandImages deleted successfully.');
 
    }


}
