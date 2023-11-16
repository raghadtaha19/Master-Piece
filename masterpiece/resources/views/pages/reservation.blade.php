@extends('pages_layouts.master')

@section('title', 'Single Land Page')

@section('css')

@endsection

@section('content')


      
        <div class="container-xxl py-5">
            <div class="container">
                    <div class="bg-white rounded p-4">
                        <div class="row g-5 align-items-center">
                            <div style="display: flex;justify-content: center;align-items: center;"><h1 class="mb-3">Your Reservation is Accepted</h1></div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="{{ asset('images\reserve.png') }}" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <p style="color:red;font-size: 30px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;">Important!!</p>
                               <p style="color:#0e2e50;font-size: 30px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;">If you want to confirm the reservation, you must pay <span style="color:#00B98E;">10%</span> of the value  of the land price, in addition to <span style="color:#00B98E;">1%</span> as a commission.</p>
                               <div class="mb-4">
                                <p>Our dedicated team will reach out to you within five business days to arrange either an in-person or virtual meeting, tailored to your preference. We are committed to providing you with the highest level of service and look forward to discussing your needs in detail. Please rest assured that we are here to assist you in any way possible and are excited to connect with you soon!</p>
                            </div>
                            <a href="{{ route('home') }}"class="btn btn-primary py-3 px-5">back to home</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
     


        @endsection

        @section('scripts')
        
        @endsection
        