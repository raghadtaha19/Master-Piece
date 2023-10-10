@extends('dashboard.dashboard_layouts.master')

@section('title','Create New Land Card')


@section('css')
@endsection

@section('title_page1')
Land Cards
@endsection

@section('title_page2')
Create New Land Card
@endsection

@section('content')


<form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('landcards.store') }}" enctype="multipart/form-data">
  @csrf

  {{-- <div class="form-group">
    <label for="sell_form_id">Select Sell Form:</label>
    <select name="sell_form_id" class="form-control" required>
      <option value="">Select Sell Form</option>
      @foreach ($sellForms as $sellForm)
        <option value="{{ $sellForm->id }}">{{ $sellForm->land_type }}</option>
      @endforeach
    </select>
    @error('sell_form_id') <span class="text-danger">{{ $message }}</span> @enderror
  </div> --}}


  <div class="form-group">
    <label for="image">Land Image:</label>
    <input type="file" name="image" class="form-control"   required>
    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
      <label for="category_id">Land Type:</label>
      <select name="category_id" class="form-control" required>
          <option value="">Select Land Type</option>
          @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
      </select>
      @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
   </div>
   


  <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
      @error('price') <span class="text-danger">{{ $message }}</span> @enderror
   </div>

  <div class="form-group">
    <label for="governorate">Governorate:</label>
    <input type="text" name="governorate" class="form-control" placeholder="Enter Governorate" required>
    @error('governorate') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <div class="form-group">
    <label for="district">District:</label>
    <input type="text" name="district" class="form-control" placeholder="Enter District" required>
    @error('district') <span class="text-danger">{{ $message }}</span> @enderror
   </div>



  <div class="form-group">
      <label for="area">Area:</label>
      <input type="text" name="area" class="form-control" placeholder="Enter Area" required>
      @error('area') <span class="text-danger">{{ $message }}</span> @enderror
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

  

  <input type="submit" value="Add Land Card" class="btn btn-success">
</form>

              
         
          
        
   
@endsection

@section('scripts')

@endsection