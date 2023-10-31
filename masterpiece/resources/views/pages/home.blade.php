@extends('pages_layouts.master')

@section('title', 'Home Page')

@section('css')
<style>
    body{
        scroll-behavior: smooth
    }
</style>
@endsection

@section('content')

    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="container row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Your dream land awaits! </span></h1>
                <p class="animated fadeIn mb-4 pb-2">The ultimate platform
                    that satisfies all your land-buying and selling needs! Dive in and explore your dream land today.</p>
                <a href="#Lands Listing" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
            </div> 
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('images/1.jpg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('images/2.jpg') }}" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->
    @include('pages_layouts.search')




    <!-- Category Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Lands Types</h1>
                <p>"Connect with our specialized team, sell today and get continuous support and exceptional customer
                    service."</p>
            </div>
            <div class="row g-4">
                @foreach ($categories as $item)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3"
                            href="{{ route('category.lands', ['category' => $item->name]) }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="{{ asset($item->image) }}" alt="Icon">
                                </div>
                                <h6>{{ $item->name }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Category End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img1 position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100"
                            src="{{ asset('images/depositphotos_80739810-stock-photo-3d-pen-writing-about-us.jpg') }}"
                            alt="">

                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">#1 Place To Find The Perfect land</h1>
                    <p class="mb-4">Experience the epitome of luxury living with our exclusive selection of premium
                        properties.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Your journey to the perfect land starts here.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Discover a world of possibilities with our diverse
                        Lands listings.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Find your ideal land and create memories that last a
                        lifetime.</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="{{ route('about') }}">Read more..</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Buy form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">For Sell,Join us today in just a few clicks!"</h1>
                    <p><i class="fa fa-check text-primary me-3"></i>Our unwavering dedication to integrity sets us apart,
                        ensuring that every transaction is conducted with the utmost transparency and honesty.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>With a proven track record of successful deals, we have
                        earned the trust of countless clients through our steadfast commitment to delivering reliable and
                        credible services.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Our team's devotion to serving your needs is evident in
                        every step we take, making us your reliable partner for all your land buying and selling
                        endeavors</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="{{ route('sellform') }}">For Sell..</a>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('images/8.webp') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Buy form End -->








    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3" id="Lands Listing">Lands Listing</h1>
                        <p>"Discover your dream land and make it a reality with our exclusive listings."</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                </div>
            </div>

            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($landcards as $item)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href="{{ route('singlepage', ['product' => $item->id]) }}"><img
                                                class="img-fluid" src="{{ asset($item->image) }}" alt="Zarqa Image">
                                        </a>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            {{ $item->land_type }}</div>
                                    </div>
                                    @if ($landreservation->where('land_card_id', $item->id)->count() > 0)
                                    <div class=" start-0 top-0 mx-4 pt-1 px-3 bg-danger text-white">
                                        Reserved
                                    </div>
                                @endif
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">{{ $item->price }}</h5>
                                        <a class="d-block h5 mb-2"
                                            href="{{ route('singlepage', ['product' => $item->id]) }}">{{ $item->governorate }}</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $item->district }}
                                        </p>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined text-primary me-2"></i>{{ $item->area }}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa-regular fa-image"
                                                style="color: #00B98E; padding-right: 5px;"></i>4pictures</small>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br><br><br>

            <!-- Display pagination links -->
            <div class="row">
                <div class="col-12 text-center" style="display: flex;   justify-content: center;">
                    {{ $landcards->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Property List End -->




    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Website owner</h1>
                <p>Meet Raghad Yaseen, the mastermind and full-stack web developer behind this innovative platform. With a
                    passion for creating seamless user experiences, she's on a mission to redefine the way you buy and sell
                    Lands</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('images/7.jpeg') }}" alt="7.jpeg Image">

                            <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                <a class="btn btn-square mx-1"
                                    href="https://www.facebook.com/profile.php?id=100019503100978" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.linkedin.com/in/raghad-taha-88b12727a/"
                                    target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a class="btn btn-square mx-1" href="https://www.instagram.com/raghad.alqaisi99/"
                                    target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4 mt-3">
                            <h5 class="fw-bold mb-0">Raghad Yaseen Al-kisi</h5>
                            <small>Full Stack Web Developer</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Team End -->
@endsection

@section('scripts')

@endsection
