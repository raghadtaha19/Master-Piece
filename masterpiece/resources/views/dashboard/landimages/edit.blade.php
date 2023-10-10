@extends('dashboard.dashboard_layouts.master')

@section('title','Edit Land Images')


@section('css')
@endsection

@section('title_page1')
Edit 

@endsection
@section('title_page2')
Edit Land Images
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Land Images</div>

                <div class="card-body">
                    <form method="POST" style="width: 80%; margin: 50px auto" action="{{ route('landimages.update', $landimages->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="image1">Image 1:</label>
                            <input type="file" name="image1" class="form-control">
                            @error('image1')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="image2">Image 2:</label>
                            <input type="file" name="image2" class="form-control">
                            @error('image2')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="image3">Image 3:</label>
                            <input type="file" name="image3" class="form-control">
                            @error('image3')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="image4">Image 4:</label>
                            <input type="file" name="image4" class="form-control">
                            @error('image4')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="sell_form_id">Sell Form ID:</label>
                            <select name="sell_form_id" class="form-control" required>
                                @foreach ($sellforms as $sellform)
                                <option value="{{ $sellform->id }}" {{ $sellimages->sell_form_id == $sellform->id ? 'selected' : '' }}>{{ $sellform->id }}</option>
                                @endforeach
                            </select>
                            @error('sell_form_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <br>
                        <input type="submit" value="Update Land Images" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection