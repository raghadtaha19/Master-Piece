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
    
    public function singlepage($product)
{
    
    $landcard = LandCard::findOrFail($product); 
    return view('pages.single-product', ['landcard' => $landcard]);
}


}
