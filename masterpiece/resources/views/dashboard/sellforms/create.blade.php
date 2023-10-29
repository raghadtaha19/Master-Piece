@extends('dashboard.dashboard_layouts.master')

@section('title','Create New Sell Form')


@section('css')
@endsection

@section('title_page1')
Sell Forms
@endsection

@section('title_page2')
Create New Sell Form
@endsection

@section('content')


<form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('sellforms.store') }}" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="form-group">
        <label for="land_type">Land Type:</label>
        <select name="land_type"  class="form-control" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('land_type')<span class="text-danger">{{ $message }}</span>@enderror
       </div>
       <input type="hidden" name="category_id" value="{{ $category->id }}">
       
       

    <div class="form-group">
        <label for="user_id">User Email:</label>
        <input type="email" name="user_id" class="form-control" placeholder="Enter email" required>
        @error('user_id')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
        @error('price')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="area">Area:</label>
        <input type="text" name="area" class="form-control" placeholder="Enter Area" required>
        @error('area')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control" placeholder="Enter Description" required></textarea>
        @error('description')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="additional_information">Additional Information:</label>
        <textarea name="additional_information" class="form-control" placeholder="Enter Additional Information" required></textarea>
        @error('additional_information')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="ID_number">ID Number:</label>
        <input type="text" name="ID_number" class="form-control" placeholder="Enter ID Number" required>
        @error('ID_number')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

   
    <div class="form-group">
        <label for="governorate">Governorate:</label>
        <input type="text" name="governorate" class="form-control" placeholder="Enter Governorate" required>
        @error('governorate')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="directorate">Directorate:</label>
        <input type="text" name="directorate" class="form-control" placeholder="Enter Directorate" required>
        @error('directorate')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="village">Village:</label>
        <input type="text" name="village" class="form-control" placeholder="Enter Village" required>
        @error('village')<span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="basin">Basin:</label>
        <input type="text" name="basin" class="form-control" placeholder="Enter Basin" required>
        @error('basin')<span class="text-danger">{{ $message }}</span>@enderror
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

    <br>
    <input type="submit" value="Add SellForm" class="btn btn-success">
</form>


              
         
          
        
   
@endsection

@section('scripts')

@endsection