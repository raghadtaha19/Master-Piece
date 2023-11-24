@extends('pages_layouts.master')

@section('title', 'Services Page')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-ZzCm4z5VcaCyvACITtE7aL4uF8Ut6gOg1PAQQtkd9lrE2StYnRuGf1IkI5iBfoAh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
@endsection

@section('content')

    <div class="container-xxl bg-white p-0">
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="container row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">About us</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="{{ asset('images\services.jpg') }}" style="height:350px"
                        alt="service-image">
                </div>
            </div>
        </div>
        <!-- Header End -->


        @include('pages_layouts.search')


        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1 class="servecies">Our Services</h1>
                    </div>
                </div>
            </div>
        
            <div class="row services_row">
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end large-icon">
                        <i class="fas fa-globe icon"></i>
                    </div>
                    <h5>Land Selling Assistance</h5>
                    <p class="para1">Thinking of selling your land? We streamline the process, handling the purchase on your behalf.</p>
                </div>
        
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end large-icon">
                        <i class="fas fa-edit icon"></i>

                    </div>
                    <h5>Easy Form Submission</h5>
                    <p class="para1">Simply fill out our form with your land details to kickstart the selling process effortlessly.</p>
                </div>
        
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end large-icon">
                        <i class="fas fa-money-bill icon"></i>
                    </div>
                    <h5>Transparent Commission Structure</h5>
                    <p class="para1">We believe in fair compensation. Our commission rates are clear, ensuring a mutually beneficial arrangement.</p>
                </div>
        
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end large-icon">
                        <i class="fas fa-landmark icon"></i>
                    </div>
                    <h5>Land Reservation Process</h5>
                    <p>Reserve your desired land effortlessly. Follow our simple process to secure your spot in the property market.</p>
                </div>
        
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end large-icon">
                        <i class="fas fa-handshake icon"></i>
                    </div>
                    <h5>Personalized Meeting Arrangements</h5>
                    <p>Our dedicated team will reach out to you within five business days to arrange a meeting. Choose between an in-person or virtual meeting based on your preference.</p>
                </div>
        
                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end large-icon">
                        <i class="fas fa-hands-helping icon"></i>
                    </div>
                    <h5>Assistance Every Step of the Way</h5>
                    <p>Rest assured, we are here to assist you in any way possible. Your satisfaction is our priority, and we are excited to connect with you soon!</p>
                </div>
            </div>
        </div>
        



    </div>
    </div>




@endsection

@section('scripts')

@endsection
