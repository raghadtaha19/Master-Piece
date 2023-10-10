@extends('dashboard.dashboard_layouts.master')

@section('title','Edit category')


@section('css')
@endsection

@section('title_page1')
Edit 

@endsection
@section('title_page2')
Edit Land Cards
@endsection

@section('content')

<div class="container-fluid">
    <h2>Edit Land Card Information</h2>
    

@section('content')
<div class="container">
    <h2>Edit Land Card</h2>

    <form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('landcards.update', $landcards->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="image">Land Image:</label>
            <input type="file" name="image" class="form-control">
            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Land Type:</label>
            <select name="category_id" class="form-control">
                <option value="">Select Land Type</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $landcards->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        
        

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" class="form-control" placeholder="Enter Price" value="{{ $landcards->price }}">
            @error('price') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="governorate">Governorate:</label>
            <input type="text" name="governorate" class="form-control" placeholder="Enter Governorate" value="{{ $landcards->governorate }}">
            @error('governorate') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="district">District:</label>
            <input type="text" name="district" class="form-control" placeholder="Enter District" value="{{ $landcards->district }}">
            @error('district') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="area">Area:</label>
            <input type="text" name="area" class="form-control" placeholder="Enter Area" value="{{ $landcards->area }}">
            @error('area') <span class="text-danger">{{ $message }}</span> @enderror
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

        <input type="submit" value="Update Land Card" class="btn btn-primary">
    </form>
</div>


    
    </div>
</div>
        


@endsection

@section('scripts')

@endsection