@extends('dashboard.dashboard_layouts.master')

@section('title', 'Create New partner')


@section('css')
@endsection

@section('title_page1')
    Land Reservations
@endsection

@section('title_page2')
    Create New Land Reservation
@endsection

@section('content')


<form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('landreservations.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="user_id">User:</label>
        <select name="user_id" class="form-control" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->email }}</option>
            @endforeach
        </select>
        @error('user_id')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="land_card_id">Land Card:</label>
        <select name="land_card_id" class="form-control" required>
            @foreach ($landcards as $landcard)
                <option value="{{ $landcard->id }}">{{ $landcard->governorate }}</option>
            @endforeach
        </select>
        @error('land_card_id')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="status">Status:</label>
        <input type="text" name="status" class="form-control" placeholder="Enter Status" required>
        @error('status')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="reservation_date">Reservation Date:</label>
        <input type="date" name="reservation_date" class="form-control" required>
        @error('reservation_date')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="available_land_message">Available Land Message:</label>
        <input type="text" name="available_land_message" class="form-control" placeholder="Enter Available Land Message" required>
        @error('available_land_message')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="sold_land_message">Sold Land Message:</label>
        <input type="text" name="sold_land_message" class="form-control" placeholder="Enter Sold Land Message" required>
        @error('sold_land_message')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <br>
    <input type="submit" value="Add Land Reservation" class="btn btn-success">
</form>



@endsection

@section('scripts')

    <script>
        // Get the 'Reservation Date' input element
        const reservationDateInput = document.querySelector('input[name="reservation_date"]');
        
        // Get the current date in the 'YYYY-MM-DD' format
        const currentDate = new Date().toISOString().split('T')[0];
        
        // Set the 'min' attribute of the input element to the current date
        reservationDateInput.min = currentDate;
    </script>
    
@endsection


