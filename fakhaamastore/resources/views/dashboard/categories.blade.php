@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>الفئات</h4>
    </div>
    <div class="col-auto">
        <a href="{{ url("admin/categories/add") }}" class="btn btn-primary">إضافة فئة</a>
    </div>
</div>
<table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col">الصورة</th>
        <th scope="col">الاسم</th>
        <th scope="col">عدد المنتجات</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td width="70"><img src="{{ asset('storage/'.$category->photo) }}" width="70" class="p-1 border bg-light rounded" alt=""></td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->products->count() }}</td>
                <td class="text-end">
                    <a href="{{ url("admin/categories/edit/".$category->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ url("admin/categories/delete/".$category->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
