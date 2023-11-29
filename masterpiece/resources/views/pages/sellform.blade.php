@extends('pages_layouts.master')

@section('title', 'Sell Form Page')

@section('css')
    <link rel="stylesheet" href="{{ asset('pages_assets\css\style.css') }}">

@endsection

@section('content')


    <!-- Header Start -->

    <div class="container-fluid header bg-white p-0">
        <div class="container row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Sell Form</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Sell Form</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="{{ asset('images/sale.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->



    {{-- @include('pages_layouts.search') --}}
     <!-- Search Start -->
<div class="container-fluid bg-primary " style="padding: 35px;">
</div>

<!-- Search End -->


    <div class="container-fluid pb-5">
        <!-- Commission Information -->
        <div class="commission-info bg-light p-30 mb-4">
            <h2 class="form-titles">Commission Information</h2>
            <p>If your land is sold within 3 months, I will be entitled to a commission of <strong>2%</strong> of the sale
                value.</p>
            <p>If it's sold after the 3 months, I will take a commission of <strong>1%</strong> of the sale value.</p>
        </div>
        @if (Session::has('message_sent'))
            <div class="alert alert-success" role="alert" id="success-alert">
                {{ Session::get('message_sent') }}
            </div>
        @endif

        <h2 style="margin-top: 70px;margin-bottom:20px;">Fill the form: <span class="important-note">(Important: You have to login before submitting)</span></h2>
        
        <form method="POST" action="{{ route('sellform.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Personal Information -->
            <div class="form-container">
                <div class="row">
                    <div class="col-25">
                        <label for="firstName">First Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="firstName" name="firstName" placeholder="Your first name.."
                            value="{{ auth()->check() ? auth()->user()->first_name : old('first_name') }}" 
                            autofocus>
                        @error('firstName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lastName">Last Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lastName" name="lastName" placeholder="Your last name.."
                            value="{{ auth()->check() ? auth()->user()->last_name : old('last_name') }}"  autofocus>
                        @error('lastName')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="idNumber">ID Number:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="idNumber" name="idNumber" placeholder="Your ID number.."
                            value="{{ old('idNumber') }}"  autofocus>
                        @error('idNumber')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="phone">Phone Number:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="phone" name="phone" placeholder="Your phone number.."
                            value="{{ auth()->check() ? auth()->user()->phone_number : old('phone') }}" 
                            autofocus>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>

                <!-- Land Information -->
                <div class="row">
                    <div class="col-25">
                        <label for="land_type">Land Type:</label>
                    </div>
                    <div class="col-75">
                        <select name="land_type" class="form-control"  autofocus
                            style="background: transparent url('/images/arrow-down.png') no-repeat right ; background-size: 15px; -webkit-appearance: none; -moz-appearance: none; appearance: none; ">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('land_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <input type="hidden" name="category_id" value="{{ $category->id }}">


                <div class="row">
                    <div class="col-25">
                        <label for="governorate">Governorate:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="governorate" name="governorate" placeholder="Enter governorate .."
                            value="{{ old('governorate') }}"  autofocus>
                        @error('governorate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="directorate">Directorate:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="directorate" name="directorate" placeholder="Enter directorate .."
                            value="{{ old('directorate') }}"  autofocus>
                        @error('directorate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="village">Village:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="village" name="village" placeholder="Enter village .."
                            value="{{ old('village') }}"  autofocus>
                        @error('village')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="basin">Basin:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="basin" name="basin" placeholder="Enter basin .."
                            value="{{ old('basin') }}"  autofocus>
                        @error('basin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="district">District:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="district" name="district" placeholder="Enter district .."
                            value="{{ old('district') }}"  autofocus>
                        @error('district')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="pieceNumber">Piece Number:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="pieceNumber" name="pieceNumber" placeholder="Enter piece number .."
                            value="{{ old('pieceNumber') }}"  autofocus>
                        @error('pieceNumber')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="area">Area:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="area" name="area" placeholder="Enter area.."
                            value="{{ old('area') }}"  autofocus>
                        @error('area')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="price">Price:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="price" name="price" placeholder="Enter price.."
                            value="{{ old('price') }}"  autofocus>
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="description">Description:</label>
                    </div>
                    <div class="col-75">
                        <textarea id="description" name="description" placeholder="Enter description .." value="{{ old('description') }}"
                             autofocus></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="additionalinfo">Additional Info:</label>
                    </div>
                    <div class="col-75">
                        <textarea id="additionalinfo" name="additionalinfo" placeholder="Enter additional information .."
                            value="{{ old('additionalinfo') }}"  autofocus></textarea>
                        @error('additionalinfo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="landimage1">Land Image 1:</label>
                    </div>
                    <div class="col-75">
                        <input type="file" id="landimage1" name="landimage1" value="{{ old('landimage1') }}"><br>
                        @error('landimage1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="landimage2">Land Image 2:</label>
                    </div>
                    <div class="col-75">
                        <input type="file" id="landimage2" name="landimage2" value="{{ old('landimage2') }}"><br>
                        @error('landimage2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="landimage3">Land Image 3:</label>
                    </div>
                    <div class="col-75">
                        <input type="file" id="landimage3" name="landimage3" value="{{ old('landimage3') }}"><br>
                        @error('landimage3')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="landimage4">Land Image 4:</label>
                    </div>
                    <div class="col-75">
                        <input type="file" id="landimage4" name="landimage4" value="{{ old('landimage4') }}"><br>
                        @error('landimage4')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="user_id"></label>
                    </div>
                    <div class="col-75">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    </div>
                </div>

                <div class="row">
                    @if (auth()->check())
                        <input class="btn btn-primary py-3 px-5" type="submit" value="Submit" >
                    @else
                        <a href="{{ route('login', ['redirect' => url()->current()]) }}"
                            class="form-button">Login befor Submit</a>
                    @endif
                </div>

            </div>
        </form>



    @endsection


    @section('scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            // Check if the success alert element exists and display SweetAlert 2
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                Swal.fire({
                    text: "Your Message has been sent successfully",
                    icon: "success"
                });
            }
        </script>

    @endsection
