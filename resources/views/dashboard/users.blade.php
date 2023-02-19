@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>المستخدمين</h4>
    </div>
    {{-- <div class="col-auto">
        <a href="{{ url("admin/categories/add") }}" class="btn btn-primary">إضافة فئة</a>
    </div> --}}
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">اسم المستخدم</th>
        <th scope="col">الاسم الأول</th>
        <th scope="col">اسم العائلة</th>
        <th scope="col">بريد إلكتروني</th>
        <th scope="col">هاتف</th>
        <th scope="col">النوع</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td dir="ltr">{{ $user->email }}</td>
                <td dir="ltr">{{ $user->phone }}</td>
                <td>{{ ($user->type == "user")?'مستخدم':'مشرف' }}</td>
                <td class="text-end">
                    <a href="{{ url("admin/users/edit/".$user->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ url("admin/users/delete/".$user->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
