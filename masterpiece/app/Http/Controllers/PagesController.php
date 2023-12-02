<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\LandCard;
use App\Models\LandReservation;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    
    public function home(){
        $categories = Category::all();
        $landcards = LandCard::paginate(6); 
        $landreservation=LandReservation::all();

        return view('pages.home', compact('categories','landcards', 'landreservation'));

    }
    public function about(){
        return view('pages.about');
    }
   
    public function contact(){
        return view('pages.contact');
    }
    public function services(){
        return view('pages.services');
    }

   
    public function register(){
        return view('pages.register');
    }
    public function login(){
        return view('pages.login');
        
    }
   
    
    public function singlepage($product)
{
    $landcard = LandCard::findOrFail($product); 
    $landimages = $landcard->landImages;//for slider images
    return view('pages.single-product', compact('landimages', 'landcard'));
}
//The $productid parameter in the singlepage method is a placeholder for the dynamic segment in the URL.
//This is a common pattern in Laravel routes where you can define routes with parameters,
//and these parameters are passed to the corresponding controller method.
    

public function reservation(){
    return view('pages.reservation');
}


public function filterlands(Request $request)
{
    $landcards=LandCard::get();

    //Retrieves filter parameters from the request.
    $area = $request->input('area');
    $governorate = $request->input('governorate');
    $minArea = $maxArea = 0;


//Check if the area parameter is not empty and contains a hyphen:
    if ($area !== "") { 
        if (strpos($area, '-') !== false) {
            // Split the string into an array using the hyphen as the delimiter
            list($minArea, $maxArea) = explode('-', $area);
    
            // Convert the values to integers
            $minArea = (int)$minArea;
            $maxArea = (int)$maxArea;
        }
    }
    

//Create a query builder instance for the 'land_cards' table
    $query = DB::table('land_cards');
    if ($minArea != 0) {
        $query->whereBetween('area', [$minArea, $maxArea]);
    }

    if (!empty($governorate)) {
        $query->where('governorate', $governorate);
    }
   
    //Executes the query and retrieves the filtered land cards
    $landcards = $query->get();
    $itemCount = $query->count();

    

            if( $itemCount==0){
                $message = "No lands found .";
                return view('pages.all_lands', compact('landcards','message'));
            
            }else
        
        {
            return view('pages.all_lands', compact('landcards','itemCount'));
        }
}

}


