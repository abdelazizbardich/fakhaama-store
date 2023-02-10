<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fakhaama - Cosmetic & Beauty store Website</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="From the boldest to the softest and most subtle, we have something for every personality and every occasion.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="abdelaziz bardich" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

    <style>
        .product-item .product-action .action-btn-cart {
            border-radius: 50px;
            height: 50px;
            letter-spacing: .2em;
            font-size: 13px;
            color: #231942;
            font-weight: 500;
            margin: 0 20px;
            padding: 5px 28px 5px 32px;
            text-align: center;
            text-transform: uppercase;
            transition-delay: .15s;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Start Header Wrapper ==-->
        <header class="header-area sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-sm-6 col-lg-3">
                        <div class="header-logo">
                            <a href="{{ url('') }}">
                                <img class="logo-main" src="{{ asset('assets/images/logo.png') }}" width="95"
                                    height="68" alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="header-navigation">
                            <ul class="main-nav justify-content-start">
                                <li><a href="{{ url('') }}">home</a></li>
                                <li><a href="{{ url('about-us') }}">about</a></li>
                                <li><a href="{{ url('shop') }}">shop</a></li>
                                <li><a href="{{ url('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-7 col-sm-6 col-lg-3">
                        <div class="header-action justify-content-end">
                            {{-- <button class="header-action-btn ms-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                <span class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect class="icon-rect" width="30" height="30" fill="url(#pattern1)"/>
                                        <defs>
                                        <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_504:11" transform="scale(0.0333333)"/>
                                        </pattern>
                                        <image id="image0_504:11" width="30" height="30" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABiUlEQVRIie2Wu04CQRSGP0G2EUtIbHwA8B3EQisLIcorEInx8hbEZ9DKy6toDI1oAgalNFpDoYWuxZzJjoTbmSXERP7kZDbZ859vdmb27MJcf0gBUAaugRbQk2gBV3IvmDa0BLwA4Zh4BorTACaAU6fwPXAI5IAliTxwBDScvJp4vWWhH0BlTLEEsC+5Fu6lkgNdV/gKDnxHCw2I9rSiNQNV8baBlMZYJtpTn71KAg9SY3dUYn9xezLPgG8P8BdwLteq5X7CzDbnAbXKS42WxtQVUzoGeFlqdEclxXrnhmhhkqR+8KuMqzHA1vumAddl3IwB3pLxVmOyr1NjwKQmURJ4lBp7GmOAafghpg1qdSDeDrCoNReJWmZB4dsAPsW7rYVa1Rx4FbOEw5TEPKmFvgMZX3DCgYeYNniMaQ5piTXghGhPLdTmZ33hYNpem98f/UHRwSxvhqhXx4anMA3/EmhiOlJPJnSBOb3uQcpOE65VhujPpAms/Bu4u+x3swRbeB24mTV4LgB+AFuLedkPkcmmAAAAAElFTkSuQmCC"/>
                                        </defs>
                                    </svg>
                                </span>
                            </button> --}}

                            {{-- <button class="header-action-btn" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                                <span class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect class="icon-rect" width="30" height="30" fill="url(#pattern2)" />
                                        <defs>
                                            <pattern id="pattern2" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_504:9" transform="scale(0.0333333)" />
                                            </pattern>
                                            <image id="image0_504:9" width="30" height="30"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABFUlEQVRIie2VMU7DMBSGvwAqawaYuAmKxCW4A1I5Qg4AA93KBbp1ZUVUlQJSVVbCDVhgzcTQdLEVx7WDQ2xLRfzSvzzb+d6zn2MYrkugBBYevuWsHKiFn2JBMwH8Bq6Aw1jgBwHOYwGlPgT4LDZ4I8BJDNiEppl034UEJ8DMAJ0DByHBACPgUYEugePQUKkUWAmnsaB/Ry/YO9aXCwlT72AdrqaWEohwBWxSwc8ReIVtYIr5bM5pXqO+Men7rozGlkVSv4lJj1WQfsbvXVkNVNk1eEK4ik9/yuwzAPhLh5iuU4jtftMDR4ZJJXChxTJ2H3zXGDgWc43/X2Wro8G81a8u2fXU2nXiLVAxvNIKuPGW/r/2SltF+a3Rkw4pmwAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                </span>
                            </button> --}}

                            {{-- <a class="header-action-btn" href="{{ url('account-login') }}">
                                <span class="icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect class="icon-rect" width="30" height="30" fill="url(#pattern3)" />
                                        <defs>
                                            <pattern id="pattern3" patternContentUnits="objectBoundingBox"
                                                width="1" height="1">
                                                <use xlink:href="#image0_504:10" transform="scale(0.0333333)" />
                                            </pattern>
                                            <image id="image0_504:10" width="30" height="30"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABEUlEQVRIie3UMUoDYRDF8Z8psqUpLBRrBS+gx7ATD6E5iSjeQQ/gJUzEwmChnZZaKZiQ0ljsLkhQM5/5Agr74DX7DfOfgZ1Hoz+qAl30Marcx2H1thCtY4DJN76parKqmAH9DM+6eTcArX2QE3yVAO7lBA8TwMNIw6UgeJI46My+rWCjUQL0LVIUBd8lgEO1UfBZAvg8oXamCuWNRu64nRNMmUo/wReSXLXayoDoKc9miMvqW/ZNG2VRNLla2MYudrCFTvX2intlnl/gGu/zDraGYzyLZ/UTjrD6G2AHpxgnAKc9xgmWo9BNPM4BnPYDNiLg24zQ2oNpyFdZvRKZLlGhnvvKPzXXti/Yy7hEo3+iD9EHtgdqxQnwAAAAAElFTkSuQmCC" />
                                        </defs>
                                    </svg>
                                </span>
                            </a> --}}

                            <button class="header-menu-btn" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->

        @yield('content')

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">
            <!--== Start Footer Main ==-->
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="widget-item">
                                <div class="widget-about">
                                    <a class="widget-logo" href="{{ url('') }}">
                                        <img src="{{asset('assets/images/logo.png')}}" width="95" height="68" alt="Logo">
                                    </a>
                                    <p class="desc">From the boldest to the softest and most subtle, we have something for every personality and every occasion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 mt-md-0 mt-9">
                            <div class="widget-item">
                                <h4 class="widget-title">Information</h4>
                                <ul class="widget-nav">
                                    {{-- <li><a href="{{ url('blog') }}">Blog</a></li> --}}
                                    <li><a href="{{ url('about-us') }}">About us</a></li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                    <li><a href="{{ url('privacy-policy') }}">Privacy policy</a></li>
                                    {{-- <li><a href="{{ url('account-login') }}">Login</a></li> --}}
                                    <li><a href="{{ url('shop') }}">Shop</a></li>
                                    {{-- <li><a href="{{ url('my-account') }}">My Account</a></li> --}}
                                    {{-- <li><a href="{{ url('faq') }}">FAQs</a></li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-lg-0 mt-6">
                            <div class="widget-item">
                                <h4 class="widget-title">Social Info</h4>
                                <div class="widget-social">
                                    {{-- <a href="https://twitter.com/" target="_blank" rel="noopener"><i
                                            class="fa fa-twitter"></i></a> --}}
                                    <a href="https://facebook.com/people/Fakhaama-store/100089897808895/" target="_blank" rel="noopener"><i
                                            class="fa fa-facebook"></i></a>
                                    {{-- <a href="https://www.pinterest.com/" target="_blank" rel="noopener"><i
                                            class="fa fa-pinterest-p"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Footer Main ==-->

            <!--== Start Footer Bottom ==-->
            <div class="footer-bottom">
                <div class="container pt-0 pb-0">
                    <div class="footer-bottom-content">
                        <p class="copyright">© 2023 FakhaamaStore. Made with <i class="fa fa-heart"></i> by <a
                                target="_blank" href="https://abdelazizbardich.com">Abdelaziz Bardich.</a></p>
                    </div>
                </div>
            </div>
            <!--== End Footer Bottom ==-->
        </footer>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

        <!--== Start Product Quick Wishlist Modal ==-->
        {{-- <aside class="product-action-modal modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="modal-action-messages">
                                <i class="fa fa-check-square-o"></i> Added to wishlist successfully!
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/shop/modal1.webp') }}" alt="Organic Food Juice"
                                        width="466" height="320">
                                </div>
                                <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside> --}}
        <!--== End Product Quick Wishlist Modal ==-->

        <!--== Start Product Quick Add Cart Modal ==-->
        {{-- <aside class="product-action-modal modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-action-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <i class="fa fa-times"></i>
                            </button>
                            <div class="modal-action-messages">
                                <i class="fa fa-check-square-o"></i> Added to cart successfully!
                            </div>
                            <div class="modal-action-product">
                                <div class="thumb">
                                    <img src="{{asset('assets/images/shop/modal1.webp')}}" alt="Organic Food Juice" width="466"
                                        height="320">
                                </div>
                                <h4 class="product-name"><a href="product-details.html">Readable content DX22</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside> --}}
        <!--== End Product Quick Add Cart Modal ==-->

        <!--== Start Aside Search Form ==-->
        {{-- <aside class="aside-search-box-wrapper offcanvas offcanvas-top" tabindex="-1" id="AsideOffcanvasSearch"
            aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <h5 class="d-none" id="offcanvasTopLabel">Aside Search</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                        class="fa fa-close"></i></button>
            </div>
            <div class="offcanvas-body">
                <div class="container pt--0 pb--0">
                    <div class="search-box-form-wrap">
                        <div class="search-note">
                            <p>Start typing and press Enter to search</p>
                        </div>
                        <form action="#" method="post">
                            <div class="aside-search-form position-relative">
                                <label for="SearchInput" class="visually-hidden">Search</label>
                                <input id="SearchInput" type="search" class="form-control"
                                    placeholder="Search entire store…">
                                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </aside> --}}
        <!--== End Aside Search Form ==-->

        <!--== Start Product Quick View Modal ==-->
        {{-- <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="product-quick-view-content">
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </button>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <!--== Start Product Thumbnail Area ==-->
                                        <div class="product-single-thumb">
                                            <img src="{{asset('assets/images/shop/quick-view1.webp')}}" width="544"
                                                height="560" alt="Image-HasTech">
                                        </div>
                                        <!--== End Product Thumbnail Area ==-->
                                    </div>
                                    <div class="col-lg-6">
                                        <!--== Start Product Info Area ==-->
                                        <div class="product-details-content">
                                            <h5 class="product-details-collection">Premioum collection</h5>
                                            <h3 class="product-details-title">Offbline Instant Age Rewind Eraser.</h3>
                                            <div class="product-details-review mb-5">
                                                <div class="product-review-icon">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                                <button type="button" class="product-review-show">150
                                                    reviews</button>
                                            </div>
                                            <p class="mb-6">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Delectus, repellendus. Nam voluptate illo ut quia non sapiente provident
                                                alias quos laborum incidunt, earum accusamus, natus. Vero pariatur ut
                                                veniam sequi amet consectetur.</p>
                                            <div class="product-details-pro-qty">
                                                <div class="pro-qty">
                                                    <input type="text" title="Quantity" value="01">
                                                </div>
                                            </div>
                                            <div class="product-details-action">
                                                <h4 class="price">$254.22</h4>
                                                <div class="product-details-cart-wishlist">
                                                    <button type="button" class="btn" data-bs-toggle="modal"
                                                        data-bs-target="#action-CartAddModal">Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Product Info Area ==-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside> --}}
        <!--== End Product Quick View Modal ==-->

        <!--== Start Aside Cart ==-->
        {{-- <aside class="aside-cart-wrapper offcanvas offcanvas-end" tabindex="-1" id="AsideOffcanvasCart"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h1 class="d-none" id="offcanvasRightLabel">Shopping Cart</h1>
                <button class="btn-aside-cart-close" data-bs-dismiss="offcanvas" aria-label="Close">Shopping Cart <i
                        class="fa fa-chevron-right"></i></button>
            </div>
            <div class="offcanvas-body">
                <ul class="aside-cart-product-list">
                    <li class="aside-product-list-item">
                        <a href="#/" class="remove">×</a>
                        <a href="product-details.html">
                            <img src="{{ asset('assets/images/shop/cart1.webp') }}" width="68" height="84"
                                alt="Image">
                            <span class="product-title">Leather Mens Slipper</span>
                        </a>
                        <span class="product-price">1 × £69.99</span>
                    </li>
                    <li class="aside-product-list-item">
                        <a href="#/" class="remove">×</a>
                        <a href="product-details.html">
                            <img src="{{ asset('assets/images/shop/cart2.webp') }}" width="68" height="84"
                                alt="Image">
                            <span class="product-title">Quickiin Mens shoes</span>
                        </a>
                        <span class="product-price">1 × £20.00</span>
                    </li>
                </ul>
                <p class="cart-total"><span>Subtotal:</span><span class="amount">£89.99</span></p>
                <a class="btn-total" href="product-cart.html">View cart</a>
                <a class="btn-total" href="product-checkout.html">Checkout</a>
            </div>
        </aside> --}}
        <!--== End Aside Cart ==-->

        <!--== Start Aside Menu ==-->
        <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h1 class="d-none" id="offcanvasExampleLabel">Aside Menu</h1>
                <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i
                        class="fa fa-chevron-left"></i></button>
            </div>
            <div class="offcanvas-body">
                <div id="offcanvasNav" class="offcanvas-menu-nav">
                    <ul>
                        <li><a href="{{ url('') }}">home</a></li>
                        <li><a href="{{ url('about-us') }}">about</a></li>
                        <li><a href="{{ url('shop') }}">shop</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </aside>
        <!--== End Aside Menu ==-->

    </div>
    <!--== Wrapper End ==-->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>

    <!-- Custom Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
