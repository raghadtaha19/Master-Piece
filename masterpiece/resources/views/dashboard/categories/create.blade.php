@extends('dashboard.dashboard_layouts.master')

@section('title','Create New Category')


@section('css')
@endsection

@section('title_page1')
Categories
@endsection

@section('title_page2')
Create New Category
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        
        <div class="form-group">
          <label for="name">Category Name:</label>
          <input type="text" name="name" class="form-control"  placeholder="Enter Category name" required>
          @error('name')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
        <div class="form-group">
            <label for="image">Category Image:</label>
            <input type="file" class="form-control" name="image" width="100px" height="100px"  required >
            @error('image')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <br>
        <input type="submit" value="Add Category" class="btn btn-success">
      </form>
 
              
         
          
        
   
@endsection

@section('scripts')

@endsection