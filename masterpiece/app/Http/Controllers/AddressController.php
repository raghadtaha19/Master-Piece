<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses=Address::get();
        return view('dashboard.addresses.index', compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.addresses.create');
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
            'governorate' => 'required',
            'district' => 'required',
            'piece_number' => 'required|numeric',
            'basin_number' => 'required|numeric',
            'sell_form_id' => 'required|exists:sell_forms,id', // Ensure the sell_form_id exists in the sell_forms table
        ]);
    
        
        Address::create([
            'governorate' => $request->input('governorate'),
            'district' => $request->input('district'),
            'piece_number' => $request->input('piece_number'),
            'basin_number' => $request->input('basin_number'),
            'sell_form_id' => $request->input('sell_form_id'),
        ]);
    
        return redirect()->route('addresses.index')->with('success', 'Address created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addresses = Address::findOrFail($id);
        return view('dashboard.addresses.edit', compact('addresses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'governorate' => 'required',
        //     'district' => 'required',
        //     'piece_number' => 'required',
        //     'basin_number' => 'required',
        //     'sell_form_id' => 'required|exists:sell_forms,id',
        // ]);
    
        $address = Address::findOrFail($id);
    
        $address->update([
            'governorate' => $request->input('governorate'),
            'district' => $request->input('district'),
            'piece_number' => $request->input('piece_number'),
            'basin_number' => $request->input('basin_number'),
            'sell_form_id' => $request->input('sell_form_id'),
        ]);
    
        return redirect()->route('addresses.index')->with('success', 'Address updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Address::destroy($id);
        return back()->with('success', 'Address deleted successfully.');
    }
}
