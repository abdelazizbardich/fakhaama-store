@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>الطلبات</h4>
    </div>
    {{-- <div class="col-auto"> --}}
        {{-- <a href="{{ url("admin/categories/add") }}" class="btn btn-primary">إضافة فئة</a> --}}
    {{-- </div> --}}
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">الرمز</th>
        <th scope="col">المنتج</th>
        <th scope="col">الزبون</th>
        <th scope="col">العنوان</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->code }}</td>
                <td>
                    @foreach ($order->products as $product)
                        <span class="d-block border rounded p-1 bg-light">
                            <span  class="d-block fw-bold">{{ $product->name }}</span>
                            <span class="fw-bold text-danger">{{ $product->actual_price }} {{ config('app.currency_symbol') }}</span>
                            {{-- <span class="fw-bold text-info">{{ $product->old_price }}</span> --}}
                        </span>
                    @endforeach
                </td>
                <td>
                    <span>
                        <span class="fw-bold d-block">{{ $order->user->first_name }} {{ $order->user->last_name }}</span>
                        <span dir="ltr" class="mx-1">
                            {{ $order->user->phone }}
                        </span>
                        <span dir="ltr" class="mx-1">
                            {{ $order->user->email }}
                        </span>
                    </span>
                </td>
                <td>
                    <span class="d-block">
                        Country : {{$order->address->country}}<br>
                        City: {{$order->address->city}}<br>
                        Region: {{$order->address->region}}<br>
                        Postal code: {{$order->address->postal_code}}<br>
                        Address: {{$order->address->address}}<br>
                    </span>
                </td>
                <td class="text-end">
                    <a href="{{ url("admin/orders/edit/".$order->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ url("admin/orders/delete/".$order->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
