@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>المراجعات</h4>
    </div>
    {{-- <div class="col-auto">
        <a href="{{ url("admin/categories/add") }}" class="btn btn-primary">إضافة فئة</a>
    </div> --}}
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">اسم</th>
        <th scope="col">بريد إلكتروني</th>
        <th scope="col">تعليق</th>
        <th scope="col">تقييم</th>
        <th scope="col">المنتج</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($reviews as $review)
            <tr>
                <td>{{ $review->name }}</td>
                <td dir="ltr"><a href="mailto:{{ $review->email }}">{{ $review->email }}</a></td>
                <td>{{ $review->feedback }}</td>
                <td>
                    <span class="d-flex h-100">
                        <i class="fa fa-star{{ ($review->rating >= 1)?'':'-o' }}"></i>
                        <i class="fa fa-star{{ ($review->rating >= 2)?'':'-o' }}"></i>
                        <i class="fa fa-star{{ ($review->rating >= 3)?'':'-o' }}"></i>
                        <i class="fa fa-star{{ ($review->rating >= 4)?'':'-o' }}"></i>
                        <i class="fa fa-star{{ ($review->rating >= 5)?'':'-o' }}"></i>
                    </span>
                </td>
                <td><a href="#">{{ $review->product->name }}</a></td>
                <td class="text-end">
                    <a href="{{ url("admin/reviews/edit/".$review->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ url("admin/reviews/delete/".$review->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
