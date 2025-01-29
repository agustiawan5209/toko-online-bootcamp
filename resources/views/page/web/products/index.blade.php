@extends('layouts.home')

@section('title', 'Products')

@section('content')
<h1 class="text-3xl font-bold text-center mb-8">Our Products</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($products as $product)
        <div class="bg-white rounded-lg shadow-md">
            <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/150' }}" class="rounded-t-lg w-full" alt="{{ $product->name }}">
            <div class="p-4">
                <h2 class="text-xl font-bold">{{ $product->name }}</h2>
                <p class="text-gray-600">{{ Str::limit($product->description, 50) }}</p>
                <p class="text-green-600 font-bold">${{ number_format($product->price, 2) }}</p>
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add to Cart</a>
            </div>
        </div>
    @endforeach
</div>

<div class="flex items-center justify-center mt-8">
    {{ $products->links() }}
</div>
@endsection
