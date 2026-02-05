@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-5">
        <h2>Products</h2>
        <a href="{{ url('/products/create') }}" class="btn btn-primary">Add Product</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif

    <table class="table table-responsive table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Stock</th>
                <th>featured</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->featured }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
