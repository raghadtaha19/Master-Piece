@extends('pages_layouts.master')

@section('title', 'Single Land Page')

@section('css')

@endsection

@section('content')


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="container-fluid row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Single Land</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Single Land</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="{{ asset('images/reserve-now.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->

        @include('pages_layouts.search')


    
    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light mt-5">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset($landcard->image) }}" alt="Image">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset($landcard->image) }}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset($landcard->image) }}" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <span style="color: #1A3959;font-size: 30px;">Governorate:</span><span style="font-size: 25px;margin-left: 10px;">{{ $landcard->governorate }}</span><br><br>
                    <span style="color: #1A3959;font-size: 30px;">District</span><span style="font-size: 25px;margin-left: 10px;">{{ $landcard->district }}</span><br> <br>
                    <span style="color: #1A3959;font-size: 30px;">Price:</span><span style="font-size: 25px;margin-left: 10px;">{{ $landcard->price }}</span><br> <br>
                    <span style="color: #1A3959;font-size: 30px;">Area:</span><span style="font-size: 25px;margin-left: 10px;">{{ $landcard->area }}</span><br><br>
                    <span style="color: #1A3959;font-size: 30px;">Land type:</span><span style="font-size: 25px;margin-left: 10px;">{{ $landcard->land_type }}</span><br><br>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Land Description</h4>
                            <p>{{ $landcard->description }}</p>
                            
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>{{ $landcard->additional_information }}</p>
                            <div class="row">
                                <!-- Information content here -->
                            </div>
                        </div>
                        <br><br>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary py-3 px-5" href="reservation.html">Reserve Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
      
    <!-- Shop Detail End -->




    @endsection

    @section('scripts')
    
    @endsection
    