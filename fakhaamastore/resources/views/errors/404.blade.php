@extends('layouts.public')
@section('content')
    <main class="main-content">
        <!--== Start Faq Area Wrapper ==-->
        <section class="page-not-found-area">
            <div class="container">
                <div class="page-not-found">
                    <img class="mb-5" src="assets/images/photos/page-not-found.webp" width="975" height="538" alt="Image">
                    <h3 class="title text-primary mt-3">Opps! You Lost</h3>
                    <h5 class="back-btn">Go to <a class="text-primary" href="{{url('')}}">Home</a> Page</h5>
                </div>
            </div>
        </section>
        <!--== End Faq Area Wrapper ==-->
    </main>
@endsection
