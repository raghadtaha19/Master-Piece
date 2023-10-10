@extends('dashboard.dashboard_layouts.master')

@section('title','Create New Land Images')


@section('css')
@endsection

@section('title_page1')
Land Images

@endsection

@section('title_page2')
Create New Land Images

@endsection

@section('content')


<form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('landimages.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="sell_form_id">Select Sell Form:</label>
    <select name="sell_form_id" class="form-control" required>
      <option value="">Select Sell Form</option>
      @foreach ($sellforms as $sellform)
        <option value="{{ $sellform->id }}">{{ $sellform->id }}</option>
      @endforeach
    </select>
    @error('sell_form_id') <span class="text-danger">{{ $message }}</span> @enderror
  </div>

  <!-- Land Image 1 -->
  <div class="form-group">
      <label for="image1">Image 1:</label>
      <input type="file" name="image1" class="form-control-file" accept="image/*" required>
  </div>

  <!-- Land Image 2 -->
  <div class="form-group">
      <label for="image2">Image 2:</label>
      <input type="file" name="image2" class="form-control-file" accept="image/*" required>
  </div>

  <!-- Land Image 3 -->
  <div class="form-group">
      <label for="image3">Image 3:</label>
      <input type="file" name="image3" class="form-control-file" accept="image/*" required>
  </div>

  <!-- Land Image 4 -->
  <div class="form-group">
      <label for="image4">Image 4:</label>
      <input type="file" name="image4" class="form-control-file" accept="image/*" required>
  </div>

  <br>
  <input type="submit" value="Add Land Images" class="btn btn-success">
</form>

              
         
          
        
   
@endsection

@section('scripts')

@endsection