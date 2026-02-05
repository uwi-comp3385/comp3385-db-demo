@extends('layouts.app')

@section('content')
    <h2>Add New Product</h2>

    <form action="{{ url('/products') }}" method="post">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group mb-3">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="brand">Brand</label>
            <input type="text" name="brand" id="brand" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="model_number">Model Number</label>
            <input type="text" name="model_number" id="model_number" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="name">SKU</label>
            <input type="text" name="sku" id="sku" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="featured">
                <input type="checkbox" name="featured" id="featured" value="1">
                Featured?
            </label>
        </div>
        <div class="form-group mb-3">
            <label for="stock">Stock</label>
            <input type="number" min="0" step="1" name="stock" id="stock" class="form-control">
        </div>

        <button class="btn btn-primary">Add Product</button>
    </form>
@endsection
