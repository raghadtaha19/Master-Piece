@extends('dashboard.dashboard_layouts.master')

@section('title','Edit User')


@section('css')
@endsection

@section('title_page1')
Edit 

@endsection
@section('title_page2')
Edit User
@endsection

@section('content')

<div class="container-fluid">
  <div style="margin: 0 auto; width: 50%; text-align: center;"><h2>Edit User Information</h2></div>

     
     <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('users.update', $users->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group" >
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" class="form-control"   value="{{ old('first_name', $users->first_name) }}"> 
            @error('first_name') <span class="text-danger">{{ $message }}</span>   @enderror
          </div>

          <div class="form-group" >
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" class="form-control"   value="{{ old('last_name', $users->last_name) }}"> 
            @error('last_name') <span class="text-danger">{{ $message }}</span>   @enderror
          </div>

          <div class="form-group">
            <label  for="user_name">Username:</label>
            <input type="text" name="user_name" class="form-control"  value="{{ old('user_name', $users->user_name) }}">
            @error('user_name') <span class="text-danger">{{ $message }}</span>   @enderror
          </div>

          <div class="form-group">
            <label  for="phone_number"> Phone Number:</label>
            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $users->phone_number) }}">
            @error('phone_number') <span class="text-danger">{{ $message }}</span>  @enderror
          </div>
      
          <div class="form-group">
            <label  for="email"> Email:</label>
            <input type="text" name="email" class="form-control" value="{{ old('email', $users->email) }}">
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
        </div>
        
      
          <br>
          <input type="submit" value="Update" class="btn btn-success"><br>
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






    