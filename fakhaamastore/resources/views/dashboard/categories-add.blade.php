@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>Add category</h4>
    </div>
    <div class="col-12">
        <form action="{{ url("admin/categories/add") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Category name..." max="70" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="photo">Photo:</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group text-end mb-3">
                        <button class="btn btn-primary btn-lg " type="submit">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
