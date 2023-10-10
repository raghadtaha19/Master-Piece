@extends('pages_layouts.master')

@section('title', 'About Page')

@section('css')
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
                    <img class="img-fluid" src="{{ asset('images\about-header.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        @include('pages_layouts.search')


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100 " src="{{ asset('images\about us.png') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                        <p class="mb-4">Experience the epitome of luxury living with our exclusive selection of premium
                            properties.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Your journey to the perfect property starts here.
                        </p>
                        <p><i class="fa fa-check text-primary me-3"></i>Discover a world of possibilities with our diverse
                            property listings.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Find your ideal property and create memories that
                            last a lifetime.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->





        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Owner Story</h1>

                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('images\7.jpeg') }}" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Raghad Yaseen Al-kisi</h5>
                                <small>Full Stack Web Developer</small>
                            </div>

                        </div>
                    </div>
                    <p style="width: 600px;">Once upon a time, in a world filled with dreams of owning land, a visionary
                        entrepreneur named Raghad set out on a mission. Fueled by a passion for connecting people with their
                        perfect plots, Raghad founded a groundbreaking land website.

                        With meticulous attention to detail and a deep understanding of the real estate market, the website
                        quickly gained a reputation for its exceptional service and user-friendly interface. It became the
                        go-to platform for buyers and sellers alike, offering a seamless experience from start to finish.

                        Word spread like wildfire as satisfied customers shared their success stories. <br><br> From
                        aspiring homeowners to seasoned investors, everyone found what they were looking for on the website.
                        The vast database of listings, combined with advanced search filters, made it effortless to discover
                        the ideal piece of land.

                        The website's success was not just attributed to its extensive listings; it was the team behind it
                        that truly made the difference. The dedicated experts provided personalized assistance, guiding
                        users through the entire process, from browsing to closing the deal. <br> <br> Their expertise and
                        unwavering commitment to customer satisfaction set them apart from the competition.

                        As the website flourished, partnerships with trusted real estate professionals and agencies were
                        forged, ensuring a diverse range of high-quality land options. Whether it was a sprawling
                        countryside estate or a small plot in the heart of the city, the website had something for everyone.

                        With each successful transaction, dreams became reality. </p>
                </div>
            </div>
        </div>
        <!-- Team End -->



    @endsection

    @section('scripts')

    @endsection
