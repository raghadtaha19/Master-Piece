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


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <form action="{{ route('filterlands') }}" method="POST">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <select class="form-select border-0 py-3" name="area">
                                        <option selected value="">Area</option>
                                        <option value="500-2000">500-2000 m2</option>
                                        <option value="2001-4000">2001-4000 m2</option>
                                        <option value="4001-6000">4001-6000 m2</option>
                                        <option value="6001-8000">6001-8000 m2</option>
                                        <option value="8001-10000">8001-10000 m2</option>
                                        <option value="10001-12000">10001-12000 m2</option>
                                        <option value="12001-14000">12001-14000 m2</option>
                                    </select>
                                </div>
                                {{-- <input type="hidden" name="category_name" value="{{$landcards}}"> --}}
                                <div class="col-md-4">
                                    <select class="form-select border-0 py-3" name="governorate">
                                        <option selected value="">Governorate</option>
                                        <option value="Amman">Amman</option>
                                        <option value="Irbid">Irbid</option>
                                        <option value="Zarqa">Zarqa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-dark border-0 w-100 py-3">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Search End -->





        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container-fluid">
                <div class="row g-4" id="filteredResults">

                    @foreach ($landcards as $landcard)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="{{ route('category.lands', ['category' => 'Residential lands']) }}"><img
                                            class="img-fluid" src="{{ asset('images/' .$landcard->image) }}" alt=""></a>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        {{ $landcard->land_type }}
                                    </div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">{{ $landcard->price }}</h5>
                                    <a class="d-block h5 mb-2"
                                        href="{{ route('singlepage', ['product' => $landcard->id]) }}">{{ $landcard->governorate }}</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $landcard->district }}</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>{{ $landcard->area }}</small>
                                    <small class="flex-fill text-center py-2"><i class="fa-regular fa-image"
                                            style="color: #00B98E; padding-right: 5px;"></i>4pictures</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <br> <br> <br>

                {{-- <div id="tab-2" class="tab-pane fade show p-0">
            <div class="row g-4">
                <div class="col-12 text-center">
                    <a class="btn btn-primary py-3 px-5" href="#">Browse More Property</a>
                </div>
            </div>
        </div> --}}
                <br><br>
                <div class="col-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            {{-- @if ($landcards instanceof \Illuminate\Pagination\LengthAwarePaginator) --}}
                                {{-- {{ $landcards->links() }} --}}
                            {{-- @endif --}}

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Property List End -->


    @endsection

    @section('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @endsection
