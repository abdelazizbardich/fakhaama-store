<?php include_once "./header.php"; ?>
<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.php">الرئيسية</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">منتجات</li>
                        </ol>
                        <h2 class="page-header-title">جميع المنتجات</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-start">عرض
                        50 نتائج من 16</h5>
                </div>
            </div>
        </div>
    </section>
    <section class="section-space">
        <div class="container">
            <div class="row justify-content-between flex-xl-row-reverse">
                <div class="col-12">
                    <div class="row g-3 g-sm-6">
                    <?php 
                    $products = json_decode(file_get_contents(__DIR__.'/products.json'));
                    foreach ($products as $product){?>
                        <div class="col-12 col-lg-4 mb-4 mb-sm-9 col-mb-4 col-sm-6">
                            <!--== Start Product Item ==-->
                            <div class="product-item product-st2-item <?= ($product->offer?'bg-dark p-2':'') ?>">
                                <div class="product-thumb">
                                    <a class="d-block" href="product-details.php?id=1">
                                        <img src="./assets/images/products/<?= $product->photo ?>" width="370"
                                            height="450" alt="Image-HasTech">
                                    </a>
                                    <span class="flag-new"><?= $product->category ?></span>
                                </div>
                                <div class="product-info">
                                    <h4 class="title fw-bold"><a href="product-details.php?id=1"><?= $product->title ?></a>
                                    </h4>
                                    <p class="small"><?= $product->s_desc ?></p>
                                    <div class="">
                                        <span class="d-inline-block h2 mb-3 fw-bold  text-danger"><?= $product->price ?> دم</span>
                                    </div>
                                    <div class="product-action">
                                        <a href="product-details.php?id=1" type="button"
                                            class="product-action-btn action-btn-cart">
                                            <span>أطلب الآن</span>
                                        </a>
                                    </div>
                                    <div class="product-action-bottom">
                                        <a href="product-details.php?id=1" type="button"
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
            </div>
        </div>
    </section>
    <section class="section-space pt-0">
        <div class="container">
            <a class="product-banner-item">
                <img src="assets/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
            </a>
        </div>
    </section>
</main>
<?php include_once "./footer.php"; ?>