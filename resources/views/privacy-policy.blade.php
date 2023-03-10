@extends('layouts.public')
@section('content')
    <main class="main-content">

        <!--== Start Page Header Area Wrapper ==-->
        <section class="page-header-area pt-10 pb-9">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            سياسة الخصوصية لـ {{ config('app.domain') }}
                        </h1>
                        <span class="d-block mb-5">
                            آخر تحديث: 10/02/2023
                        </span>
                        <p>
                            في {{ config('app.name') }} ، نحن ملتزمون بحماية خصوصية عملائنا. هذه الخصوصية
                            تحدد السياسة ممارساتنا لجمع المعلومات الشخصية واستخدامها والكشف عنها من خلال
                            موقعنا الإلكتروني {{ config('app.name') }}. باستخدام موقعنا ، فإنك توافق على شروط هذه الخصوصية
                            سياسة.
                        </p>
                        <h5>
                            جمع المعلومات الشخصية
                        </h5>
                        <p>
                            قد نقوم بجمع معلومات شخصية عند زيارة موقعنا على الإنترنت ، أو تقديم طلب ، أو الاشتراك في موقعنا
                            النشرة الإخبارية ، أو المشاركة في العروض الترويجية أو الاستطلاعات. قد تتضمن المعلومات الشخصية
                            اسمك ،
                            عنوان البريد الإلكتروني والعنوان البريدي ورقم الهاتف ومعلومات الدفع وغيرها من المعلومات التي
                            يمكن
                            تستخدم للتعرف عليك.
                        </p>
                        <h5>
                            استخدام المعلومات الشخصية
                        </h5>
                        <p>
                            نستخدم المعلومات الشخصية لتزويدك بالخدمات التي تطلبها ومعالجتها
                            المعاملات ، للتواصل معك ، لتحسين موقعنا ومنتجاتنا ، ولتقديم لك
                            الترقيات والاستطلاعات. يجوز لنا أيضًا استخدام المعلومات الشخصية لأغراض داخلية ، مثل
                            المراجعة وتحليل البيانات.
                        </p>
                        <h5>
                            إفشاء المعلومات الشخصية
                        </h5>
                        <p>
                            نحن لا نبيع أو نؤجر أو نتاجر بمعلوماتك الشخصية لأطراف ثالثة لتسويقها
                            المقاصد. قد نشارك معلوماتك الشخصية مع مزودي الخدمة الخارجيين الذين يساعدون
                            لنا من خلال موقعنا على الويب ومعالجة الدفع والخدمات الأخرى. يخضع مقدمو الخدمة هؤلاء
                            لاتفاقيات السرية ويسمح فقط باستخدام معلوماتك الشخصية لـ
                            الغرض من تقديم الخدمات لنا.
                        </p>
                        <p>
                            قد نكشف أيضًا عن معلوماتك الشخصية استجابةً لإجراءات قانونية ، مثل المحكمة
                            أمر أو أمر استدعاء ، أو الامتثال للقوانين المعمول بها.
                        </p>
                        <h5>
                            أمن المعلومات الشخصية
                        </h5>
                        <p>
                            نحن نستخدم تدابير معقولة لحماية المعلومات الشخصية من الوصول غير المصرح به أو الاستخدام أو
                            إفشاء. ومع ذلك ، لا توجد إجراءات أمنية يمكن أن تضمن الأمن الكامل للشخصية
                            المعلومات ، ولا يمكننا أن نكون مسؤولين عن الوصول غير المصرح به إلى معلوماتك الشخصية.
                        </p>
                        <h5>
                            الوصول إلى المعلومات الشخصية وتحديثها
                        </h5>
                        <p>يمكنك الوصول إلى معلوماتك الشخصية وتحديثها عن طريق تسجيل الدخول إلى حسابك على موقعنا.
                            إذا كنت بحاجة إلى مساعدة في الوصول إلى معلوماتك الشخصية أو تحديثها ، فيرجى الاتصال بنا
                            في <a href="mailto:{{ config('app.contact_email') }}"
                                class="text-primary">{{ config('app.contact_email') }}</a>.
                        </p>
                        <h5>
                            التغييرات في سياسة الخصوصية
                        </h5>
                        <p>
                            قد نقوم بتحديث سياسة الخصوصية هذه من وقت لآخر لتعكس التغييرات في ممارساتنا أو
                            القوانين المعمول بها. سيتم نشر أحدث إصدار من سياسة الخصوصية على موقعنا الإلكتروني وأنت
                            يجب مراجعة سياسة الخصوصية بانتظام للتأكد من أنك على علم بما لدينا
                            الممارسات.
                        </p>
                        <h5>
                            اتصل بنا
                        </h5>
                        <p>
                            إذا كانت لديك أي أسئلة أو مخاوف بشأن سياسة الخصوصية أو ممارساتنا ، فيرجى الاتصال
                            لنا في <a href="mailto:{{ config('app.contact_email') }}"
                                class="text-primary">{{ config('app.contact_email') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
