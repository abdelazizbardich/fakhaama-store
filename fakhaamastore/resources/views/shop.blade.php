@extends('layouts.public')
@section('content')
    <main class="main-content">

        <!--== Start Page Header Area Wrapper ==-->
        <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="page-header-st3-content text-center text-md-start">
                            <ol class="breadcrumb justify-content-center justify-content-md-start">
                                <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                                <li class="breadcrumb-item active text-dark" aria-current="page">Products</li>
                            </ol>
                            <h2 class="page-header-title">All Products</h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-end">Showing {{$products->count()}} Results from {{ $products->total() }}</h5>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="section-space">
            <div class="container">
                <div class="row justify-content-between flex-xl-row-reverse">
                    <div class="col-xl-9">
                        <div class="row g-3 g-sm-6">
                            @if(count($products) > 0)
                            @foreach ($products as $product)
                            <div class="col-6 col-lg-4 col-xl-4 mb-4 mb-sm-8">
                                <!--== Start Product Item ==-->
                                <div class="product-item product-st3-item">
                                    <div class="product-thumb">
                                        <a class="d-block" href="{{ url("product-details/$product->id") }}">
                                            <img src="{{ ($product->photo)?$product->photo:asset('assets/images/shop/1.webp')}}" width="370" height="450" alt="Image-HasTech">
                                        </a>
                                        <a href="{{ url(
                                            'shop?category='.$product->category->id.'
                                            &search='.$search.'
                                            &price-from='.(($price[0])?$price[0]:0).'
                                            &price-to='.(($price[0])?$price[1]:100000)
                                            ) }}" class="flag-new">{{ $product->category->name }}</a>
                                        <div class="product-action">
                                            <button type="button" class="product-action-btn action-btn-quick-view" data-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                <i class="fa fa-expand"></i>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-cart" data-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                <span>Add to cart</span>
                                            </button>
                                            <button type="button" class="product-action-btn action-btn-wishlist" data-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button>
                                        </div>
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
                                            <div class="reviews">{{count($product->reviews)}} reviews</div>
                                        </div>
                                        <h4 class="title"><a href="product-details.html">{{ $product->name }}</a></h4>
                                        <div class="prices">
                                            <span class="price">{{ $product->actual_price }}{{ config('app')['currency_symbol'] }}</span>
                                            <span class="price-old">{{ $product->old_price }}{{ config('app')['currency_symbol'] }}</span>
                                        </div>
                                    </div>
                                    <div class="product-action-bottom">
                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                            <i class="fa fa-heart-o"></i>
                                        </button>
                                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                                <!--== End prPduct Item ==-->
                            </div>
                            @endforeach
                            @else
                            <div class="rounded border col-12 mb-4 mb-sm-8 p-1">
                                <div class="rounded bg-light p-3 text-center h1 text-secondary">
                                    <div class="col">
                                        No product found!
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ url('/shop') }}" style="width: fit-content !important;margin: auto;padding: 0.5rem .5rem !important;height: auto;font-size: .7rem;line-height: .7rem;letter-spacing: 2px;" class="btn shadow-sm btn-sm rounded p-1 mb-3 d-block w-100 "><i class="fa fa-close"> Clear filters</i></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="col-12">
                                {{ $products->links("vendor.pagination.bootstrap-5",["query"=> ('&category='.$category.'&search='.$search.'&price-from='.(($price[0])?$price[0]:0).'&price-to='.(($price[1])?$price[1]:100000))]) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <a href="{{ url('/shop') }}" class="btn shadow-sm btn-sm rounded p-1 mb-3 d-block w-100 "><i class="fa fa-close"> Clear filters</i></a>
                        <div class="product-sidebar-widget">
                            <div class="product-widget-search">
                                <form action="{{ url('shop')}}">
                                    <input type="search" value="{{ $search }}" name="search" placeholder="Search Here">
                                    <input type="text" name="category" value="{{$category}}" hidden>
                                    <input hidden name="price-from" placeholder="From...(0)" value="{{ (@$price[0])?$price[0]:0 }}" class="form-control mb-1" type="number"/>
                                    <input hidden name="price-to" placeholder="To...(0)" value="{{ (@$price[0])?$price[1]:100000 }}" class="form-control mb-1" type="number"/>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="product-widget">
                                <h4 class="product-widget-title">Price Filter</h4>
                                <div class="product-widget-range-slider">
                                    <div class="slider-range" id="slider-range"></div>
                                    <div class="slider-labels">
                                        <form action="{{ url('shop')}}" method="get">
                                            <input type="search" value="{{ $search }}" hidden name="search" placeholder="Search Here">
                                            <input type="text" name="category" value="{{$category}}" hidden>
                                            <input min="0" max="99999" name="price-from" placeholder="From...(0)" value="{{ (@$price[0])?$price[0]:0 }}" class="form-control mb-1" type="number"/>
                                            <input min="1" max="100000" name="price-to" placeholder="To...(0)" value="{{ (@$price[1])?$price[1]:100000 }}" class="form-control mb-1" type="number"/>
                                            <button class="w-100 btn btn-primary rounded p-1" type="submit">Apply</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="product-widget">
                                <h4 class="product-widget-title">Categoris</h4>
                                <ul class="product-widget-category">
                                    @foreach ($categories as $category)
                                        <li><a href="{{ url('shop?category='.$category->id.'&search='.$search.'&price-from='.(($price[0])?$price[0]:0).'&price-to='.(($price[1])?$price[1]:100000)) }}">{{$category->name}} <span>({{count($category->products)}})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            {{-- <div class="product-widget mb-0">
                                <h4 class="product-widget-title">Popular Tags</h4>
                                <ul class="product-widget-tags">
                                    <li><a href="blog.html">Beauty</a></li>
                                    <li><a href="blog.html">MakeupArtist</a></li>
                                    <li><a href="blog.html">Makeup</a></li>
                                    <li><a href="blog.html">Hair</a></li>
                                    <li><a href="blog.html">Nails</a></li>
                                    <li><a href="blog.html">Hairstyle</a></li>
                                    <li><a href="blog.html">Skincare</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->

        <!--== Start Product Banner Area Wrapper ==-->
        <section class="section-space">
            <div class="container">
                <!--== Start Product Category Item ==-->
                <a href="product.html" class="product-banner-item">
                    <img src="assets/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
                </a>
                <!--== End Product Category Item ==-->
            </div>
        </section>
        <!--== End Product Banner Area Wrapper ==-->
    </main>
@endsection
