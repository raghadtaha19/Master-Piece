@extends('pages_layouts.master')

@section('title', 'Checkout Page')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-ZzCm4z5VcaCyvACITtE7aL4uF8Ut6gOg1PAQQtkd9lrE2StYnRuGf1IkI5iBfoAh" crossorigin="anonymous">
    {{-- <link href="{{ asset('pages_assets/css/checkout.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('pages_assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-xxl bg-white p-0">
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="container row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Checkout </h1>
                    <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="{{ asset('images\paypal.jpg') }}" style="height:400px" alt="service-image">
                </div>
            </div>
        </div>
        <!-- Header End -->



        <div class="container-fluid bg-primary " style="padding: 35px;">
        </div>
        <br><br><br>



        <div class="page-wrapper">
            <div class="containeer">
                <div class="iphone">
                    <header class="header1">
                        <h1>Checkout</h1>
                    </header>
                    <form class="form">
                        <div>
                            <div class="cardd">
                                Land Type : {{ $landcardData->land_type }}<br />
                                Governorate :{{ $landcardData->governorate }}<br />
                                District : {{ $landcardData->district }}<br />
                                Area :{{ $landcardData->area }}<br />
                                Price : {{ $landcardData->price }} </address>
                            </div>
                        </div>

                        <fieldset>
                            <legend>Payment Method</legend>

                            <div class="form__radios">
                                <div class="form__radio">
                                    <label for="paypal">
                                        <svg class="icon1">
                                            <use xlink:href="#icon1-paypal" />
                                        </svg>PayPal
                                    </label>
                                    <input id="paypal" name="payment-method" type="radio" />
                                </div>
                            </div>
                        </fieldset>
                        {{-- 
                        <div>
                            <h2>Shopping Bill</h2>

                            <table>
                                <tbody>
                                    <tr>
                                        <td>Shipping fee</td>
                                        <td align="right">$5.43</td>
                                    </tr>
                                    <tr>
                                        <td>Discount 10%</td>
                                        <td align="right">-$1.89</td>
                                    </tr>
                                    <tr>
                                        <td>Price Total</td>
                                        <td align="right">$84.82</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Total</td>
                                        <td align="right">$88.36</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div> --}}
                    </form>

                    <form action="{{ route('paypal') }}" method="post"
                        style="display:flex;justify-content:center;align-items:center;margin-top:30px">
                        @csrf
                        <input type="hidden" name="price" value="20">
                        <button type="submit" class="btn btn-primary py-3 px-5">Pay with Paypal</button>
                    </form>
                </div>
            </div>
        </div>




    @endsection

    @section('scripts')

    @endsection
