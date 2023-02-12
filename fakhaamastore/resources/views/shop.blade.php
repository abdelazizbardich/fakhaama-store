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
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ url('') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active text-dark" aria-current="page">منتجات</li>
                            </ol>
                            <h2 class="page-header-title">جميع المنتجات</h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-start">عرض
                            {{ $products->count() }} نتائج من {{ $products->total() }}</h5>
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
                            @if (count($products) > 0)
                                {{--  --}}
                                @foreach ($topSale as $product)
                                    <div class="col-6 col-lg-4 col-xl-4 mb-4 mb-sm-8">
                                        <!--== Start Product Item ==-->
                                        <div style="background-color: rgb(255, 243, 218);" class="p-2 rounded-3 product-item product-st3-item">
                                            <div class="product-thumb">
                                                <span class="position-absolute text-warning fw-bold">أعلى المبيعات</span>
                                                <a class="d-block" href="{{ url("product-details/".$product->product->id) }}">
                                                    <img src="{{ $product->product->photo ? asset('storage/'.$product->product->photo) : asset('assets/images/shop/1.webp') }}" width="370" height="450" alt="Image-HasTech">
                                                </a>
                                                <a href="{{ url('shop?category=' . $product->product->category->id .'&search=' . $search .'&price-from=' . ($price[0] ? $price[0] : 0) .'&price-to=' . ($price[0] ? $price[1] : 100000),) }}"
                                                    class="flag-new">{{ $product->product->category->name }}</a>
                                                <div class="product-action">
                                                    {{-- <button type="button" class="product-action-btn action-btn-quick-view" data-id="{{ $product->product->id }}" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="fa fa-expand"></i>
                                                    </button> --}}
                                                    <a href="{{ url('product-details/' . $product->product->id) }}" type="button"
                                                        class="product-action-btn action-btn-cart">
                                                        <span>اطلب الان</span>
                                                    </a>
                                                    {{-- <button type="button" class="product-action-btn action-btn-wishlist" data-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="fa fa-heart-o"></i>
                                                    </button> --}}
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-rating">
                                                    <div class="rating">
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->product->reviews) >= 1 ? '' : '-o' }}"></i>
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->product->reviews) >= 2 ? '' : '-o' }}"></i>
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->product->reviews) >= 3 ? '' : '-o' }}"></i>
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->product->reviews) >= 4 ? '' : '-o' }}"></i>
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->product->reviews) >= 5 ? '' : '-o' }}"></i>
                                                    </div>
                                                    <div class="reviews">{{ count($product->product->reviews) }} التقيمات</div>
                                                </div>
                                                <h4 class="title"><a href="product-details.html">{{ $product->product->name }}</a>
                                                </h4>
                                                <div class="prices">
                                                    <span
                                                        class="price d-inline-block">{{ $product->product->actual_price }} {{ config('app')['currency_symbol'] }}</span>
                                                    <span
                                                        class="price-old d-inline-block">{{ $product->product->old_price }} {{ config('app')['currency_symbol'] }}</span>
                                                </div>
                                            </div>
                                            <div class="product-action-bottom">
                                                {{-- <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                    <i class="fa fa-expand"></i>
                                                </button> --}}
                                                {{-- <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                    <i class="fa fa-heart-o"></i>
                                                </button> --}}
                                                <a href="{{ url('product-details/' . $product->product->id) }}" type="button"
                                                    class="product-action-btn action-btn-cart">
                                                    <span>اطلب الان</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--== End prPduct Item ==-->
                                    </div>
                                @endforeach
                                <div class="col-12 my-0">
                                    <hr>
                                </div>
                                {{--  --}}
                                @foreach ($products as $product)
                                    <div class="col-6 col-lg-4 col-xl-4 mb-4 mb-sm-8">
                                        <!--== Start Product Item ==-->
                                        <div class="product-item product-st3-item">
                                            <div class="product-thumb">
                                                <a class="d-block" href="{{ url("product-details/$product->id") }}">
                                                    <img src="{{ $product->photo ? asset('storage/'.$product->photo) : asset('assets/images/shop/1.webp') }}"
                                                        width="370" height="450" alt="Image-HasTech">
                                                </a>
                                                <a href="{{ url(
                                                    'shop?category=' .
                                                        $product->category->id .'    &search=' .
                                                        $search .'    &price-from=' .
                                                        ($price[0] ? $price[0] : 0) .'    &price-to=' .
                                                        ($price[0] ? $price[1] : 100000),
                                                ) }}"
                                                    class="flag-new">{{ $product->category->name }}</a>
                                                <div class="product-action">
                                                    {{-- <button type="button" class="product-action-btn action-btn-quick-view" data-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                <i class="fa fa-expand"></i>
                                            </button> --}}
                                                    <a href="{{ url('product-details/' . $product->id) }}" type="button"
                                                        class="product-action-btn action-btn-cart">
                                                        <span>اطلب الان</span>
                                                    </a>
                                                    {{-- <button type="button" class="product-action-btn action-btn-wishlist" data-id="{{ $product->id }}" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                <i class="fa fa-heart-o"></i>
                                            </button> --}}
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-rating">
                                                    <div class="rating">
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->reviews) >= 1 ? '' : '-o' }}"></i>
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->reviews) >= 2 ? '' : '-o' }}"></i>
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->reviews) >= 3 ? '' : '-o' }}"></i>
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->reviews) >= 4 ? '' : '-o' }}"></i>
                                                        <i
                                                            class="fa fa-star{{ getRatingFromReviews($product->reviews) >= 5 ? '' : '-o' }}"></i>
                                                    </div>
                                                    <div class="reviews">{{ count($product->reviews) }} التقيمات</div>
                                                </div>
                                                <h4 class="title"><a href="product-details.html">{{ $product->name }}</a>
                                                </h4>
                                                <div class="prices">
                                                    <span
                                                        class="price d-inline-block">{{ $product->actual_price }} {{ config('app')['currency_symbol'] }}</span>
                                                    <span
                                                        class="price-old d-inline-block">{{ $product->old_price }} {{ config('app')['currency_symbol'] }}</span>
                                                </div>
                                            </div>
                                            <div class="product-action-bottom">
                                                {{-- <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                            <i class="fa fa-expand"></i>
                                        </button> --}}
                                                {{-- <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                            <i class="fa fa-heart-o"></i>
                                        </button> --}}
                                                <a href="{{ url('product-details/' . $product->id) }}" type="button"
                                                    class="product-action-btn action-btn-cart">
                                                    <span>اطلب الان</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--== End prPduct Item ==-->
                                    </div>
                                @endforeach
                            @else
                                <div class="rounded border col-12 mb-4 mb-sm-8 p-1">
                                    <div class="rounded bg-light p-3 text-center h1 text-secondary">
                                        <div class="col">
                                            <span>
                                                لم يتم العثور على أي منتج!
                                            </span>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ url('/shop') }}"
                                                style="width: fit-content !important;margin: auto;padding: 0.5rem .5rem !important;height: auto;font-size: .7rem;line-height: .7rem;letter-spacing: 0px;"
                                                class="btn shadow-sm btn-sm rounded p-1 mb-3 d-block w-100 "><i
                                                    class="fa fa-close"></i> مسح الفلاتر</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="col-12">
                                {{ $products->links('vendor.pagination.bootstrap-5', ['query' => '&category=' . $category . '&search=' . $search . '&price-from=' . ($price[0] ? $price[0] : 0) . '&price-to=' . ($price[1] ? $price[1] : 100000)]) }}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <a href="{{ url('/shop') }}" class="btn shadow-sm btn-sm rounded p-1 mb-3 d-block w-100 "><i
                                class="fa fa-close"></i> مسح الفلاتر</a>
                        <div class="product-sidebar-widget">
                            <div class="product-widget-search">
                                <form action="{{ url('shop') }}">
                                    <input type="search" value="{{ $search }}" name="search"
                                        placeholder="ابحث هنا">
                                    <input type="text" name="category" value="{{ $category }}" hidden>
                                    <input hidden name="price-from" placeholder="From...(0)"
                                        value="{{ @$price[0] ? $price[0] : 0 }}" class="form-control mb-1"
                                        type="number" />
                                    <input hidden name="price-to" placeholder="To...(0)"
                                        value="{{ @$price[0] ? $price[1] : 100000 }}" class="form-control mb-1"
                                        type="number" />
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="product-widget">
                                <h4 class="product-widget-title">فلتر السعر</h4>
                                <div class="product-widget-range-slider">
                                    <div class="slider-range" id="slider-range"></div>
                                    <div class="slider-labels">
                                        <form action="{{ url('shop') }}" method="get">
                                            <input type="search" value="{{ $search }}" hidden name="search"
                                                placeholder="ابحث هنا">
                                            <input type="text" name="category" value="{{ $category }}" hidden>
                                            <input min="0" max="99999" name="price-from"
                                                placeholder="From...(0)" value="{{ @$price[0] ? $price[0] : 0 }}"
                                                class="form-control mb-1" type="number" />
                                            <input min="1" max="100000" name="price-to" placeholder="To...(0)"
                                                value="{{ @$price[1] ? $price[1] : 100000 }}" class="form-control mb-1"
                                                type="number" />
                                            <button class="w-100 btn btn-primary rounded p-1"
                                                type="submit">تطبيق</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="product-widget">
                                <h4 class="product-widget-title">الفئات</h4>
                                <ul class="product-widget-category">
                                    @foreach ($categories as $category)
                                        <li><a href="{{ url('shop?category=' . $category->id . '&search=' . $search . '&price-from=' . ($price[0] ? $price[0] : 0) . '&price-to=' . ($price[1] ? $price[1] : 100000)) }}">{{ $category->name }} <span>({{ count($category->products) }})</span></a></li>
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
