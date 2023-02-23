<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fakhaama store - Cosmetic & Beauty store Website</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description"
        content="From the boldest to the softest and most subtle, we have something for every personality and every occasion.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="abdelaziz bardich" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="./assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/plugins/fancybox.min.css">
    <link rel="stylesheet" href="./assets/css/plugins/nice-select.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

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

        .nice-select.wide .list {
            max-height: 300px;
            overflow-y: auto;
        }
    </style>
</head>

<body dir="rtl">

    <!--== Wrapper Start ==-->
    <div class="wrapper">

        <!--== Start Header Wrapper ==-->
        <header class="header-area sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="home.php">
                                <img class="logo-main" src="./assets/images/logo.png" width="95" height="68"
                                    alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col d-lg-block">
                        <div class="header-navigation">
                            <ul class="main-nav justify-content-end">
                                <li><a href="home.php">الرئيسية</a></li>
                                <li><a href="shop.php">المتجر</a></li>
                                <li><a href="contact.php">تواصل معنا</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-action justify-content-end">



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

        <main class="main-content">
            <!--== Start Hero Area Wrapper ==-->
            <section class="hero-two-slider-area position-relative">
                <div class="swiper hero-two-slider-container">
                    <div class="swiper-wrapper">
                        <!-- @foreach ($slider as $sliderElement) -->
                        <div class="swiper-slide hero-two-slide-item">
                            <div class="container">
                                <div class="row align-items-center position-relative">
                                    <div class="col-12 col-md-6">
                                        <div class="hero-two-slide-thumb">
                                            <img src="./assets/images/products/LAILAT KHAMIS SLIDER.png" width="690"
                                                height="690" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="hero-two-slide-content">
                                            <div class="hero-two-slide-text-img">
                                                <img src="./assets/images/slider/text-theme.webp" width="427"
                                                    height="232" alt="Image">
                                            </div>
                                            <h2 class="hero-two-slide-title">
                                                مجموعة عطور الفخامة
                                            </h2>
                                            <p class="hero-two-slide-desc">
                                                عطور فاخرة مناسبة للأمسيات الخاصة والمناسبات الراقية. تمنح هذه العطور اللإنطباع الأول المميز واللافت للنظر، وتستمر بإثارة الإعجاب لمن حولك طوال الليوم.
                                            </p>
                                            <div class="hero-two-slide-meta">
                                                <a class="btn btn-border-primary" href="product-details.php">اطلب
                                                    الان</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- @endforeach -->
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
                        <!-- @foreach ($categories as $category) -->
                        <div class="col-sm-12 mb-3 col-md-4">
                            <!--== Start Product Category Item ==-->
                            <a href="shop.php" class="product-banner-item">
                                <img src="./assets/images/categories/for women.jpg" width="370" height="370"
                                    alt="Image-HasTech">
                                <span
                                    style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);text-transform: uppercase;"
                                    class="h1 text-center w-100 d-block text-white fw-bold title">للسيدات</span>
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                        <div class="col-sm-12 mb-3 col-md-4">
                            <!--== Start Product Category Item ==-->
                            <a href="shop.php" class="product-banner-item">
                                <img src="./assets/images/categories/for kids.jpg" width="370" height="370"
                                    alt="Image-HasTech">
                                <span
                                    style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);text-transform: uppercase;"
                                    class="h1 text-center w-100 d-block text-white fw-bold title">للصغار</span>
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                        <div class="col-sm-12 mb-3 col-md-4">
                            <!--== Start Product Category Item ==-->
                            <a href="shop.php" class="product-banner-item">
                                <img src="./assets/images/categories/for man.jpg" width="370" height="370"
                                    alt="Image-HasTech">
                                <span
                                    style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);text-transform: uppercase;"
                                    class="h1 text-center w-100 d-block text-white fw-bold title">للرجال</span>
                            </a>
                            <!--== End Product Category Item ==-->
                        </div>
                        <!-- @endforeach -->
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
                                <h2 class="title">منتجات جديدة</h2>
                                <p class="m-0">أطلق العنان للكفاءة مع أحدث منتجاتنا المبتكرة</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="shop.php" class="btn btn-primary"><span
                                    class="d-none d-md-inline-block">عرض</span> المزيد <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                        <!-- @foreach ($newProducts as $product) -->
                        <div class="col-12 col-lg-4 mb-4 mb-sm-9 col-mb-4 col-sm-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-st2-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="product-details.php">
                                        <img src="./assets/images/products/fakhama-pack.jpg" width="370"
                                            height="450" alt="Image-HasTech">
                                    </a>
                                    <span class="flag-new">للسيدات</span>
                                </div>
                                <div class="product-info">
                                    <h4 class="title fw-bold"><a href="product-details.php">مجموعة عطور الفخامة</a>
                                    </h4>
                                    <p class="small">
                                        عطور فاخرة مناسبة للأمسيات الخاصة والمناسبات الراقية. تمنح هذه العطور اللإنطباع الأول المميز واللافت للنظر، وتستمر بإثارة الإعجاب لمن حولك طوال الليوم.
                                    </p>
                                    <div class="">
                                        <span class="d-inline-block h2 mb-3 fw-bold  text-danger">299 دم</span>
                                    </div>
                                    <div class="product-action">
                                        <a href="product-details.php" type="button"
                                            class="product-action-btn action-btn-cart">
                                            <span>أطلب الآن</span>
                                        </a>
                                    </div>
                                    <div class="product-action-bottom">
                                        <a href="product-details.php" type="button"
                                            class="product-action-btn action-btn-cart">
                                            <span>أطلب الآن</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--== End prPduct Item ==-->
                        </div>
                        <!-- @endforeach -->
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Product Banner Area Wrapper ==-->
            <section class="section-space pt-0">
                <div class="container">
                    <!--== Start Product Category Item ==-->
                    <a href="shop.php" class="product-banner-item">
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
                                <h2 class="title">المنتجات الأكثر مبيعًا</h2>
                                <p class="m-0">احصل على أفضل منتجاتنا الأكثر مبيعًا</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="shop.php" class="btn btn-primary"><span
                                    class="d-none d-md-inline-block">عرض</span> المزيد <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                        <!-- @foreach ($topSale as $product) -->
                        <div class="col-12 col-lg-4 mb-4 mb-sm-9 col-mb-4 col-sm-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-st2-item">
                                <div class="product-thumb">
                                    <a class="d-block" href="product-details.php">
                                        <img src="./assets/images/products/fakhama-pack.jpg" width="370"
                                            height="450" alt="Image-HasTech">
                                    </a>
                                    <span class="flag-new">للسيدات</span>
                                </div>
                                <div class="product-info">
                                    <h4 class="title fw-bold"><a href="product-details.php">مجموعة عطور الفخامة</a>
                                    </h4>
                                    <p class="small">
                                        عطور فاخرة مناسبة للأمسيات الخاصة والمناسبات الراقية. تمنح هذه العطور اللإنطباع الأول المميز واللافت للنظر، وتستمر بإثارة الإعجاب لمن حولك طوال الليوم.
                                    </p>
                                    <div class="">
                                        <span class="d-inline-block h2 mb-3 fw-bold  text-danger">299 دم</span>
                                    </div>
                                    <div class="product-action">
                                        <a href="product-details.php" type="button"
                                            class="product-action-btn action-btn-cart">
                                            <span>أطلب الآن</span>
                                        </a>
                                    </div>
                                    <div class="product-action-bottom">
                                        <a href="product-details.php" type="button"
                                            class="product-action-btn action-btn-cart">
                                            <span>أطلب الآن</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--== End prPduct Item ==-->
                        </div>
                        <!-- @endforeach -->
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

        </main>

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area">
            <!--== Start Footer Main ==-->
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="widget-item">
                                <div class="widget-about">
                                    <a class="widget-logo" href="home.php">
                                        <img src="./assets/images/logo.png" width="95" height="68" alt="Logo">
                                    </a>
                                    <p class="desc">
                                        من الأجرأ إلى الأكثر نعومة ودقة ، لدينا ما يناسب كل شخصية وكل مناسبة.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 mt-md-0 mt-9">
                            <div class="widget-item">
                                <h4 class="widget-title">معلومات</h4>
                                <ul class="widget-nav">
                                    
                                    <li><a href="contact.php">تواصل معنا</a></li>
                                    <li><a href="privacy-policy.php">سياسة الخصوصية</a></li>
                                    <li><a href="shop.php">المتجر</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mt-lg-0 mt-6">
                            <div class="widget-item">
                                <h4 class="widget-title">علومات التواصل الاجتماعي</h4>
                                <div class="widget-social">
                                    <a href="https://facebook.com/people/Fakhaama-store/100089897808895/"
                                        target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Footer Main ==-->

            <!--== Start Footer Bottom ==-->
            <div class="footer-bottom" dir="ltr">
                <div class="container pt-0 pb-0">
                    <div class="footer-bottom-content">
                        <p class="copyright">2023 © Fakhaama store. Made with <i class="fa fa-heart"></i> by <a
                                target="_blank" href="https://abdelazizbardich.com">Abdelaziz Bardich</a></p>
                    </div>
                </div>
            </div>
            <!--== End Footer Bottom ==-->
        </footer>
        <!--== End Footer Area Wrapper ==-->
        <!--== Start Aside Menu ==-->
        <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h1 class="d-none" id="offcanvasExampleLabel">القائمة الجانبية</h1>
                <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">القائمة <i
                        class="fa fa-chevron-left"></i></button>
            </div>
            <div class="offcanvas-body">
                <div id="offcanvasNav" class="offcanvas-menu-nav">
                    <ul>
                        
                        <li><a href="contact.php">تواصل معنا</a></li>
                        <li><a href="privacy-policy.php">سياسة الخصوصية</a></li>
                        <li><a href="shop.php">المتجر</a></li>
                    </ul>
                </div>
            </div>
        </aside>
        <!--== End Aside Menu ==-->

    </div>
    <!--== Wrapper End ==-->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="./assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="./assets/js/plugins/fancybox.min.js"></script>
    <script src="./assets/js/plugins/jquery.nice-select.min.js"></script>

</body>

</html>