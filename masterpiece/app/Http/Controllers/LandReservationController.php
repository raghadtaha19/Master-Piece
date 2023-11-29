<?php

namespace App\Http\Controllers;

use App\Models\LandReservation;
use App\Models\User;
use App\Models\LandCard;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        // Check if the user is authenticated
        if (auth()->check()) {
            $user_id = auth()->id();
    
            // Check if the user already has a reservation
            $existingReservation = LandReservation::where('user_id', $user_id)->first();
    
            if ($existingReservation) {
                // Redirect the user to a reserved page or handle it accordingly
                return view('pages.reserved');
            }
    
            $landcard = LandCard::find($id);
    
            if (!$landcard) {
                return redirect()->route('home')->with('error', 'Land card not found.');
            }
    
            // Create a new reservation
            $landreservation = new LandReservation();
            $landreservation->user_id = $user_id;
            $landreservation->land_card_id = $landcard->id;
            $landreservation->status = 'reserve';
            $landreservation->reservation_date = now();
            $landreservation->save();
    
            // Retrieve all land cards and categories (you may need to adjust this part based on your specific needs)
            $landcards = LandCard::all();
            $categories = Category::all();
            $landcardData = json_decode($request->input('landcard_data'));
// dd($landcardData);
            // Redirect to the 'reservation' view and pass data to the view
            return view('pages.paypal', compact('categories', 'landcardData', 'landreservation', 'landcards'));
        } else {
            // If the user is not authenticated, redirect to the login page
            return redirect()->route('login');
        }
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
    public function deal($id)
    {
        $landReservation = LandReservation::find($id);
    
        if (!$landReservation) {
            return back()->with('error', 'Land Reservation not found.');
        }
    
        $user = User::find($landReservation->user_id);
    
        if (!$user) {
            return back()->with('error', 'User not found.');
        }
    
        try {
            $this->moveToTransaction($landReservation);
            return back()->with('success', 'Reservation Land moved successfully.');
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error($e);
            return back()->with('error', 'An error occurred while moving the reservation.');
        }
    }
    

    private function moveToTransaction($landReservation)
    {
        if (!$landReservation) {
            return back()->with('error', 'Land Reservation not found.');
        }
    
        $transaction = new Transaction();
        $user_id = auth()->id();
    
        // Set the 'user_id' in the Transaction model
        $transaction->user_id = $user_id;
        // Set other attributes individually
        $transaction->land_card_id = $landReservation->land_card_id;
        // Add other attributes as needed
    
        try {
            // Save the transaction before deleting the land reservation
            $transaction->save();
    
            // Optionally, you can keep the reservation record if needed
            // $landReservation->update(['transaction_id' => $transaction->id]);
    
            // Remove this line if you want to keep the reservation record
            // $landReservation->delete();
    
            return back()->with('success', 'Land Reservation moved successfully.');
        } catch (\Exception $e) {
            Log::error("Error moving Land Reservation ID: {$landReservation->id} to Transaction. Error: " . $e->getMessage());
            return back()->with('error', 'An error occurred while moving the reservation.');
        }
    }
    
}