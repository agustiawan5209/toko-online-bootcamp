<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Nama Product')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $product->name }}" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Deskripsi Product')" />
                            <x-text-input type="text" id="description" class="block mt-1 w-full" rows="3" value="{{ $product->description }}" name="description" required></x-text-input>
                        </div>

                        <div class="mt-4">
                            <x-input-label for="stock" :value="__('Stok Product')" />
                            <x-text-input id="stock" class="block mt-1 w-full" type="number" name="stock" value="{{ $product->stock }}" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="image" :value="__('Gambar Product')" />
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"  />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="price" :value="__('Harga Product')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{ $product->price }}" required />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="category_id" :value="__('Kategori Product')" />
                            <select id="category_id" class="block mt-1 w-full" name="category_id" required>
                                <option value="" selected disabled>Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-3">
                                {{ __('Simpan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

