@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>النشرة الإخبارية</h4>
    </div>
    {{-- <div class="col-auto">
        <a href="{{ url("admin/categories/add") }}" class="btn btn-primary">إضافة فئة</a>
    </div> --}}
</div>
<table class="table table-borderless">
    <thead>
      <tr>
        <th scope="col" class="text-end">عنوان البريد الإلكتروني</th>
        <th class="w-auto"></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($newsletters as $newsletter)
            <tr>
                <td dir="ltr">{{ $newsletter->email }}</td>
                <td class="text-end w-auto">
                    <a href="{{ url("admin/newsletters/edit/".$newsletter->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ url("admin/newsletters/delete/".$newsletter->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
