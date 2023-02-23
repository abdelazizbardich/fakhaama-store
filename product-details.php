<?php include_once "./header.php"; ?>
<main class="main-content">

<?php  $product = null;
foreach (json_decode(file_get_contents(__DIR__.'/products.json')) as $p) {
    if($p->id == $_GET['id']){
        $product = $p;
    }
}
?>
    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9 bg-light" data-bg-color="#FFF3DA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-start text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-end" dir="ltr">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.php">الرئيسية</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">معلومات المنتج</li>
                        </ol>
                        <h2 class="page-header-title text-center text-md-end">معلومات المنتج</h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <h5 class="showing-pagination-results mt-5 mt-md-9 text-center text-md-start">عرض المنتج
                    </h5>
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
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/images/products/<?= $product->photo ?>" width="570" height="693" alt="Image">
                                </div>
                                <?php if($product->gallery && count($product->gallery)>0){
                                    foreach($product->gallery as $gallery){?>
                                        <div class="carousel-item ">
                                            <img src="./assets/images/products/<?=$gallery?>" width="570" height="693" alt="Image">
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">السابق</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">التالي</span>
                            </button>
                        </div>
                        <span class="flag-new"><?= $product->category ?></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <div class="product-details-review">
                            <!-- <div class="product-review-icon m-0">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div> -->
                            <!-- <button type="button" class="product-review-show me-2">7 التقيمات</button> -->
                        </div>
                        <h3 class="h2 fw-bold"><?= $product->title ?></h3>
                        <div class="product-details-action mt-3 mb-3">
                            <span class="me-3 text-danger fw-bold display-4"><?= $product->price ?> دم</span>
                        </div>
                        <div class="border fw-bold bg-danger p-3 text-white mb-3">
                            الدفع عند الإستلام
                        </div>
                        <div class="product-details-shipping-cost">
                            <p class="mb-5">
                            <?= $product->s_desc ?>
                            </p></div>
                        <div class="row m-0 mt-1">
                            <div class="col-12">
                                <a href="https://api.whatsapp.com/send?phone=212721036477&text=مرحبا%20👋👋👋،%20أريد%20شراء%20هذا%20المنتج%3A%20<?= $product->title ?>" target="_blank" class="btn d-block w-100 shadow bg-success border-success d-flex align-items-center justify-content-center p-0">اطلب عبر<i class="me-1 fs-3 fa fa-whatsapp"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="nav product-details-nav" id="product-details-nav-tab" role="tablist">
                        <button class="btn btn-primary ms-5" id="specification-tab" data-bs-toggle="tab"
                            data-bs-target="#specification" type="button" role="tab"
                            aria-controls="specification" aria-selected="true">مواصفات</button>
                        <!-- <button class="btn btn-primary active" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="true">التقيمات</button> -->
                    </div>
                    <div class="tab-content" id="product-details-nav-tabContent">
                        <div class="tab-pane fade show active" id="specification" role="tabpanel"
                            aria-labelledby="specification-tab">
                            <ul class="product-details-info-wrap">
                                <li><span class="fw-bold">الوزن:</span>
                                    <p><?= $product->weight ?> g</p>
                                </li>
                                <li><span class="fw-bold">الأبعاد:</span>
                                    <p><?= $product->dimensions ?></p>
                                </li>
                                <li><span class="fw-bold">المكونات:</span>
                                    <ul class="pe-5 me-5">
                                    <?= $product->content ?>
                                    </ul>
                                </li>
                                <li>
                                    <span class="fw-bold">معلومات اخرى:</span>
                                    <span>
                                        <!--  -->
                                    </span>
                                </li>
                            </ul>
                            <h2 class="fw-bold text-primary mb-3">الوصف المكامل:</h2>
                            <?= $product->desc ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container section-space">
        <!--== Start Product Category Item ==-->
        <a href="./product-details.php" class="product-banner-item">
            <img src="./assets/images/shop/banner/7.webp" width="1170" height="240" alt="Image-HasTech">
        </a>
        <!--== End Product Category Item ==-->
    </div>

</main>
<?php include_once "./footer.php"; ?>