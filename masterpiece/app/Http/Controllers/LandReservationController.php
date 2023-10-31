<?php

namespace App\Http\Controllers;

use App\Models\LandReservation;
use App\Models\User;
use App\Models\LandCard;
use App\Models\Category;
use Illuminate\Http\Request;

class LandReservationController extends Controller
{
    public function index()
    {
        $users=User::get();
        $landcards=LandCard::get();
        $landreservations = LandReservation::get();
        return view('dashboard.landreservations.index', compact('landreservations','users','landcards'));
    }

    public function create()
    {
        $users=User::get();
        $landcards=LandCard::get();
        return view('dashboard.landreservations.create', compact('users','landcards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'land_card_id' => 'required|exists:land_cards,id',
            'status' => 'required',
            'reservation_date' => 'required|date',
            'available_land_message' => 'required',
            'sold_land_message' => 'required',
        ]);

        $landreservations = new Landreservation();
        $landreservations->user_id = $request->input('user_id');
        $landreservations->land_card_id = $request->input('land_card_id');
        $landreservations->status = $request->input('status');
        $landreservations->reservation_date = $request->input('reservation_date');
        $landreservations->available_land_message = $request->input('available_land_message');
        $landreservations->sold_land_message = $request->input('sold_land_message');

        $landreservations->save();

        return redirect()->route('landreservations.index')->with('success', 'Land Reservation created successfully');
    }

    public function reserveAndRedirect(Request $request, $id)
    {
        if (auth()->check()) {
            $user_id = auth()->id();
        } else {
            return redirect()->route('login');
        }
    
        $landcard = LandCard::find($id);
    
        // Check if the user has already made a reservation for this land card
        $existingReservation = LandReservation::where('user_id', $user_id)
            ->where('land_card_id', $landcard->id)
            ->first();
    
        if ($existingReservation) {
            return view('pages.reserved');
        }
    
        $landreservation = new LandReservation();
        $landreservation->user_id = $user_id;
        $landreservation->land_card_id = $landcard->id;
        $landreservation->status = 'reserve';
        $landreservation->reservation_date = now();
        $landreservation->save();
    
        // Retrieve all land cards
        $landcards = LandCard::all();
        $categories = Category::all();


    
        // Redirect to the 'home' route and pass data to the view
        return view('pages.reservation', compact('categories','landcards', 'landreservation'));
    }
    
    




    public function show(LandReservation $landReservation)
    {
    }

    public function edit($id)
    {
        $users=User::get();
        $landcards=LandCard::get();
        $landreservation = LandReservation::findOrFail($id);
        return view('dashboard.landreservations.edit', compact('landreservation' ,'users','landcards'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'land_card_id' => 'required|exists:land_cards,id',
            'status' => 'required',
            'reservation_date' => 'required|date',
            'available_land_message' => 'required',
            'sold_land_message' => 'required',
        ]);

        $landReservation = LandReservation::findOrFail($id);
        $landReservation->user_id = $request->input('user_id');
        $landReservation->land_card_id = $request->input('land_card_id');
        $landReservation->status = $request->input('status');
        $landReservation->reservation_date = $request->input('reservation_date');
        $landReservation->available_land_message = $request->input('available_land_message');
        $landReservation->sold_land_message = $request->input('sold_land_message');

        $landReservation->save();

        return redirect()->route('landreservations.index')->with('success', 'Land Reservation updated successfully');
    }

    public function destroy($id)
    {
        LandReservation::destroy($id);
        return back()->with('success', 'Land Reservation deleted successfully.');
    }
}
