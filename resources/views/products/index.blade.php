@extends('layouts.app')

@section('title', 'Products - MyShop')

@section('content')
<h1 class="mb-4">Our Products</h1>
<div class="row">
    @foreach ($products as $product)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Price: ${{ number_format($product->price, 2) }}</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
