@extends('pages_layouts.master')

@section('title', 'Sell Form Page')

@section('css')
    <link rel="stylesheet" href="{{ asset('pages_assets\css\style.css') }}">

@endsection

@section('content')



       
  <div class="container2">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="#">
        <input type="text" placeholder="Enter your email">
        <input type="password" placeholder="Enter your password">
        <a href="#">Forgot password?</a>
        <a href="index.html"><input type="button" class="button" value="Login"></a>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="#">
        <input type="text" placeholder="Enter your first name">
        <input type="text" placeholder="Enter your last name">
        <input type="text" placeholder="Enter your username">
        <input type="text" placeholder="Enter your phone number">
        <input type="text" placeholder="Enter your email">
        <input type="password" placeholder="Create a password">
        <input type="password" placeholder="Confirm your password">
        <a href="login"><input type="button" class="button" value="Signup"></a>
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <br> <br><br><br>



        
        
    @endsection

    @section('scripts')

    @endsection