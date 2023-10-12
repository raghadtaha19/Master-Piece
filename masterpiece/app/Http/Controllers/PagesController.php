<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\LandCard;


class PagesController extends Controller
{
    
    public function home(){
        $categories = Category::all();
        $landcards = LandCard::paginate(6); ; 
        return view('pages.home', compact('categories','landcards'));
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
{
    // Get filter parameters from the request
    $area = $request->input('area');
    $price = $request->input('price');
    $governorate = $request->input('governorate');

    // Query your database to filter land cards based on the selected options
    $filteredLandCards = LandCard::where(function ($query) use ($area, $price, $governorate) {
        if ($area) {
            // Check if $area contains a valid range
            if (strpos($area, '-') !== false) {
                // Parse the area range and add conditions to the query
                list($minArea, $maxArea) = explode('-', $area);
                $query->whereBetween('area', [$minArea, $maxArea]);
            }
        }

        if ($price) {
            // Check if $price contains a valid range
            if (strpos($price, '-') !== false) {
                // Parse the price range and add conditions to the query
                list($minPrice, $maxPrice) = explode('-', $price);
                $query->whereBetween('price', [$minPrice, $maxPrice]);
            }
        }

        if ($governorate) {
            $query->where('governorate', $governorate);
        }
    })->get();

    // Return a view with the filtered land cards
    return view('pages.categories', ['landcards' => $filteredLandCards]);
}

}
