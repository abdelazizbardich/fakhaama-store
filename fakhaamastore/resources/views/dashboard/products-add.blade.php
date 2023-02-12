@extends('layouts.admin')
@section('content')
<div class="row mb-3">
    <div class="col">
        <h4>Add Products</h4>
    </div>
    <div class="col-12">
        <form action="{{ url("admin/products/add") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Product name (max 70)..." max="70" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="cagtegory">Category:</label>
                        <select name="category" id="category" class="form-control form-select">
                            <option selected disabled>Category...</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="price">Price:</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="old_price" placeholder="Old price..." class="form-control">
                            </div>
                            <div class="col-6">
                                <input type="text" id="price" name="actual_price" placeholder="Actual price..." class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <div class="form-group mb-3">
                        <label for="weight">Weight:</label>
                        <input type="number" placeholder="Weight(g)..." name="weight" id="weight" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="height">Dimensions:</label>
                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="height" id="height" class="form-control" placeholder="height...">
                            </div>
                            <div class="col-4">
                                <input type="text" name="width" class="form-control" placeholder="width...">
                            </div>
                            <div class="col-4">
                                <input type="text" name="depth" class="form-control" placeholder="depth...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="#">Materials:</label>
                        <input type="text" name="materials" class="form-control" placeholder="Plastic,iron,bronz...">
                    </div>
                </div>
                <div class="col-1">
                    <div class="form-group mb-3">
                        <label for="#">Stock:</label>
                        <input type="number" name="in_stock" class="form-control" value="1" min="0">
                    </div>
                </div>
                <div class="col-1">
                    <label for=""></label>
                    <div class="form-check mb-3">
                        <input type="checkbox" id="in_slider" name="in_slider" class="form-check-input">
                        <label for="in_slider" class="form-check-label">Home slider</label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="photo">Photo:</label>
                        <input type="file" name="photo" id="photo" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group mb-3">
                        <label for="gallery">Gallery:</label>
                        <input type="file" id="gallery" name="gallery[]" multiple class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="short_description">Short description:</label>
                        <textarea name="short_description" id="short_description" placeholder="short description..." type="text" class="form-control" rows="15"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group mb-3">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" placeholder="description..." type="text" class="form-control" rows="20"></textarea>
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
