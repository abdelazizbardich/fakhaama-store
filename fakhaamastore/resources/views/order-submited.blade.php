@extends('layouts.public')
@section('content')
    <main class="main-content">
        <!--== Start Faq Area Wrapper ==-->
        <section class="page-header-area pt-10 pb-9 mb-5" data-bg-color="#FFF3DA">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="page-header-st3-content text-center text-md-start">
                            <ol class="breadcrumb justify-content-center justify-content-md-start">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ url('') }}">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ url('shop') }}">Shop</a></li>
                                <li class="breadcrumb-item"><span class="text-dark">checkout</span></li>
                                <li class="breadcrumb-item active text-dark" aria-current="page">Order submited</li>
                            </ol>
                            <h2 class="page-header-title">Order submited</h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-end">Order summary</h5>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row m-auto mb-5" style="max-width: 800px;">
                    <div class="col-12">
                        <div class="border mb-5">
                            <div class="w-100 text-center bg-light p-3">
                                <img class="m-5 d-block m-auto" src="{{ asset('assets/images/logo.png') }}" width="120"
                                    alt="Image">
                            </div>
                            <div class="px-2 py-5">
                                <div class="row m-0 mb-3">
                                    <div class="col-12">
                                        <h3 class="title mt-3">Your Order is submitted</h3>
                                        <div class="d-blok">Hi <span class="fw-bold">{{ $user->first_name }}
                                                {{ $user->last_name }}</span></div>
                                        <p>Your Order has been submitted to our Sales Team and will be confirmed soon as possible</p>
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <div class="col-12 d-none d-md-block">
                                        <div class="table-responsive  border-top">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <th>Order Date</th>
                                                    <th>Order code</th>
                                                    <th>Payment</th>
                                                    <th>Address</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ explode(' ', $order->created_at)[0] }}</td>
                                                        <td>{{ $order->code }}</td>
                                                        <td>Cash on delevery</td>
                                                        <td>
                                                            <span class="small country">{{ $address->country }}</span>,
                                                            <span class="small country">{{ $address->region }}</span>,
                                                            <span class="small city">{{ $address->city }}</span>,
                                                            <span class="small postal_code"
                                                                title="postal code">{{ $address->postal_code }}</span>
                                                            <br>
                                                            <span class="small address">{{ $address->address }}</span><br>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12 d-md-none border mb-3">
                                        <div class="table-responsive  border-top">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>Order Date</th>
                                                        <td>{{ explode(' ', $order->created_at)[0] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Order code</th>
                                                        <td>{{ $order->code }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Payment</th>
                                                        <td>Cash on delevery</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Address</th>
                                                        <td>
                                                            <span class="small country">{{ $address->country }}</span>,
                                                            <span class="small country">{{ $address->region }}</span>,
                                                            <span class="small city">{{ $address->city }}</span>,
                                                            <span class="small postal_code"
                                                                title="postal code">{{ $address->postal_code }}</span>
                                                            <br>
                                                            <span class="small address">{{ $address->address }}</span><br>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 mb-3">
                                    <div class="col-12 ">
                                        <div class="row flex-column flex-md-row m-0">
                                            <div class="col-auto d-flex align-items-center">
                                                <img class="p-1 bg-light border rounded" src="{{ $product->photo }}"
                                                    alt="" width="120">
                                            </div>
                                            <div class="col d-flex justify-content-center flex-column">
                                                <span class="d-block">
                                                    <span class="h3">{{ $product->name }}</span>
                                                    <span class="small">({{ $product->actual_price }}
                                                        {{ config('app')['currency_symbol'] }})</span>
                                                </span>
                                                <span class="small">{{ $product->category->name }}</span>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span>Qty {{ $quantity }}</span>
                                            </div>
                                            <div class="col-auto d-flex align-items-center">
                                                <span class="fw-bold">{{ $product->actual_price * $quantity }}
                                                    {{ config('app')['currency_symbol'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row m-0">
                                    <div class="col-12">
                                        <div class="table-responsive  border-top">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td class="text-end fw-bold">
                                                            {{ $product->actual_price * $quantity }}
                                                            {{ config('app')['currency_symbol'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping cost</th>
                                                        <td class="text-end fw-bold">{{ config('app')['shipping_cost'] }}
                                                            {{ config('app')['currency_symbol'] }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <div class="col-12">
                                        <div class="table-responsive  border-top bg-light">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td class="text-end fw-bold text-primary">
                                                            {{ $product->actual_price * $quantity + config('app')['shipping_cost'] }}
                                                            {{ config('app')['currency_symbol'] }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0 mt-5">
                                    <div class="col-12">
                                        <div class="pt-5">
                                            <p>
                                                We'll send you a shipping confirmation when your order is confirmed!<br>We apperciate your business, and hope you enjoy your purchase.
                                            </p>
                                            {{-- <p class="fw-bold">Thank you!</p>
                                            <p>Sales team</p> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 bg-light mt-5 py-3 p-2">
                                <div class="row m-0">
                                    <div class="col-6">
                                        <span class="small">Qestion? contact our <a href="mailto:{{ config('app.support_email') }}">Customer Support</a></span>
                                    </div>
                                    <div class="col-6 text-end">
                                        {{ date('Y') }} | {{ config('app.name')}} Sales team
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mb-5 pb-5">
                    <a href="" class="btn btn-primary rounded shadow">
                        Contine shopping
                    </a>
                </div>
                <div>
                </div>
        </section>
        <!--== End Faq Area Wrapper ==-->
    </main>
@endsection
