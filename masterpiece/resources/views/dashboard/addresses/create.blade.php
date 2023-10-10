@extends('dashboard.dashboard_layouts.master')

@section('title','Create New Addresse')


@section('css')
@endsection

@section('title_page1')
Addresses
@endsection

@section('title_page2')
Create New Address
@endsection

@section('content')

<form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('addresses.store') }}" enctype="multipart/form-data">
    @csrf
    @method('POST')
  
    <div class="form-group">
      <label for="governorate">Governorate:</label>
      <input type="text" name="governorate" class="form-control" placeholder="Enter Governorate" required>
      @error('governorate')<span class="text-danger">{{ $message }}</span>@enderror
    </div>
  
    <div class="form-group">
      <label for="district">District:</label>
      <input type="text" name="district" class="form-control" placeholder="Enter District" required>
      @error('district')<span class="text-danger">{{ $message }}</span>@enderror
    </div>
  
    <div class="form-group">
      <label for="piece_number">Piece Number:</label>
      <input type="text" name="piece_number" class="form-control" placeholder="Enter Piece Number" required>
      @error('piece_number')<span class="text-danger">{{ $message }}</span>@enderror
    </div>
  
    <div class="form-group">
      <label for="basin_number">Basin Number:</label>
      <input type="text" name="basin_number" class="form-control" placeholder="Enter Basin Number" required>
      @error('basin_number')<span class="text-danger">{{ $message }}</span>@enderror
    </div>
  
    <div class="form-group">
      <label for="sell_form_id">Sell Form ID:</label>
      <input type="text" name="sell_form_id" class="form-control" placeholder="Enter Sell Form ID" required>
      @error('sell_form_id')<span class="text-danger">{{ $message }}</span>@enderror
    </div>
  
    <br>
    <input type="submit" value="Add Address" class="btn btn-success">
  </form>
  



@endsection

@section('scripts')

@endsection