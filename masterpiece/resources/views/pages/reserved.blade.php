@extends('pages_layouts.master')

@section('title', 'Single Land Page')

@section('css')

@endsection

@section('content')

<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-white rounded p-4">
            <div class="row g-5 align-items-center">
                
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <h1 class="mb-3">Land Already Reserved</h1>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded w-100" src="{{ asset('https://www.pacificsignandstamp.com/cdn/shop/products/49ad5ced-206e-5daf-9444-715df8104a05.jpg?v=1602008928') }}" alt="Already Reserved Image">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <p style="color:red;font-size: 30px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;">Important!!</p>
                        <p style="color:#0e2e50;font-size: 30px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;">
                            You have already reserved this land. You cannot make another reservation.
                        </p>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection
