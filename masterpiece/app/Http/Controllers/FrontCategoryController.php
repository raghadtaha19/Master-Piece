<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\LandCard;
use App\Models\Category;


class FrontCategoryController extends Controller
{
    public function showLandsByCategory($category)
    {
        // Get the selected category
        $selectedCategory = Category::where('name', $category)->first();
        // Get landcards by the selected category's name
        $landcards = LandCard::where('land_type', $selectedCategory->name)->get();
        // Pass the data to your view
        return view('pages.categories', compact('landcards', 'selectedCategory'));
    }
    
    
}