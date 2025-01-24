@extends('layouts.home')

@section('title', 'Products')

@section('content')
<h1 class="mb-4 text-center">Our Products</h1>
<div class="row">
    @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/150' }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                    <p class="text-success fw-bold">${{ number_format($product->price, 2) }}</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $products->links() }}
</div>
@endsection
