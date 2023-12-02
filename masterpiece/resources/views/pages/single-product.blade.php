@extends('pages_layouts.master')

@section('title', 'Single Land Page')

@section('css')
    <link rel="stylesheet" href="style.css">
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
                <img class="img-fluid" src="{{ asset('images/reserve-now.jpg') }}" alt="" style="height: 400px;">
            </div>
        </div>
    </div>
    <!-- Header End -->

       <!-- Search Start -->
<div class="container-fluid bg-primary " style="padding: 35px;">
</div>

<!-- Search End -->
<br><br><br>



    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5 align-items-stretch">
            <div id="carouselExampleIndicators" class="col-lg-6 carousel  slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="border-radius:50px">
                        <img class="d-block w-100" src="{{ asset('images/' . $landcard->image) }}" alt="First slide"
                            width="100px" height="350px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/' . $landcard->image) }}" alt="Second slide"
                            width="100px" height="350px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/' . $landcard->image) }}" alt="Third slide"
                            width="100px" height="350px">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/' . $landcard->image) }}" alt="Fourth slide"
                            width="100px" height="350px">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="col-lg-6 card1 h-auto mb-4 ">
                <div class="h-100 p-4 d-flex flex-column">
                    <h2 class="text-primary mb-3">{{ $landcard->governorate }}</h2>
                    <p class="mb-3"><strong>District:</strong> {{ $landcard->district }}</p>
                    <p class="mb-3"><strong>Price:</strong> {{ $landcard->price }}</p>
                    <p class="mb-3"><strong>Area:</strong> {{ $landcard->area }}</p>
                    <p class="mb-3"><strong>Land Type:</strong> {{ $landcard->land_type }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row px-xl-5">
        <div class="col">
            <div class="bg-light p-30 ">
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
                    <br><br>
                    <div class="mb-4">
                        <p class="mb-2  reservation-text">
                            To reserve this land, please proceed to PayPal and make a payment of 20 JD.
                        </p>
                        <form method="post" action="{{ route('reserveAndRedirect', ['id' => $landcard->id]) }}"
                            id="reservation-form">
                            @csrf
                            <input type="hidden" name="reservation_date" id="reservation_date" required>
                            {{-- It has the required attribute, which means it must be filled out before submitting the form --}}
                            <input type="hidden" name="landcard_data" value="{{ json_encode($landcard) }}">
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <button type="submit" class="btn btn-primary py-3 px-5">Go to PayPal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Detail End -->

    {{-- CSRF Token:
    @csrf: Laravel directive that generates a hidden input field containing the CSRF token.
     This is a security measure to protect against cross-site request forgery (CSRF) attacks. --}}


@endsection

@section('scripts')
    <script>
        document.querySelector('form button').addEventListener('click', function() {
            // Get the current date and format it as 'YYYY-MM-DD'
            const currentDate = new Date().toISOString().split('T')[0];
            // Set the value of the hidden input field to the current date
            document.getElementById('reservation_date').value = currentDate;
        });
    </script>
    {{-- Now, when the "Reserve Now" button is clicked, it will set the reservation_date hidden input field with the current date using JavaScript. --}}



@endsection
