@extends('dashboard.dashboard_layouts.master')

@section('title','Create New User')


@section('css')
@endsection

@section('title_page1')
Users
@endsection

@section('title_page2')
Create New User
@endsection

@section('content')


    <form method="POST" style="width: 80%;margin: 50px auto" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group" >
          <label for="first_name">First Name:</label>
          <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
          @error('first_name') <span class="text-danger">{{ $message }}</span>   @enderror

        </div>

        <div class="form-group">
          <label  for="last_name">Last Name:</label>
          <input type="last_name" name="last_name" class="form-control" placeholder="Enter Last Name ">
          @error('last_name') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group">
          <label  for="user_name">Username:</label>
          <input type="text" name="user_name" class="form-control"  placeholder="Enter username ">
          @error('user_name') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>

        <div class="form-group">
          <label  for="phone_number"> Phone Number:</label>
          <input type="text" name="phone_number" class="form-control" placeholder="Enter phone number ">
          @error('phone_number') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>

        <div class="form-group">
          <label  for="email"> Email:</label>
          <input type="text" name="email" class="form-control" placeholder="Enter Email ">
          @error('email') <span class="text-danger">{{ $message }}</span>   @enderror
        </div>
        <div class="form-group">
          <label for="password"> Password:</label>
          <div class="input-group">
              <input type="password" name="password" class="form-control" placeholder="Enter user password">
              <div class="input-group-append">
                  <button type="button" id="showPassword" class="btn btn-outline-secondary">
                      <i class="fas fa-eye"></i>
                  </button>
              </div>
          </div>
          @error('password') <span class="text-danger">{{ $message }}</span>   @enderror
      </div>
      

        <br>
        <input type="submit" value="Add User" class="btn btn-success"><br>
      </form>
 





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