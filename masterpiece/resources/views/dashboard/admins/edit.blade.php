@extends('dashboard.dashboard_layouts.master')

@section('title','Edit Admin')


@section('css')
@endsection

@section('title_page1')
Edit 

@endsection
@section('title_page2')
Edit Admin
@endsection

@section('content')

<div class="container-fluid">
    <div style="margin: 0 auto; width: 50%; text-align: center;"><h2>Edit Admin Information</h2></div>
    
    <form action="{{ route('admins.update', $admins->id) }}" style="width: 80%;margin: 50px auto" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group" >
            <label for="name">Admin Name:</label>
            <input type="text" name="name" class="form-control"   placeholder="Enter admin name" required value="{{ old('name',$admins->name) }}">
            @error('name') <span class="text-danger">{{ $message }}</span>   @enderror
  
          </div>
          
          <div class="form-group">
            <label  for="email">Admin Email:</label>
            <input type="email" name="email" class="form-control"   placeholder="Enter admin email " required value="{{ old('email',$admins->email) }}">
            @error('email') <span class="text-danger">{{ $message }}</span>   @enderror
          </div>
  
          <div class="form-group">
            <label for="password"> Password:</label>
            <div class="input-group">
                <input type="password" name="password" class="form-control">
                <div class="input-group-append">
                    <button type="button" id="showPassword" class="btn btn-outline-secondary">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>
            @error('password') <span class="text-danger">{{ $message }}</span>   @enderror
        </div><br>
        
          <input type="submit" value="Update" class="btn btn-success">

    </form>
    
</div>
        


@endsection

@section('scripts')
<script>
    // Function to toggle password visibility
    function togglePasswordVisibility() {
      var passwordField = document.querySelector('input[name="password"]');
      var showPasswordButton = document.getElementById('showPassword');
  
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        showPasswordButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
      } else {
        passwordField.type = 'password';
        showPasswordButton.innerHTML = '<i class="fas fa-eye"></i>';
      }
    }
  
    // Add an event listener to the "Show Password" button
    document.getElementById('showPassword').addEventListener('click', togglePasswordVisibility);
  </script>
@endsection