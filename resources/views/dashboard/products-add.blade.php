@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>أضف منتج</h4>
    </div>
    <div class="col-12">
        <form action="{{ url("admin/products/add") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="name">الاسم:</label>
                        <input type="text" id="name" name="name" value="{{old("name")}}" placeholder="Product name (max 70)..." max="70" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="cagtegory">الفئة:</label>
                        <select name="category" id="category" value="{{ old("category") }}" class="form-control form-select">
                            <option selected disabled>الفئة...</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if(old("category") == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="price">السعر:</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" value="{{ old("old_price") }}" name="old_price" placeholder="السعر القديم..." class="form-control">
                            </div>
                            <div class="col-6">
                                <input type="text" value="{{ old("actual_price") }}" id="price" name="actual_price" placeholder="السعر الفعلي..." class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group mb-3">
                        <label for="weight">الوزن (جرام):</label>
                        <input type="number" placeholder="الوزن (جرام)..." value="{{old("weight")}}" name="weight" id="weight" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="height">الأبعاد:</label>
                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="height" value="{{old("height")}}" id="height" class="form-control" placeholder="الإرتفاع...">
                            </div>
                            <div class="col-4">
                                <input type="text" name="width" value="{{old("width")}}" class="form-control" placeholder="العرض...">
                            </div>
                            <div class="col-4">
                                <input type="text" name="depth" value="{{old("depth")}}" class="form-control" placeholder="العمق...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="#">المكونات:</label>
                        <input type="text" name="materials" value="{{old("materials")}}" class="form-control" placeholder="المكون 1 ، المكون 2 ، المكون 3...">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group mb-3">
                        <label for="#">المخزون:</label>
                        <input type="number" value="{{old("in_stock")}}" name="in_stock" class="form-control" value="1" min="0">
                    </div>
                </div>
                <div class="col-3">
                    <label for=""></label>
                    <div class="form-check mb-3" style="padding-right: 1.5em;">
                        <label for="home_slider" class="form-check-label">إظهار في شريط التمرير الصفحة الرئيسية</label>
                        <input style="float: right; margin-right: -1.5em;" type="checkbox" id="home_slider"@if(old("home_slider") == "on") checked @endif name="home_slider" class="form-check-input">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="photo">الصورة:</label>
                        <input type="file" value="{{old("photo")}}" name="photo" id="photo" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="slider_photo">صورة المعرض:</label>
                        <input type="file" value="{{old("slider_photo")}}" name="slider_photo" id="slider_photo" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="gallery">صور إضافية:</label>
                        <input type="file" id="gallery" value="{{old("gallery")}}" name="gallery[]" multiple class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="short_description">الوصف المختصر:</label>
                        <textarea value="{{old("short_description")}}" name="short_description" id="short_description" placeholder="الوصف المختصر..." type="text" class="form-control" rows="15">{{old("short_description")}}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="description">الوصف:</label>
                        <textarea id="description" name="description" value="{{old("description")}}" placeholder="الوصف..." type="text" class="form-control" rows="20">{{old("description")}}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="other_infos">معلومات إضافية:</label>
                        <textarea id="other_infos" name="other_infos" value="{{old("other_infos")}}" placeholder="معلومات إضافية..." type="text" class="form-control" rows="10">{{old("other_infos")}}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group text-end mb-3">
                        <button class="btn btn-primary btn-lg " type="submit">حفظ</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection
