<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\LandCard;
use App\Models\LandReservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
   
   
    public function register(){
        return view('pages.register');
    }
    public function login(){
        return view('pages.login');
        
    }
    
    
    public function singlepage($productid)
{
    
    $landcard = LandCard::findOrFail($productid); 
    return view('pages.single-product', ['landcard' => $landcard]);
}

public function reservation(){
    return view('pages.reservation');
}
public function filterlands(Request $request)
{// Check the request data
// dd($request->all());

    // Get filter parameters from the request
    $area = $request->input('area');
    $governorate = $request->input('governorate');
    $minArea = $maxArea = 0;
    $cat_name=$request->input('category_name');

    if ($area !== "") {
        
        if (strpos($area, '-') !== false) {
            // Split the string into an array using the hyphen as the delimiter
            list($minArea, $maxArea) = explode('-', $area);
    
            // Convert the values to integers
            $minArea = (int)$minArea;
            $maxArea = (int)$maxArea;
        }
    }
    

    // dd($minArea);
    $query = DB::table('land_cards');

    if ($minArea != 0) {
        $query->whereBetween('area', [$minArea, $maxArea]);
    }

    if (!empty($governorate)) {
        $query->where('governorate', $governorate);
    }
    if (!empty($cat_name)) {
        $query->where('land_type', $cat_name);
    }
    
// dd($query);
    $landcards = $query->paginate(6);
    $itemCount = $query->count();
            if( $itemCount==0){
                $message = "No lands found .";
                return view('pages.categories', compact('landcards', 'itemCount',  'message'));
            
            }else
        
        {
            return view('pages.categories', compact('landcards','itemCount'));
        }
}

}


