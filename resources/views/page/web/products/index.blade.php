@extends('layouts.home')

@section('title', 'Products')

@section('content')
<h1 class="text-3xl font-bold text-center mb-8">Our Products</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach ($products as $product)
    <div class="bg-white rounded-lg shadow-lg p-4 w-full max-w-sm mx-auto">
        <div class="w-full h-72 overflow-hidden rounded-lg relative">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                class="w-full h-full object-cover">
                <span class="absolute top-0 transform translate-y-1/2 left-0 bg-blue-500 text-white px-2 py-1">{{ $product->category->name }}</span>
        </div>
        <div class="space-y-4 mt-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800">{{ $product->name }} </h2>
            <p class="text-gray-600 text-sm">{{ $product->description }}</p>
            <p class="text-gray-800 font-semibold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
            <a href="{{ route('product.show', $product->id) }}"
                class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                tambah ke keranjang
            </a>
        </div>
    </div>
    @endforeach
</div>

<div class="flex items-center justify-center mt-8">
    {{ $products->links() }}
</div>
@endsection

