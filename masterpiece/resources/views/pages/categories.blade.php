@extends('pages_layouts.master')

@section('title', 'Home Page')

@section('css')
@endsection

@section('content')


    <div class="container-xxl bg-white p-0">
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="container row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Buy Now</h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Buy</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="{{ asset('images\buy.jpg') }}" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->

        @include('pages_layouts.search')



<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container-fluid">
        <div class="row g-4">
            
            @foreach ($landcards as $landcard)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <a href="{{ route('category.lands', ['category' => 'Residential lands']) }}"><img class="img-fluid" src="{{ asset($landcard->image) }}" alt=""></a>
                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                            {{ $landcard->land_type }}
                        </div>
                    </div>
                    <div class="p-4 pb-0">
                        <h5 class="text-primary mb-3">{{ $landcard->price }}</h5>
                        <a class="d-block h5 mb-2" href="">{{ $landcard->governorate }}</a>
                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $landcard->district }}</p>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{ $landcard->area }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <br> <br> <br>
        
        <div id="tab-2" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-12 text-center">
                    <a class="btn btn-primary py-3 px-5" href="#">Browse More Property</a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="col-12">
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Property List End -->


        @endsection

        @section('scripts')

        @endsection
