<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::get();
       return view('dashboard.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.categories.create');
        
    }

    public function store(Request $request)
    
    {
        $request->validate([
            'name' => 'required|string:100',
            'image' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp',
        ]);

    $categories = new Category();

     

        $categories->name = $request->input('name');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Upload the image to the public/images directory
            $categories->image = $imageName;
            $categories->save();

        }


        return redirect()->route('categories.index')->with('success', 'category created successfully');
    }







    public function show(Category $category)
    {
        //
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('dashboard.categories.edit', compact('categories'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'string:100',
            'image' => 'image|mimes:jpeg,png,gif,bmp,svg,webp',
        ]);
       
        $categories = Category::findOrFail($id);

        $categories->name = $request->input('name');
        

        if ($request->hasFile('new_image')) {
            $image = $request->file('new_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $categories->image = $imageName;
        }


        $categories->save();

        return redirect()->route('categories.index')->with('success', 'category updated successfully');
   }




    public function destroy($id)
    {
        Category::destroy($id);
        return back()->with('success', 'Category deleted successfully.');
    }

   
 

}