@extends('dashboard.dashboard_layouts.master')

@section('title', 'Edit Sell Form')

@section('css')
@endsection

@section('title_page1')
Sell Forms
@endsection

@section('title_page2')
Edit Sell Form
@endsection

@section('content')

<form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('sellforms.update', $sellforms->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="land_type">Land Type:</label>
        <select name="land_type" class="form-control" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $sellforms->land_type ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('land_type')<span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <input type="hidden" name="category_id" value="{{ $category->id }}">
    

    <div class="form-group">
        <label for="user_id">User Email:</label>
        <input type="email" name="user_id" class="form-control" value="{{ $sellforms->user->email }}" placeholder="Enter email" required>
        @error('user_id')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" class="form-control" value="{{ $sellforms->price }}" placeholder="Enter Price" required>
        @error('price')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="area">Area:</label>
        <input type="text" name="area" class="form-control" value="{{ $sellforms->area }}" placeholder="Enter Area" required>
        @error('area')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control" placeholder="Enter Description" required>{{ $sellforms->description }}</textarea>
        @error('description')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="additional_information">Additional Information:</label>
        <textarea name="additional_information" class="form-control" placeholder="Enter Additional Information" required>{{ $sellforms->additional_information }}</textarea>
        @error('additional_information')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="ID_number">ID Number:</label>
        <input type="text" name="ID_number" class="form-control" value="{{ $sellforms->ID_number }}" placeholder="Enter ID Number" required>
        @error('ID_number')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <!-- New Fields -->
    <div class="form-group">
        <label for="governorate">Governorate:</label>
        <input type="text" name="governorate" class="form-control" value="{{ $sellforms->governorate }}" placeholder="Enter Governorate" required>
        @error('governorate')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="directorate">Directorate:</label>
        <input type="text" name="directorate" class="form-control" value="{{ $sellforms->directorate }}" placeholder="Enter Directorate" required>
        @error('directorate')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="village">Village:</label>
        <input type="text" name="village" class="form-control" value="{{ $sellforms->village }}" placeholder="Enter Village" required>
        @error('village')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="basin">Basin:</label>
        <input type="text" name="basin" class="form-control" value="{{ $sellforms->basin }}" placeholder="Enter Basin" required>
        @error('basin')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="district">District:</label>
        <input type="text" name="district" class="form-control" value="{{ $sellforms->district }}" placeholder="Enter District" required>
        @error('district')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="piece_number">Piece Number:</label>
        <input type="text" name="piece_number" class="form-control" value="{{ $sellforms->piece_number }}" placeholder="Enter Piece Number" required>
        @error('piece_number')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <br>
    <input type="submit" value="Update SellForm" class="btn btn-success">
</form>



@endsection

@section('scripts')

@endsection
