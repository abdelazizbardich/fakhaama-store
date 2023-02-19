<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - صفحة القيادة</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset("dashboard/assets/css/style.css") }}">
        <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
</head>

<body dir="rtl">
    <div class="row m-0">
        <div class="col-12 header shadow bg-white"></div>
        <div class="col-2 bg-white border-top pt-5 p-0 aside">
            <ul class="p-0 m-0">
                <a href="{{ url('admin/') }}" ><li class="p-3 mb-1 d-flex align-items-center "><i class="fa fa-columns"></i> صفحة القيادة</li></a>
                <a href="{{ url('admin/products') }}" ><li class="p-3 mb-1 d-flex align-items-center "><i class="fa fa-archive"></i> المنتجات</li></a>
                <a href="{{ url('admin/categories') }}" ><li class="p-3 mb-1 d-flex align-items-center "><i class="fa fa-sitemap"></i> الفئات</li></a>
                <a href="{{ url('admin/orders') }}" ><li class="p-3 mb-1 d-flex align-items-center "><i class="fa fa-shopping-basket"></i> الطلبات</li></a>
                <a href="{{ url('admin/users') }}" ><li class="p-3 mb-1 d-flex align-items-center "><i class="fa fa-user"></i> المستخدمين</li></a>
                <a href="{{ url('admin/reviews') }}" ><li class="p-3 mb-1 d-flex align-items-center "><i class="fa fa-star"></i> المراجعات</li></a>
                <a href="{{ url('admin/newsletter') }}" ><li class="p-3 mb-1 d-flex align-items-center "><i class="fa fa-newspaper-o"></i> النشرة الإخبارية</li></a>
                <a href="{{ url('admin/logout') }}" ><li class="p-3 mb-1 d-flex align-items-center "><i class="fa fa-sign-out"></i> الخروج</li></a>
            </ul>
        </div>
        <div class="col p-5">
            <div class="bg-white shadow rounded p-3">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready( function () {
            $('table').DataTable();
        });
    </script>
</body>

</html>
