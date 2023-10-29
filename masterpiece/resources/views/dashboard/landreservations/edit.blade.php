@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit Land Reservation')

@section('css')
@endsection

@section('title_page1')
    Edit
@endsection

@section('title_page2')
    Edit Land Reservations
@endsection

@section('content')
<div class="container-fluid">
    <h2>Edit Land Reservation Information</h2>
     
    <form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('landreservations.update', $landreservation->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
    
        <div class="form-group">
            <label for="user_id">User:</label>
            <select name="user_id" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $landreservation->user_id ? 'selected' : '' }}>{{ $user->email }}</option>
                @endforeach
            </select>
            @error('user_id')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    
        <div class="form-group">
            <label for="land_card_id">Land Card:</label>
            <select name="land_card_id" class="form-control" required>
                @foreach ($landcards as $landcard)
                    <option value="{{ $landcard->id }}" {{ $landcard->id == $landreservation->land_card_id ? 'selected' : '' }}>{{ $landcard->governorate }}</option>
                @endforeach
            </select>
            @error('land_card_id')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" name="status" class="form-control" value="{{ $landreservation->status }}" required>
            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    
        <div class="form-group">
            <label for="reservation_date">Reservation Date:</label>
            <input type="date" name="reservation_date" class="form-control" value="{{ $landreservation->reservation_date }}" required>
            @error('reservation_date')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    
        <div class="form-group">
            <label for="available_land_message">Available Land Message:</label>
            <input type="text" name="available_land_message" class="form-control" value="{{ $landreservation->available_land_message }}" required>
            @error('available_land_message')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    
        <div class="form-group">
            <label for="sold_land_message">Sold Land Message:</label>
            <input type="text" name="sold_land_message" class="form-control" value="{{ $landreservation->sold_land_message }}" required>
            @error('sold_land_message')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    
        <br>
        <input type="submit" value="Update Land Reservation" class="btn btn-success">
    </form>
</div>

@endsection

@section('scripts')
@endsection
