@extends('layouts.public')
@section('content')
    <main class="main-content">

        <!--== Start Page Header Area Wrapper ==-->
        <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="page-header-st3-content text-start text-md-start">
                            <ol class="breadcrumb justify-content-center justify-content-md-end" dir="ltr">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ url('') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active text-dark" aria-current="page">معلومات المنتج</li>
                            </ol>
                            <h2 class="page-header-title text-center text-md-end">معلومات المنتج</h2>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-start">عرض المنتج</h5>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Page Header Area Wrapper ==-->

        <!--== Start Product Details Area Wrapper ==-->
        <section class="section-space">
            <div class="container">
                <div class="row product-details">
                    <div class="col-lg-6">
                        <div class="product-details-thumb">
                            <img src="{{ asset('storage/'.$product->photo) }}" width="570" height="693" alt="Image">
                            <span class="flag-new">{{ $product->category->name }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ url('product-checkout/'.$product->id) }}" method="get">
                            <div class="product-details-content">
                                {{-- <h5 class="product-details-collection">Premioum collection</h5> --}}
                                <div class="product-details-review">
                                    <div class="product-review-icon m-0">
                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 1)?'':'-o' }}"></i>
                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 2)?'':'-o' }}"></i>
                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 3)?'':'-o' }}"></i>
                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 4)?'':'-o' }}"></i>
                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 5)?'':'-o' }}"></i>
                                    </div>
                                    <button type="button" class="product-review-show me-2">{{ $product->reviews->count() }} التقيمات</button>
                                </div>
                                <h3 class="h2 fw-bold">{{ $product->name }}</h3>
                                {{-- <div class="product-details-qty-list">
                                    <div class="qty-list-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="qtyList1" checked>
                                        <label class="form-check-label" for="qtyList1">15 ml bottol <b>$250.00</b></label>
                                    </div>

                                    <div class="qty-list-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="qtyList2">
                                        <label class="form-check-label" for="qtyList2">25 ml bottol <b>$350.00</b> <span class="extra-offer">extra 25%</span></label>
                                    </div>
                                </div> --}}
                                <div class="product-details-shipping-cost">
                                    <p>
                                        {{ $product->short_description}}
                                    </p>
                                    {{-- <input class="form-check-input" type="checkbox" value="" checked>
                                    <label class="form-check-label" for="ShippingCost">Shipping from USA, Shipping Fees $4.22</label> --}}
                                </div>
                                <hr>
                                <div class="product-details-action mb-3">
                                    <span class="ms-3 text-danger fw-bold display-4">{{ $product->actual_price}} {{config('app')['currency_symbol']}}</span>
                                    <span class="text-decoration-line-through small">{{ $product->old_price }} {{config('app')['currency_symbol']}}</span>
                                </div>
                                <div class="product-details-pro-qty border-0 my-1">
                                    <div class="pro-qty">
                                        <input type="text" name="quantity" title="Quantity" value="01">
                                    </div>
                                </div>
                                <div class="d-flex mt-3">
                                    {{-- <button type="button" class="btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="fa fa-heart-o"></i></button> --}}
                                    <button type="submit" class="btn ms-3 w-50 " data-bs-toggle="modal" data-bs-target="#action-CartAddModal">اطلب الان</button>
                                    <a href="{{"https://api.whatsapp.com/send?phone=".config('app.whatsupp_number')."&text=".urlencode('مرحبًا ، أود أن أطلب هذا المنتج:'.$product->name.', هل مازال متوفرا؟ '.url('/product-details/'.$product->id))}}" target="_blank" class="w-50 btn shadow btn-lg bg-success border-success d-flex align-items-center justify-content-center">اطلب عبر<i class="me-1 fs-3 fa fa-whatsapp"></i> </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="nav product-details-nav" id="product-details-nav-tab" role="tablist">
                            <button class="btn btn-primary ms-5" id="specification-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="specification" aria-selected="false">مواصفات</button>
                            <button class="btn btn-primary active" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="true">التقيمات</button>
                        </div>
                        <div class="tab-content" id="product-details-nav-tabContent">
                            <div class="tab-pane fade " id="specification" role="tabpanel" aria-labelledby="specification-tab">
                                <ul class="product-details-info-wrap">
                                    <li><span>الوزن:</span>
                                        <p>{{ $product->weight }} g</p>
                                    </li>
                                    <li><span>الأبعاد:</span>
                                        <p>{{ $product->dimentions['width'] }} x {{ $product->dimentions['height'] }} x {{ $product->dimentions['depth'] }} cm</p>
                                    </li>
                                    <li><span>المكونات:</span>
                                        <p>{{implode(', ',$product->materials)}}
                                        </p>
                                    </li>
                                    <li><span>معلومات اخرى:</span>
                                        <p>{{ $product->other_infos }}</p>
                                    </li>
                                </ul>

                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>

                            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                                @foreach ($product->reviews as $review)
                                    <!--== Start Reviews Content Item ==-->
                                    <div class="product-review-item">
                                        <div class="product-review-top">
                                            <div class="product-review-thumb">
                                                <img src="{{asset('assets/images/shop/product-details/comment1.webp')}}" alt="Images">
                                            </div>
                                            <div class="product-review-content">
                                                <span class="product-review-name">{{$review->name}}</span>
                                                {{-- <span class="product-review-designation">Delveloper</span> --}}
                                                <div class="product-review-icon">
                                                    <i class="fa fa-star{{ ($review->rating >= 1)?'':'-o' }}"></i>
                                                    <i class="fa fa-star{{ ($review->rating >= 2)?'':'-o' }}"></i>
                                                    <i class="fa fa-star{{ ($review->rating >= 3)?'':'-o' }}"></i>
                                                    <i class="fa fa-star{{ ($review->rating >= 4)?'':'-o' }}"></i>
                                                    <i class="fa fa-star{{ ($review->rating >= 5)?'':'-o' }}"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="desc">
                                            {{$review->feedback}}
                                        </p>
                                        {{-- <button type="button" class="review-reply"><i class="fa fa fa-undo"></i></button> --}}
                                    </div>
                                    <!--== End Reviews Content Item ==-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="product-reviews-form-wrap">
                            <h4 class="product-form-title">اترك مراجعة</h4>
                            <div class="product-reviews-form">
                                <form action="{{ url('/reviews') }}" method="POST">
                                    @csrf
                                    <input type="number" name="product_id" hidden  value="{{$product->id}}"/>
                                    <div class="form-input-item">
                                        <textarea class="form-control" name="feedback" placeholder="أدخل ملاحظاتك"></textarea>
                                    </div>
                                    <div class="form-input-item">
                                        <input class="form-control" type="text" name="name" placeholder="الاسم الكامل">
                                    </div>
                                    <div class="form-input-item">
                                        <input class="form-control" type="email" name="email" placeholder="عنوان البريد الإلكتروني">
                                    </div>
                                    <div class="form-input-item">
                                        <div class="form-ratings-item">
                                            <select name="rating" id="product-review-form-rating-select" class="select-ratings">
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                                <option value="5">05</option>
                                            </select>
                                            <span class="title">قدم تقييماتك</span>
                                            <div class="product-ratingsform-form-wrap">
                                                <div class="product-ratingsform-form-icon">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div id="product-review-form-rating" class="product-ratingsform-form-icon-fill">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="reviews-form-checkbox">
                                            <input class="form-check-input" type="checkbox" value="" id="ReviewsFormCheckbox" checked>
                                            <label class="form-check-label" for="ReviewsFormCheckbox">Provide ratings anonymously.</label>
                                        </div> --}}
                                    </div>
                                    <div class="form-input-item mb-0">
                                        <button type="submit" class="btn">إرسال</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Details Area Wrapper ==-->

        <!--== Start Product Banner Area Wrapper ==-->
        <div class="container">
            <!--== Start Product Category Item ==-->
            <a href="{{ url('product') }}" class="product-banner-item">
                <img src="{{asset('assets/images/shop/banner/7.webp')}}" width="1170" height="240" alt="Image-HasTech">
            </a>
            <!--== End Product Category Item ==-->
        </div>
        <!--== End Product Banner Area Wrapper ==-->

        <!--== Start Product Area Wrapper ==-->
        <section class="section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2 class="title">منتجات ذات صله</h2>
                            <p class="m-0">استكشف المنتجات الإضافية ذات الصلة</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-n10">
                    <div class="col-12">
                        <div class="swiper related-product-slide-container">
                            <div class="swiper-wrapper">
                                @foreach ($relatedProducts as $product)
                                    <div class="swiper-slide mb-10">
                                        <!--== Start Product Item ==-->
                                        <div class="product-item product-st2-item">
                                            <div class="product-thumb">
                                                <a class="d-block" href="{{ url('product-details/'.$product->id) }}">
                                                    <img src="{{ asset('storage/'.$product->photo) }}" width="370" height="450" alt="Image-HasTech">
                                                </a>
                                                <span class="flag-new">{{ $product->category->name }}</span>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-rating">
                                                    <div class="rating">
                                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 1)?'':'-o' }}"></i>
                                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 2)?'':'-o' }}"></i>
                                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 3)?'':'-o' }}"></i>
                                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 4)?'':'-o' }}"></i>
                                                        <i class="fa fa-star{{ (getRatingFromReviews($product->reviews) >= 5)?'':'-o' }}"></i>
                                                    </div>
                                                    <div class="reviews">{{$product->reviews->count()}} التقييمات</div>
                                                </div>
                                                <h4 class="title"><a href="{{ url('product-details/'.$product->id) }}">{{ $product->name }}</a></h4>
                                                <div class="prices">
                                                    <span class="price d-inline-block">{{ $product->actual_price }} {{config('app')['currency_symbol']}}</span>
                                                    <span class="price-old d-inline-block">{{ $product->old_price }} {{config('app')['currency_symbol']}}</span>
                                                </div>
                                                <div class="product-action">
                                                    <a href="{{ url('product-details/'.$product->id) }}" type="button" class="btn py-1 product-action-btn action-btn-cart">
                                                        <span>اطلب الان</span>
                                                    </a>
                                                    {{-- <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="fa fa-expand"></i>
                                                    </button> --}}
                                                    {{-- <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="fa fa-heart-o"></i>
                                                    </button> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End prPduct Item ==-->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Area Wrapper ==-->

    </main>
@endsection
