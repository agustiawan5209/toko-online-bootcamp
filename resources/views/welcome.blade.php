@extends('layouts.home')

@section('title', 'Dashboard - MyShop')

@section('content')
<section id="header" class="container mx-auto py-4 px-5">
    <div
        class="bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 flex flex-col items-center justify-center min-h-[60vh] text-white">
        <div class="flex flex-col md:flex-row items-center justify-between w-full px-4 md:px-10">
            <div class="md:w-1/2 p-4">
                <h1 class="text-4xl font-bold mb-4">Selamat di Website Kami</h1>
                <p class="text-lg">
                    Jelajahi semua produk dengan semua yang dibutuhkan. kami selalu menyiapkan semua yang anda perlukan dalam satu klik
                </p>
                <div class="flex justify-between w-full mt-8">
                    <a href="#travel-schedule"
                        class="px-6 py-2 bg-white text-blue-600 font-semibold rounded-lg hover:bg-blue-600 hover:text-white">Mulai</a>
                </div>

            </div>
            <div class="md:w-1/2 p-4 relative">
                <img src="{{ asset('image/blog-04.png') }}" alt="Travel Image"
                    class="w-0 sm:w-full h-auto " />
            </div>
        </div>
    </div>
</section>

<section>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
        <div class="bg-white rounded-lg shadow-lg p-4 w-full max-w-sm mx-auto">
            <div class="w-full h-72 overflow-hidden rounded-lg">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    class="w-full h-full object-cover">
            </div>
            <div class="space-y-4 mt-4 text-center">
                <h2 class="text-2xl font-bold text-gray-800">{{ $product->name }}</h2>
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
</section>

@endsection
