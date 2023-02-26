<?php include_once "./header.php"; ?>
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
                        <form method="POST">
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
                                        <button class="btn btn-sm" name="contact" type="submit">إرسال</button>
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
<?php include_once "./footer.php"; ?>