@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>أضف منتج</h4>
    </div>
    <div class="col-12">
        <form action="{{ url("admin/products/edit/".$product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="name">الاسم:</label>
                        <input type="text" id="name" value="{{ $product->name }}" name="name" placeholder="Product name (max 70)..." max="70" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="cagtegory">الفئة:</label>
                        <select value="{{ $product->category->id }}" name="category" id="category" class="form-control form-select">
                            <option selected disabled>الفئة...</option>
                            @foreach ($categories as $category)
                                <option @if($product->category->id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="price">السعر:</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" value="{{ $product->old_price }}" name="old_price" placeholder="السعر القديم..." class="form-control">
                            </div>
                            <div class="col-6">
                                <input type="text" id="price" value="{{ $product->actual_price }}" name="actual_price" placeholder="السعر الفعلي..." class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group mb-3">
                        <label for="weight">الوزن (جرام):</label>
                        <input type="number" value="{{ $product->weight }}" placeholder="الوزن (جرام)..." name="weight" id="weight" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="height">الأبعاد:(cm)</label>
                        <div class="row">
                            <div class="col-4">
                                <input type="text"  value="{{$product->dimentions['height']}}" name="height" id="height" class="form-control" placeholder="الإرتفاع...">
                            </div>
                            <div class="col-4">
                                <input type="text"  value="{{$product->dimentions['width']}}" name="width" class="form-control" placeholder="العرض...">
                            </div>
                            <div class="col-4">
                                <input type="text"  value="{{$product->dimentions['depth']}}" name="depth" class="form-control" placeholder="العمق...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="#">المكونات:</label>
                        <input type="text" name="materials" value="{{ join(', ',$product->materials) }}" class="form-control" placeholder="المكون 1 ، المكون 2 ، المكون 3...">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group mb-3">
                        <label for="#">المخزون:</label>
                        <input type="number" name="in_stock" class="form-control" value="{{ $product->in_stock }}" min="0">
                    </div>
                </div>
                <div class="col-3">
                    <label for=""></label>
                    <div class="form-check mb-3" style="padding-right: 1.5em;">
                        <label for="home_slider" class="form-check-label">إظهار في شريط التمرير الصفحة الرئيسية</label>
                        <input style="float: right; margin-right: -1.5em;" type="checkbox" value="{{ $product->home_slider }}" @if($product->home_slider) checked @endif id="home_slider" name="home_slider" class="form-check-input">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="photo">الصورة:</label>
                        <input type="file" name="photo" id="photo" class="form-control" placeholder="">
                        <img src="{{ asset('storage/'.$product->photo) }}" width="70" class="p-1 border rounded bg-white shadow-sm m-1" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="slider_photo">صورة المعرض:</label>
                        <input type="file" name="slider_photo" id="slider_photo" class="form-control" placeholder="">
                        <img src="{{ asset('storage/'.$product->slider_photo) }}" width="70" class="p-1 border rounded bg-white shadow-sm m-1" alt="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="gallery">صور إضافية:</label>
                        <input type="file" id="gallery" name="gallery[]" multiple class="form-control">
                        @foreach ($product->gallery as $gallery)
                            <img src="{{ asset('storage/'.$gallery) }}" width="70" class="p-1 border rounded bg-white shadow-sm m-1" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="short_description">الوصف المختصر:</label>
                        <textarea name="short_description" value="{{ $product->short_description }}" id="short_description" placeholder="الوصف المختصر..." type="text" class="form-control" rows="15">{{ $product->short_description }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="description">الوصف:</label>
                        <textarea id="description" vlue="{{ $product->description }}" name="description" placeholder="الوصف..." type="text" class="form-control" rows="20">{{ $product->description }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="other_infos">معلومات إضافية:</label>
                        <textarea id="other_infos" name="other_infos" value="{{ $product->other_infos }}" placeholder="معلومات إضافية..." type="text" class="form-control" rows="10">{{ $product->other_infos }}</textarea>
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
