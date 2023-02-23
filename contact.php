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

            <!--== Start Contact Area Wrapper ==-->
            <section class="contact-area mb-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-6 col-lg-6">
                            <div class="section-title position-relative">
                                <h2 class="title">ابقى على تواصل</h2>
                                <p class="m-0" style="max-width: unset;">
                                    شكرا لكم لزيارة موقعنا على شبكة الإنترنت. كنا نحب أن نسمع منك. سواء كان لديك سؤال أو
                                    اقتراح أو أردت فقط إلقاء التحية ، لا تتردد في التواصل معنا. املأ النموذج أدناه أو
                                    أرسل إلينا بريدًا إلكترونيًا على <a
                                        href="mailto:constact@fakhamaa.store }}">constact@fakhamaa.store
                                        }}</a>، وسنعاود الاتصال بك في أقرب وقت ممكن. ونحن نتطلع إلى التواصل مع لكم!
                                </p>
                                <div class="line-left-style mt-4 mb-1"></div>
                            </div>
                            <!--== Start Contact Form ==-->
                            <div class="contact-form">
                                <form action="./php/contact.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="first_name"
                                                    placeholder="الاسم الشخصي">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="last_name"
                                                    placeholder="اللقب">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" type="email" name="email"
                                                    placeholder="عنوان البريد الإلكتروني">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message"
                                                    placeholder="الرسالة"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-0">
                                                <button class="btn btn-sm" type="submit">إرسال</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--== End Contact Form ==-->

                            <!--== Message Notification ==-->
                            <div class="form-message"></div>
                        </div>
                    </div>
                </div>
                <div class="contact-left-img d-none d-md-block">
                    <img src="./assets/images/photos/contact.webp" alt="" class="w-100 img img-responsive">
                </div>
            </section>
            <!--== End Contact Area Wrapper ==-->
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