@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>المنتجات</h4>
    </div>
    <div class="col-auto">
        <a href="{{ url("admin/products/add") }}" class="btn btn-primary">أضف منتج</a>
    </div>
</div>
<table class="table ">
    <thead>
      <tr>
        <th scope="col">الصورة</th>
        <th scope="col">الاسم</th>
        <th scope="col">الفئة</th>
        <th scope="col">المخزون</th>
        <th scope="col">المكونات</th>
        <th scope="col">الأبعاد</th>
        <th scope="col">الوزن</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
            <td>
                <img src="{{ asset('storage/'.$product->photo) }}" width="70" height="70" class="p-1 border bg-light rounded mb-1" alt="">
                @if ($product->gallery)
                    <div class="flex flex-nowrap flex-row">
                        @foreach ($product->gallery as $gellery)
                            <img src="{{ asset('storage/'.$gellery) }}" width="30" class="border bg-light rounded" alt="">
                        @endforeach
                    </div>
                @endif
            </td>
            <td>
                <span class="fw-bold ms-3">
                    {{ $product->name }}
                </span>
                <span>
                    <span class="d-inline-block text-nowrap text-danger h5 fw-bold">{{ $product->actual_price }} {{ config("app.currency_symbol") }}</span>
                    (<span class="text-nowrap text-secondary fw-normal small text-decoration-line-through">{{ $product->old_price }} {{ config("app.currency_symbol") }}</span>)
                </span>
                <p class="small m-0">
                    {{ $product->short_description }}
                </p>
            </td>
            <td><a class="fw-bold">{{ $product->category->name }}</a></td>
            <td><span class="fw-bold">{{ $product->in_stock }}</span> وحدة</td>
            <td>{{ implode(', ',$product->materials) }}</td>
            <td>{{ implode(', ',$product->dimentions) }}</td>
            <td>{{ $product->weight }} جرام</td>
            <td class="text-end">
                <a href="{{ url("admin/products/edit/".$product->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                <a href="{{ url("admin/products/delete/".$product->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
