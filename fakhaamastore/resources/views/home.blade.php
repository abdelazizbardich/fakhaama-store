@extends('layouts.public')
@section('content')
    <main class="main-content">
        <!--== Start Hero Area Wrapper ==-->
        <section class="hero-two-slider-area position-relative">
            <div class="swiper hero-two-slider-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hero-two-slide-item">
                        <div class="container">
                            <div class="row align-items-center position-relative">
                                <div class="col-12 col-md-6">
                                    <div class="hero-two-slide-content">
                                        <div class="hero-two-slide-text-img"><img src="assets/images/slider/text-light.webp"
                                                width="427" height="232" alt="Image"></div>
                                        <h2 class="hero-two-slide-title">ANTI AGEING</h2>
                                        <p class="hero-two-slide-desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit ut aliquam, purus sit amet luctus venenatis.</p>
                                        <div class="hero-two-slide-meta">
                                            <a class="btn btn-border-primary" href="{{ url('shop') }}">BUY NOW</a>
                                            <a class="ht-popup-video" data-fancybox data-type="iframe"
                                                href="https://player.vimeo.com/video/172601404?autoplay=1">
                                                <i class="fa fa-play icon"></i>
                                                <span>Play Now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="hero-two-slide-thumb">
                                        <img src="assets/images/slider/slider3.webp" width="690" height="690"
                                            alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide hero-two-slide-item">
                        <div class="container">
                            <div class="row align-items-center position-relative">
                                <div class="col-12 col-md-6">
                                    <div class="hero-two-slide-content">
                                        <div class="hero-two-slide-text-img"><img src="assets/images/slider/text-light.webp"
                                                width="427" height="232" alt="Image"></div>
                                        <h2 class="hero-two-slide-title">CLEAN FRESH</h2>
                                        <p class="hero-two-slide-desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit ut aliquam, purus sit amet luctus venenatis.</p>
                                        <div class="hero-two-slide-meta">
                                            <a class="btn btn-border-primary" href="{{ url('shop') }}">BUY NOW</a>
                                            <a class="ht-popup-video" data-fancybox data-type="iframe"
                                                href="https://player.vimeo.com/video/172601404?autoplay=1">
                                                <i class="fa fa-play icon"></i>
                                                <span>Play Now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="hero-two-slide-thumb">
                                        <img src="assets/images/slider/slider4.webp" width="690" height="690"
                                            alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--== Add Pagination ==-->
                <div class="hero-two-slider-pagination"></div>
            </div>
        </section>
        <!--== End Hero Area Wrapper ==-->

        <!--== Start Product Banner Area Wrapper ==-->
        <section class="section-space">
            <div class="container">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-sm-6 col-lg-4">
                            <!--== Start Product Category Item ==-->
                            <a href="{{ url('shop?category='.$category->id) }}" class="product-banner-item">
                                <img src="{{$category->photo}}" width="370" height="370" alt="Image-HasTech">
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--== End Product Banner Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="section-space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2 class="title">New Product</h2>
                            <p class="m-0">Unlock Efficiency with Our Latest Innovation products</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="{{ url('shop') }}" class="btn btn-primary"><span class="d-none d-md-inline-block" >Show</span> more <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                    @foreach ($newProducts as $product)
                    <div class="col-6 col-lg-4 mb-4 mb-sm-9">
                        <!--== Start Product Item ==-->
                        <div class="product-item product-st2-item">
                            <div class="product-thumb">
                                <a class="d-block" href="{{ url('product-details') }}">
                                    <img src="{{$product->photo}}" width="370" height="450" alt="Image-HasTech">
                                </a>
                                <span class="flag-new">{{$product->category->name}}</span>
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="reviews">{{$product->reviews->count()}} reviews</div>
                                </div>
                                <h4 class="title"><a href="{{ url('product-details/'.$product->id) }}">{{$product->name}}</a></h4>
                                <div class="prices">
                                    <span class="price">{{ $product->actual_price }}{{ config('app')['currency_symbol'] }}</span>
                                    <span class="price-old">{{ $product->old_price }}{{ config('app')['currency_symbol'] }}</span>
                                </div>
                                <div class="product-action">
                                    <button type="button" class="product-action-btn action-btn-cart"
                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <span>Add to cart</span>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                </div>
                                <div class="product-action-bottom">
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-cart"
                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <span>Add to cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--== End prPduct Item ==-->
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->

        <!--== Start Product Banner Area Wrapper ==-->
        <section class="section-space pt-0">
            <div class="container">
                <!--== Start Product Category Item ==-->
                <a href="{{ url('shop') }}" class="product-banner-item">
                    <img src="assets/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
                </a>
                <!--== End Product Category Item ==-->
            </div>
        </section>
        <!--== End Product Banner Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="section-space pt-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title">
                            <h2 class="title">Top Sale Products</h2>
                            <p class="m-0">Get the Best Bang for Your Buck: Our Top Selling Products</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="{{ url('shop') }}" class="btn btn-primary"><span class="d-none d-md-inline-block" >Show</span> more <i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                    <div class="col-6 col-lg-4 mb-4 mb-sm-10">
                        <!--== Start Product Item ==-->
                        <div class="product-item product-st2-item">
                            <div class="product-thumb">
                                <a class="d-block" href="{{ url('product-details') }}">
                                    <img src="assets/images/shop/8.webp" width="370" height="450"
                                        alt="Image-HasTech">
                                </a>
                                <span class="flag-new">new</span>
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="reviews">150 reviews</div>
                                </div>
                                <h4 class="title"><a href="{{ url('product-details') }}">Readable content DX22</a></h4>
                                <div class="prices">
                                    <span class="price">$210.00</span>
                                    <span class="price-old">300.00</span>
                                </div>
                                <div class="product-action">
                                    <button type="button" class="product-action-btn action-btn-cart"
                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <span>Add to cart</span>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                </div>
                                <div class="product-action-bottom">
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-cart"
                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <span>Add to cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--== End prPduct Item ==-->
                    </div>
                    <div class="col-6 col-lg-4 mb-4 mb-sm-10">
                        <!--== Start Product Item ==-->
                        <div class="product-item product-st2-item">
                            <div class="product-thumb">
                                <a class="d-block" href="{{ url('product-details') }}">
                                    <img src="assets/images/shop/7.webp" width="370" height="450"
                                        alt="Image-HasTech">
                                </a>
                                <span class="flag-new">new</span>
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="reviews">150 reviews</div>
                                </div>
                                <h4 class="title"><a href="{{ url('product-details') }}">Voyage face cleaner</a></h4>
                                <div class="prices">
                                    <span class="price">$210.00</span>
                                    <span class="price-old">300.00</span>
                                </div>
                                <div class="product-action">
                                    <button type="button" class="product-action-btn action-btn-cart"
                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <span>Add to cart</span>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                </div>
                                <div class="product-action-bottom">
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-cart"
                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <span>Add to cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--== End prPduct Item ==-->
                    </div>
                    <div class="col-6 col-lg-4 mb-4 mb-sm-10">
                        <!--== Start Product Item ==-->
                        <div class="product-item product-st2-item">
                            <div class="product-thumb">
                                <a class="d-block" href="{{ url('product-details') }}">
                                    <img src="assets/images/shop/5.webp" width="370" height="450"
                                        alt="Image-HasTech">
                                </a>
                                <span class="flag-new">new</span>
                            </div>
                            <div class="product-info">
                                <div class="product-rating">
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="reviews">150 reviews</div>
                                </div>
                                <h4 class="title"><a href="{{ url('product-details') }}">Impulse Duffle</a></h4>
                                <div class="prices">
                                    <span class="price">$210.00</span>
                                    <span class="price-old">300.00</span>
                                </div>
                                <div class="product-action">
                                    <button type="button" class="product-action-btn action-btn-cart"
                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <span>Add to cart</span>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                </div>
                                <div class="product-action-bottom">
                                    <button type="button" class="product-action-btn action-btn-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                        <i class="fa fa-expand"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-wishlist"
                                        data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                        <i class="fa fa-heart-o"></i>
                                    </button>
                                    <button type="button" class="product-action-btn action-btn-cart"
                                        data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                        <span>Add to cart</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--== End prPduct Item ==-->
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->

        <!--== Start News Letter Area Wrapper ==-->
        <section class="section-space pt-0">
            <div class="container">
                <div class="newsletter-content-wrap" data-bg-img="assets/images/photos/bg1.webp">
                    <div class="newsletter-content">
                        <div class="section-title mb-0">
                            <h2 class="title">Join with us</h2>
                            <p>and stay up to date with the latest news and offers! </p>
                        </div>
                    </div>
                    <div class="newsletter-form">
                        <form action="{{ url("newsletter") }}" method="POST">
                            @csrf
                            <input type="email" name="email" class="form-control" placeholder="enter your email">
                            <button class="btn-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--== End News Letter Area Wrapper ==-->

    </main>
@endsection
