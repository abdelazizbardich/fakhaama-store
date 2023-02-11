@extends('layouts.public')
@section('content')
    <main class="main-content">

        <!--== Start Page Header Area Wrapper ==-->
        <nav aria-label="breadcrumb" class="breadcrumb-style1">
            <div class="container">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div>
        </nav>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Shopping Checkout Area Wrapper ==-->
        <section class="shopping-checkout-wrap section-space">
            <div class="container">
                {{-- <div class="checkout-page-coupon-wrap">
                    <!--== Start Checkout Coupon Accordion ==-->
                    <div class="coupon-accordion" id="CouponAccordion">
                        <div class="card">
                                <h3>
                                    <i class="fa fa-info-circle"></i>
                                    Have a Coupon?
                                    <a href="#/" data-bs-toggle="collapse" data-bs-target="#couponaccordion">Click here to enter your code</a>
                                </h3>
                            <div id="couponaccordion" class="collapse" data-bs-parent="#CouponAccordion">
                                <div class="card-body">
                                    <div class="apply-coupon-wrap">
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="Coupon code">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="button" class="btn-coupon">Apply coupon</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End Checkout Coupon Accordion ==-->
                </div> --}}
                <div class="billing-form-wrap">
                    <form action="{{ url('/product-checkout/confirm') }}" method="POST">
                        <div class="row">
                            @if ($errors->any())
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="col-lg-6">
                                @csrf
                                <input type="hidden" hidden value="{{$order->product->id}}" name="product_id"/>
                                <input type="hidden" hidden value="{{$order->quantity}}" name="quantity"/>
                                <!--== Start Billing Accordion ==-->
                                <div class="checkout-billing-details-wrap">
                                    <h2 class="title">Billing details</h2>
                                    <div class="billing-form-wrap">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="f_name">First name <abbr class="required" title="required">*</abbr></label>
                                                        <input id="f_name" value="{{ old('first_name') }}" placeholder="first name..." name="first_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="l_name">Last name <abbr class="required" title="required">*</abbr></label>
                                                        <input id="l_name" value="{{ old('last_name') }}" placeholder="last name..." name="last_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="com_name">Company name (optional)</label>
                                                        <input id="com_name" type="text" class="form-control">
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="phone">Phone  <abbr class="required" title="required">*</abbr></label>
                                                        <input id="phone" value="{{ old('phone') }}" placeholder="Phone number..." name="phone" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <div class="form-group">
                                                        <label for="country">Country <abbr class="required" title="required">*</abbr></label>
                                                        <select id="country" value="{{ old('country') }}" name="country" class="form-control wide">
                                                            <option value="Morocco">Morocco</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="street-address">Street address <abbr class="required" title="required">*</abbr></label>
                                                        <input id="street-address" value="{{ old('address') }}" name="address" type="text" class="form-control" placeholder="House number and street name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street-address2" class="visually-hidden">Street address 2</label>
                                                        <input id="street-address2" value="{{ old('address_2') }}" name="address_2" type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="town">Town / City <abbr class="required" title="required">*</abbr></label>
                                                        <select id="town" name="city" value="{{ old('city') }}" class="form-control wide">
                                                            <option disabled selected>City...</option>
                                                            <option>Casablanca</option>
                                                            <option>Fez</option>
                                                            <option>Rabat</option>
                                                            <option>Tangier</option>
                                                            <option>Marrakesh</option>
                                                            <option>Agadir</option>
                                                            <option>Salé</option>
                                                            <option>Oujda</option>
                                                            <option>Khouribga</option>
                                                            <option>Meknes</option>
                                                            <option>Kenitra</option>
                                                            <option>Tetouan</option>
                                                            <option>Safi</option>
                                                            <option>Temara</option>
                                                            <option>Mohammedia</option>
                                                            <option>El Jadida</option>
                                                            <option>Beni Mellal</option>
                                                            <option>Aït Melloul</option>
                                                            <option>Nador</option>
                                                            <option>Dar Bouazza</option>
                                                            <option>Taza</option>
                                                            <option>Settat</option>
                                                            <option>Berrechid</option>
                                                            <option>Khemisset</option>
                                                            <option>Inezgane</option>
                                                            <option>Ksar El Kebir</option>
                                                            <option>Larache</option>
                                                            <option>Guelmim</option>
                                                            <option>Khenifra</option>
                                                            <option>Berkane</option>
                                                            <option>Taourirt</option>
                                                            <option>Bouskoura</option>
                                                            <option>Fquih Ben Salah</option>
                                                            <option>Dcheira El Jihadia</option>
                                                            <option>Oued Zem</option>
                                                            <option>El Kelaa Des Sraghna</option>
                                                            <option>Sidi Slimane</option>
                                                            <option>Errachidia</option>
                                                            <option>Guercif</option>
                                                            <option>Oulad Teima</option>
                                                            <option>Ben Guerir</option>
                                                            <option>Tifelt</option>
                                                            <option>Lqliaa</option>
                                                            <option>Taroudant</option>
                                                            <option>Sefrou</option>
                                                            <option>Essaouira</option>
                                                            <option>Fnideq</option>
                                                            <option>Sidi Kacem</option>
                                                            <option>Tiznit</option>
                                                            <option>Tan-Tan</option>
                                                            <option>Ouarzazate</option>
                                                            <option>Souk El Arbaa</option>
                                                            <option>Youssoufia</option>
                                                            <option>Lahraouyine</option>
                                                            <option>Martil</option>
                                                            <option>Ain Harrouda</option>
                                                            <option>Suq as-Sabt Awlad an-Nama</option>
                                                            <option>Skhirat</option>
                                                            <option>Ouazzane</option>
                                                            <option>Benslimane</option>
                                                            <option>Al Hoceima</option>
                                                            <option>Beni Ansar</option>
                                                            <option>M'diq</option>
                                                            <option>Sidi Bennour</option>
                                                            <option>Midelt</option>
                                                            <option>Azrou</option>
                                                            <option>Drargua</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-4">
                                                    <div class="form-group">
                                                        <label for="region">Region <abbr class="required" title="required">*</abbr></label>
                                                        <select id="region" value="{{ old('region') }}" name="region" class="form-control wide">
                                                            <option value="" disabled selected>Region...</option>
                                                            <option value="Tanger-Tétouan-Al Hoceïma">Tanger-Tétouan-Al Hoceïma</option>
                                                            <option value="L'Oriental">L'Oriental</option>
                                                            <option value="Fès-Meknès">Fès-Meknès</option>
                                                            <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                                                            <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                                                            <option value="Casablanca-Settat">Casablanca-Settat</option>
                                                            <option value="Marrakech-Safi">Marrakech-Safi</option>
                                                            <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                                                            <option value="Souss-Massa">Souss-Massa</option>
                                                            <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                                                            <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                                                            <option value="Dakhla-Oued Ed-Dahab">Dakhla-Oued Ed-Dahab</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="pz-code">Postcode / ZIP (optional)</label>
                                                        <input id="pz-code" value="{{ old('postal_code') }}" name="postal_code" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Email address <abbr class="required" title="required">*</abbr></label>
                                                        <input id="email" value="{{ old('email') }}" name="email" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                {{-- <div id="CheckoutBillingAccordion2" class="col-md-12">
                                                    <div class="checkout-box" data-bs-toggle="collapse" data-bs-target="#CheckoutTwo" aria-expanded="false" role="toolbar">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input visually-hidden" id="ship-to-different-address">
                                                            <label class="custom-control-label" for="ship-to-different-address">Ship to a different address?</label>
                                                        </div>
                                                    </div>
                                                    <div id="CheckoutTwo" class="collapse" data-bs-parent="#CheckoutBillingAccordion2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="f_name2">First name <abbr class="required" title="required">*</abbr></label>
                                                                    <input id="f_name2" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="l_name2">Last name <abbr class="required" title="required">*</abbr></label>
                                                                    <input id="l_name2" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="com_name2">Company name (optional)</label>
                                                                    <input id="com_name2" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-group">
                                                                    <label for="country2">Country <abbr class="required" title="required">*</abbr></label>
                                                                    <select id="country2" class="form-control wide">
                                                                        <option>Bangladesh</option>
                                                                        <option>Afghanistan</option>
                                                                        <option>Albania</option>
                                                                        <option>Algeria</option>
                                                                        <option>Armenia</option>
                                                                        <option>India</option>
                                                                        <option>Pakistan</option>
                                                                        <option>England</option>
                                                                        <option>London</option>
                                                                        <option>London</option>
                                                                        <option>China</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="street-address2-3">Street address <abbr class="required" title="required">*</abbr></label>
                                                                    <input id="street-address2-3" type="text" class="form-control" placeholder="House number and street name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="street-address2-2" class="visually-hidden">Street address 2 <abbr class="required" title="required">*</abbr></label>
                                                                    <input id="street-address2-2" type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="town3">Town / City <abbr class="required" title="required">*</abbr></label>
                                                                    <input id="town3" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-group">
                                                                    <label for="district2">District <abbr class="required" title="required">*</abbr></label>
                                                                    <select id="district2" class="form-control wide">
                                                                        <option>Afghanistan</option>
                                                                        <option>Albania</option>
                                                                        <option>Algeria</option>
                                                                        <option>Armenia</option>
                                                                        <option>India</option>
                                                                        <option>Pakistan</option>
                                                                        <option>England</option>
                                                                        <option>London</option>
                                                                        <option>London</option>
                                                                        <option>China</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="pz-code2">Postcode / ZIP (optional)</label>
                                                                    <input id="pz-code2" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0">
                                                        <label for="order-notes">Order notes (optional)</label>
                                                        <textarea value="{{ old('order_note') }}" id="order-notes" name="order_note" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!--== End Billing Accordion ==-->
                            </div>
                            <div class="col-lg-6">
                                <!--== Start Order Details Accordion ==-->
                                <div class="checkout-order-details-wrap">
                                    <div class="order-details-table-wrap table-responsive">
                                        <h2 class="title mb-25">Your order</h2>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th></th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-body">
                                                <tr class="cart-item">
                                                    <td class="product-photo">
                                                        <img src="{{$order->product->photo}}" width="50" class="border rounded" alt="">
                                                    </td>
                                                    <td class="product-name">{{$order->product->name}} <span class="product-quantity">× {{$order->quantity}}</span></td>
                                                    <td class="product-total">{{$order->product->actual_price}} {{ config('app')['currency_symbol'] }}</td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="table-foot">
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td></td>
                                                    <td>{{ $order->product->actual_price * $order->quantity }} {{ config('app')['currency_symbol'] }}</td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td></td>
                                                    @if(config('app')['shipping_cost'] == 0)
                                                    <td>0.00 {{ config('app')['currency_symbol'] }}</td>
                                                    @else
                                                        <td>{{ config('app')['shipping_cost'] }} {{ config('app')['currency_symbol'] }}</td>
                                                    @endIf
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total </th>
                                                    <td></td>
                                                    <td class="fw-bold text-primary" >{{ ($order->product->actual_price * $order->quantity)+config('app')['shipping_cost'] }}{{ config('app')['currency_symbol'] }}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="shop-payment-method">
                                            <div id="PaymentMethodAccordion">
                                                {{-- <div class="card">
                                                    <div class="card-header" id="check_payments">
                                                        <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemOne" aria-controls="itemOne" aria-expanded="true">Direct bank transfer</h5>
                                                    </div>
                                                    <div id="itemOne" class="collapse show" aria-labelledby="check_payments" data-bs-parent="#PaymentMethodAccordion">
                                                        <div class="card-body">
                                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="card">
                                                    <div class="card-header" id="check_payments2">
                                                        <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemTwo" aria-controls="itemTwo" aria-expanded="false">Check payments</h5>
                                                    </div>
                                                    <div id="itemTwo" class="collapse" aria-labelledby="check_payments2" data-bs-parent="#PaymentMethodAccordion">
                                                        <div class="card-body">
                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="title" >Cash on delivery</h5>
                                                    </div>
                                                    <div id="itemThree" class="collapse show" aria-labelledby="check_payments3" data-bs-parent="#PaymentMethodAccordion">
                                                        <div class="card-body">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="card">
                                                    <div class="card-header" id="check_payments4">
                                                        <h5 class="title" data-bs-toggle="collapse" data-bs-target="#itemFour" aria-controls="itemTwo" aria-expanded="false">PayPal Express Checkout</h5>
                                                    </div>
                                                    <div id="itemFour" class="collapse" aria-labelledby="check_payments4" data-bs-parent="#PaymentMethodAccordion">
                                                        <div class="card-body">
                                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <p class="p-text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="{{ url('privacy-policy') }}">privacy policy.</a></p>
                                            <div class="agree-policy">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="privacy" style="opacity: 0;margin-left: -23px;" id="privacy" class="custom-control-input visually-hidden">
                                                    <label for="privacy" class="custom-control-label">I have read and agree to the website terms and conditions <span class="required">*</span></label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn py-3 h-auto btn-place-order">Confirm order</button>
                                        </div>
                                    </div>
                                </div>
                                <!--== End Order Details Accordion ==-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--== End Shopping Checkout Area Wrapper ==-->

    </main>
@endsection
