<?php

namespace App\Http\Controllers;


use App\Models\LandCard;
use App\Models\Category;


class FrontCategoryController extends Controller
{
    public function showLandsByCategory($category)
    //This method receives the $category parameter from the route URL.
    {
        // Get the selected category
        $selectedCategory = Category::where('name', $category)->first();
        // Get landcards by the selected category's name
        $landcards = LandCard::where('land_type', $selectedCategory->name)->get();
        return view('pages.categories', compact('landcards'));
    }
    
    
}

// Category::
// This is using Laravel's Eloquent ORM to interact with the database through the Category model.


// where('name', $category):
// This method is a condition applied to the query, specifying that it should retrieve records where the value of the 'name' column matches the value of the $category variable.
// The where method is a common method in Eloquent used for filtering records based on certain conditions.


// first():
// This method is used to execute the query and retrieve the first matching record from the database.
// It returns an instance of the Category model representing the first record that satisfies the specified condition.