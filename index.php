<?php include_once "./header.php"; ?>
<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="hero-two-slider-area position-relative">
        <div class="swiper hero-two-slider-container">
            <div class="swiper-wrapper">
            <?php 
                $slider = array_filter(json_decode(file_get_contents(__DIR__.'/products.json')),function($p){return $p->offer; });
                foreach ($slider as $product){?>
                    <div class="swiper-slide hero-two-slide-item">
                        <div class="container">
                            <div class="row align-items-center position-relative">
                                <div class="col-12 col-md-6">
                                    <div class="hero-two-slide-thumb">
                                        <img src="./assets/images/products/<?= $product->s_photo ?>" width="690"
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
                                        <?= $product->title ?>
                                        </h2>
                                        <p class="hero-two-slide-desc">
                                        <?= $product->s_desc ?>
                                        </p>
                                        <div class="hero-two-slide-meta">
                                            <a class="btn btn-border-primary" href="product-details.php?id=<?= $product->id ?>">اطلب الان</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!--== Add Pagination ==-->
            <div class="hero-two-slider-pagination"></div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <section class="section-space py-5 my-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- @foreach ($categories as $category) -->
                <div class="col-4 mb-3 col-md-4">
                    <!--== Start Product Category Item ==-->
                    <a href="shop.php?c=women" class="product-banner-item">
                        <img src="./assets/images/categories/for women.jpg" width="370" height="370"
                            alt="Image-HasTech">
                        <span
                            style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);text-transform: uppercase;"
                            class="h1 text-center w-100 d-block text-white fw-bold title">للسيدات</span>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-4 mb-3 col-md-4">
                    <!--== Start Product Category Item ==-->
                    <a href="shop.php?c=kids" class="product-banner-item">
                        <img src="./assets/images/categories/for kids.jpg" width="370" height="370"
                            alt="Image-HasTech">
                        <span
                            style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);text-transform: uppercase;"
                            class="h1 text-center w-100 d-block text-white fw-bold title">للصغار</span>
                    </a>
                    <!--== End Product Category Item ==-->
                </div>
                <div class="col-4 mb-3 col-md-4">
                    <!--== Start Product Category Item ==-->
                    <a href="shop.php?c=man" class="product-banner-item">
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
    <section class="section-space pt-0 mt-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2 class="title">منتجات جديدة</h2>
                        <p class="m-0">أطلق العنان للكفاءة مع أحدث منتجاتنا المبتكرة</p>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="shop.php?s=new" class="btn btn-primary"><span
                            class="d-none d-md-inline-block">عرض</span> المزيد <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                <?php 
                    $products = json_decode(file_get_contents(__DIR__.'/products.json'));
                    foreach ($products as $product){?>
                        <div class="col-12 col-lg-4 mb-4 mb-sm-9 col-mb-4 col-sm-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-st2-item <?= ($product->offer?'bg-dark p-2':'') ?>">
                                <div class="product-thumb">
                                    <a class="d-block" href="product-details.php?id=<?= $product->id ?>">
                                        <img src="./assets/images/products/<?= $product->photo ?>" width="370"
                                            height="450" alt="Image-HasTech">
                                    </a>
                                    <span class="flag-new"><?= $product->category ?></span>
                                </div>
                                <div class="product-info">
                                    <h4 class="title fw-bold"><a href="product-details.php?id=<?= $product->id ?>"><?= $product->title ?></a>
                                    </h4>
                                    <p class="small"><?= $product->s_desc ?></p>
                                    <div class="">
                                        <span class="d-inline-block h2 mb-3 fw-bold  text-danger"><?= $product->price ?> دم</span>
                                    </div>
                                    <div class="product-action">
                                        <a href="product-details.php?id=<?= $product->id ?>" type="button"
                                            class="product-action-btn action-btn-cart">
                                            <span>أطلب الآن</span>
                                        </a>
                                    </div>
                                    <div class="product-action-bottom">
                                        <a href="product-details.php?id=<?= $product->id ?>" type="button"
                                            class="product-action-btn action-btn-cart">
                                            <span>أطلب الآن</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--== End prPduct Item ==-->
                        </div>
                    <?php } 
                ?>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <!-- <section class="section-space pt-0">
        <div class="container">
            <a href="shop.php" class="product-banner-item">
                <img src="assets/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
            </a>
        </div>
    </section> -->
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <!-- <section class="section-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-title">
                        <h2 class="title">المنتجات الأكثر مبيعًا</h2>
                        <p class="m-0">احصل على أفضل منتجاتنا الأكثر مبيعًا</p>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="shop.php?s=top-sale" class="btn btn-primary"><span
                            class="d-none d-md-inline-block">عرض</span> المزيد <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <div class="row mb-n4 mb-sm-n10 g-3 g-sm-6">
                <div class="col-12 col-lg-4 mb-4 mb-sm-9 col-mb-4 col-sm-6">
                    <div class="product-item product-st2-item">
                        <div class="product-thumb">
                            <a class="d-block" href="product-details.php?id=<?= $product->id ?>">
                                <img src="./assets/images/products/fakhama-pack.jpg" width="370"
                                    height="450" alt="Image-HasTech">
                            </a>
                            <span class="flag-new">للسيدات</span>
                        </div>
                        <div class="product-info">
                            <h4 class="title fw-bold"><a href="product-details.php?id=<?= $product->id ?>">مجموعة عطور الفخامة</a>
                            </h4>
                            <p class="small">
                                عطور فاخرة مناسبة للأمسيات الخاصة والمناسبات الراقية. تمنح هذه العطور اللإنطباع الأول المميز واللافت للنظر، وتستمر بإثارة الإعجاب لمن حولك طوال الليوم.
                            </p>
                            <div class="">
                                <span class="d-inline-block h2 mb-3 fw-bold  text-danger">299 دم</span>
                            </div>
                            <div class="product-action">
                                <a href="product-details.php?id=<?= $product->id ?>" type="button"
                                    class="product-action-btn action-btn-cart">
                                    <span>أطلب الآن</span>
                                </a>
                            </div>
                            <div class="product-action-bottom">
                                <a href="product-details.php?id=<?= $product->id ?>" type="button"
                                    class="product-action-btn action-btn-cart">
                                    <span>أطلب الآن</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--== End Product Area Wrapper ==-->

</main>
<?php include_once "./footer.php"; ?>