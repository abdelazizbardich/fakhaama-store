@extends('layouts.public')
@section('content')
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <section class="page-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-7 col-xl-7">
                        <div class="page-header-content">
                            <div class="title-img"><img src="assets/images/photos/about-title.webp" alt="Image"></div>
                            <h2 class="page-header-title">{{ config('app.name')}}</h2>
                            <h4 class="page-header-sub-title">Best parfum store</h4>
                            <p class="page-header-desc">Our range of luxury parfum has been hand-selected to bring you the finest scents from around the world. Daring to soft and subtle, we have something for every personality and occasion.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-xl-5">
                        <div class="page-header-thumb">
                            <img src="assets/images/photos/about1.webp" width="570" height="669" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Funfact Area Wrapper ==-->
        <section class="funfact-area section-space">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-sm-6 col-lg-4 mb-6">
                        <!--== Start Funfact Item ==-->
                        <div class="funfact-item">
                            <div class="icon">
                                <img src="assets/images/icons/funfact1.webp" width="110" height="110" alt="Icon">
                            </div>
                            <h2 class="funfact-number">500+</h2>
                            <h6 class="funfact-title">Clients</h6>
                        </div>
                        <!--== End Funfact Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-6">
                        <!--== Start Funfact Item ==-->
                        <div class="funfact-item">
                            <div class="icon">
                                <img src="assets/images/icons/funfact2.webp" width="110" height="110" alt="Icon">
                            </div>
                            <h2 class="funfact-number">2500+</h2>
                            <h6 class="funfact-title">Product sold</h6>
                        </div>
                        <!--== End Funfact Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 mb-6">
                        <!--== Start Funfact Item ==-->
                        <div class="funfact-item">
                            <div class="icon">
                                <img src="assets/images/icons/funfact3.webp" width="110" height="110" alt="Icon">
                            </div>
                            <h2 class="funfact-number">70+</h2>
                            <h6 class="funfact-title">Client feedback</h6>
                        </div>
                        <!--== End Funfact Item ==-->
                    </div>
                </div>
            </div>
        </section>
        <!--== End Funfact Area Wrapper ==-->

        <!--== Start Brand Logo Area Wrapper ==-->
        {{-- <div class="section-space">
            <div class="container">
                <div class="swiper brand-logo-slider-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide brand-logo-item">
                            <!--== Start Brand Logo Item ==-->
                            <img src="{{ asset('assets/images/logo.png') }}" width="155" height="110" alt="Image-HasTech">
                            <!--== End Brand Logo Item ==-->
                        </div>
                        <div class="swiper-slide brand-logo-item">
                            <!--== Start Brand Logo Item ==-->
                            <img src="{{ asset('assets/images/logo.png') }}" width="241" height="110" alt="Image-HasTech">
                            <!--== End Brand Logo Item ==-->
                        </div>
                        <div class="swiper-slide brand-logo-item">
                            <!--== Start Brand Logo Item ==-->
                            <img src="{{ asset('assets/images/logo.png') }}" width="147" height="110" alt="Image-HasTech">
                            <!--== End Brand Logo Item ==-->
                        </div>
                        <div class="swiper-slide brand-logo-item">
                            <!--== Start Brand Logo Item ==-->
                            <img src="{{ asset('assets/images/logo.png') }}" width="196" height="110" alt="Image-HasTech">
                            <!--== End Brand Logo Item ==-->
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--== End Brand Logo Area Wrapper ==-->

        <!--== Start About Area Wrapper ==-->
        <section class="section-space pt-0 mb-n1">
            <div class="container">
                <div class="about-thumb">
                    <img src="assets/images/photos/about2.webp" alt="Image">
                </div>
                <div class="about-content">
                    <h2 class="title">Best parfum Provider</h2>
                    <p class="desc">Welcome to the official {{ config('app.name')}} page We are so excited to share our passion for fragrances with all of you. Our collection of luxury fragrances has been hand-selected to bring you the finest scents from around the world. Daring to soft and subtle, we have something for every personality and occasion. Follow our page to stay updated With our latest products, special offers and exciting events, we can't wait to take this aromatic journey with you. Let the scent of luxury fill your life.</p>
                </div>
            </div>
        </section>
        <!--== End About Area Wrapper ==-->

        <!--== Start Feature Area Wrapper ==-->
        <div class="feature-area section-space">
            <div class="container">
                <div class="row mb-n9">
                    <div class="col-md-6 col-lg-4 mb-8">
                        <!--== Start Feature Item ==-->
                        <div class="feature-item">
                            <h5 class="title"><img class="icon" src="assets/images/icons/feature1.webp" width="60"
                                    height="60" alt="Icon"> Support Team</h5>
                            <p class="desc">Lorem ipsum dolor amet, consectetur adipiscing. Ac tortor enim metus, turpis.
                            </p>
                        </div>
                        <!--== End Feature Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-8">
                        <!--== Start Feature Item ==-->
                        <div class="feature-item">
                            <h5 class="title"><img class="icon" src="assets/images/icons/feature2.webp" width="60"
                                    height="60" alt="Icon"> Certification</h5>
                            <p class="desc">Lorem ipsum dolor amet, consectetur adipiscing. Ac tortor enim metus, turpis.
                            </p>
                        </div>
                        <!--== End Feature Item ==-->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-8">
                        <!--== Start Feature Item ==-->
                        <div class="feature-item">
                            <h5 class="title"><img class="icon" src="assets/images/icons/feature3.webp"
                                    width="60" height="60" alt="Icon"> Natural Products</h5>
                            <p class="desc">Lorem ipsum dolor amet, consectetur adipiscing. Ac tortor enim metus, turpis.
                            </p>
                        </div>
                        <!--== End Feature Item ==-->
                    </div>
                </div>
            </div>
        </div>
        <!--== End Feature Area Wrapper ==-->

    </main>
@endsection
