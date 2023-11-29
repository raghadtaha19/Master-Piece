@extends('dashboard.dashboard_layouts.master')

@section('title','Edit category')


@section('css')
@endsection

@section('title_page1')
Edit 

@endsection
@section('title_page2')
Edit Category
@endsection

@section('content')

<div class="container-fluid">
    <div style="margin: auto 0 ;width:50% ;text-align:center"><h2>Edit category Information</h2></div>
     
    <form action="{{ route('categories.update', $categories->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" name="name" value="{{ old('name',$categories->name) }}" class="form-control"  placeholder="Enter Category name">
            @error('name')<span class="text-danger">{{ $message }}</span> @enderror
          </div>
          
          {{-- <div class="form-group">
              <label for="image">Category Image:</label>
              <input type="file" class="form-control" name="image" value="{{ old('image',$categories->image) }}" width="100px" height="100px">
              @error('image')<span class="text-danger">{{ $message }}</span>@enderror
          </div> --}}



          <div class="form-group">
            <label for="image">Current Image:</label>
            @if($categories->image)
                <img src="{{ asset('images/' .$categories->image) }}" alt="Current Image" style="max-width: 200px;">
            @else
                <p>No image available.</p>
            @endif
        </div>
    
        <div class="form-group">
            <label for="new_image">Select New Image:</label>
            <input type="file" id="new_image" name="new_image"> <!-- Add the name attribute -->
        </div>
        
        

          <button type="submit" class="btn btn-primary">Update</button>
      
    </form>
    
</div>
        


@endsection

@section('scripts')

@endsection