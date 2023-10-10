@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit Address')

@section('css')
@endsection

@section('title_page1')
    Edit
@endsection

@section('title_page2')
    Edit Address
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Address</div>

                <div class="card-body">
                    <form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('addresses.update', $addresses->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="governorate">Governorate:</label>
                            <input type="text" name="governorate" class="form-control" placeholder="Enter Governorate" value="{{ $addresses->governorate }}" required>
                            @error('governorate')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="district">District:</label>
                            <input type="text" name="district" class="form-control" placeholder="Enter District" value="{{ $addresses->district }}" required>
                            @error('district')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="piece_number">Piece Number:</label>
                            <input type="text" name="piece_number" class="form-control" placeholder="Enter Piece Number" value="{{ $addresses->piece_number }}" required>
                            @error('piece_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="basin_number">Basin Number:</label>
                            <input type="text" name="basin_number" class="form-control" placeholder="Enter Basin Number" value="{{ $addresses->basin_number }}" required>
                            @error('basin_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="sell_form_id">Sell Form ID:</label>
                            <input type="text" name="sell_form_id" class="form-control" placeholder="Enter Sell Form ID" value="{{ $addresses->sell_form_id }}" required>
                            @error('sell_form_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <br>
                        <input type="submit" value="Update Address" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
