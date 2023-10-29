<?php


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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
            'image' => 'required|image|mimes:jpeg,png,gif,bmp,svg,webp|max:2048',
        ]);

       
        $relativeImagePath = null;
        $newImageName = uniqid() . '-' . $request->addedCategoryName . '.' . $request->file('image')->extension();
        $relativeImagePath = 'assets/images/' . $newImageName;
        $request->file('image')->move(public_path('assets/images'), $newImageName);
        
       

       

    Category::create([
        'name' => $request->input('name'),
        'image' => $relativeImagePath,
    ]);
    return redirect()->route('categories.index')->with('success', 'Category created successfully.');
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string:100',
            'image' => 'required|image|mimes:png,gif,bmp,svg,webp|max:2048',
        ]);
        
        $data = $request->except(['_token', '_method']);

        // Check if a new image was uploaded
        if ($request->hasFile('image')) {
            $newImage = $this->storeImage($request);

            // Update the image column only if a new image was uploaded
            $data['image'] = $newImage;
        }

        Category::where('id', $id)->update($data);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return back()->with('success', 'Category deleted successfully.');
    }

   
    // public function storeImage($request)
    // {
    //     $newImageName = uniqid() . '-' . $request->addedCategoryName . '.' . $request->file('image')->extension();
    //     $relativeImagePath = 'assets/images/' . $newImageName;
    //     $request->file('image')->move(public_path('assets/images'), $newImageName);
    //     return $relativeImagePath;

    // }
}