<?php

namespace App\Http\Controllers;

use App\Models\SellForm;
use App\Models\Category;
use App\Models\User;
use App\Models\LandCard;
use App\Models\LandImages;
use Illuminate\Http\Request;

class SellFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $users = User::all();
        $sellforms=SellForm::where ('Status','=','pending')->get();
        return view('dashboard.sellforms.index', compact('users','categories','sellforms'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $users=User::all();
    $categories = Category::all(); 
    return view('dashboard.sellforms.create', compact('categories','users'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ID_number' => 'required',
            'land_type' => 'required',
            'governorate' => 'required',
            'directorate' => 'required',
            'village' => 'required',
            'basin' => 'required',
            'district' => 'required',
            'piece_number' => 'required',
            'area' => 'required',
            'price' => 'required',
            'description' => 'required',
            'additional_information' => 'required',
            // 'user_id' => auth()->id(), 
        ]);

        // Find the selected category
        $selectedCategory = Category::find($request->input('land_type'));
        // $user = User::find($request->input('user_id'));
        $user = User::where('email', $request->input('user_id'))->first();
    if ($user) {
        $userId = $user->id;
        // dd($userId);
    } else {
        // Handle the case where the user with the given email doesn't exist
        $userId = null; // You can set it to null or handle it as needed
    }

        if ($selectedCategory && $user) {
            // Create the SellForm record
            SellForm::create([
                'ID_number' => $request->input('ID_number'),
                'land_type' => $selectedCategory->name,
                'governorate' => $request->input('governorate'),
                'directorate' => $request->input('directorate'),
                'village' => $request->input('village'),
                'basin' => $request->input('basin'),
                'district' => $request->input('district'),
                'piece_number' => $request->input('piece_number'),
                'area' => $request->input('area'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'additional_information' => $request->input('additional_information'),
                'user_id' =>  $userId,

            ]);

            return redirect()->route('sellforms.index')->with('success', 'Sell Form created successfully.');
            
        } else {
            // Handle the case where the selected category or user does not exist
            return redirect()->route('sellforms.create')->with('error', 'Selected category or user does not exist.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SellForm  $sellForm
     * @return \Illuminate\Http\Response
     */
    public function show(SellForm $sellForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SellForm  $sellForm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $users = User::all();
        $sellforms = SellForm::find($id);
        return view('dashboard.sellforms.edit', compact('users','categories','sellforms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SellForm  $sellForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $selectedCategory = Category::find($request->input('land_type'));
        // $user = User::find($request->input('user_id'));
        // $user = User::where('email', $request->input('user_id'))->first();
    
        // if ($user) {
        //     $userId = $user->id;
        // } else {
        //     $userId = null; 
        // }

        if ($selectedCategory) {
            $sellform = SellForm::findOrFail($id);
            $sellform->ID_number = $request->input('ID_number');
            $sellform->land_type = $selectedCategory->name;
            $sellform->governorate = $request->input('governorate');
            $sellform->directorate = $request->input('directorate');
            $sellform->village = $request->input('village');
            $sellform->basin = $request->input('basin');
            $sellform->district = $request->input('district');
            $sellform->piece_number = $request->input('piece_number');
            $sellform->area = $request->input('area');
            $sellform->price = $request->input('price');
            $sellform->description = $request->input('description');
            $sellform->additional_information = $request->input('additional_information');
            $sellform->user_id = auth()->id();
            $sellform->save();

            return redirect()->route('sellforms.index')->with('success', 'Sell Form updated successfully');
        } else {
            // Handle the case where the selected category or user does not exist
            return redirect()->route('sellforms.edit', $id)->with('error', 'Selected category or user does not exist.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SellForm  $sellForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SellForm::destroy($id);
        return back()->with('success', 'Sell Form deleted successfully.');
    }


    public function accept($id)
    {
        $sellForm = SellForm::find($id);
    
        if ($sellForm) {
            // Move the record to the landcards table
            $this->moveToLandcards($sellForm);
            return back()->with('success', 'Sell Form moved successfully.');
        } else {
            return back()->with('error', 'Sell Form not found.');
            // or you might want to redirect to a specific page or handle this case differently
        }
    }
    
    private function moveToLandcards($sellForm)
    {
        $landimages = LandImages::all();
    
        if ($sellForm) {
            // Assuming Landcard is the model for the landcards table
            $landcard = new LandCard();
    
            // Remove the 'id' field before filling the new model
            $sellformData = $sellForm->getAttributes();
    
            $landcard->fill($sellformData);
    
            // Assuming you want to set the 'image1' attribute of Landcard from the first image in LandImages
            if ($landimages->isNotEmpty()) {
                $landcard->image = $landimages->first()->image1; // Adjust this based on your actual field name in landimages
            } else {
                // Handle case where no images are found in the LandImages table
                return back()->with('error', 'No Land Images found.');
            }
    
            $landcard->save();
    
            // Optionally, you can delete the record from the sellforms table
            // $sellForm->delete();
    
            return back()->with('success', 'Sell Form moved successfully.');
        } else {
            // Handle case where $sellForm is null
            return back()->with('error', 'Sell Form not found.');
            // or you might want to redirect to a specific page or handle this case differently
        }
    }
    

    
}