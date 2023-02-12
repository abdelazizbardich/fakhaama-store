@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>Products</h4>
    </div>
    <div class="col-auto">
        <a href="{{ url("admin/products/add") }}" class="btn btn-primary">Add Product</a>
    </div>
</div>
<table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">Photo</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
            <td width="70"><img src="{{ asset('storage/'.$product->photo) }}" width="70" class="p-1 border bg-light rounded" alt=""></td>
            <td>{{ $product->name }}</td>
            <td width="70">
                <span class="text-nowrap text-warning h5 fw-bold">{{ $product->actual_price }} {{ config("app.currency_symbol") }}</span>
                (<span class="text-nowrap text-secondary fw-normal small text-decoration-line-through">{{ $product->old_price }} {{ config("app.currency_symbol") }}</span>)
            </td>
            <td class="text-end">
                <a href="{{ url("admin/products/edit/".$product->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                <a href="{{ url("admin/products/delete/".$product->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
