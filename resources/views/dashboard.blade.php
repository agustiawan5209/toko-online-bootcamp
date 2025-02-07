<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-teal-500 hover:bg-teal-700 text-white rounded-lg shadow-lg p-4">
                    <h3 class="font-bold text-2xl">{{ __('Jumlah Produk') }}</h3>
                    <p class="text-xl md:text-2xl font-bold">{{ $totalProducts }}</p>
                </div>
                <div class="bg-blue-500 hover:bg-blue-700 text-white rounded-lg shadow-lg p-4">
                    <h3 class="font-bold text-2xl">{{ __('Jumlah Category') }}</h3>
                    <p class="text-xl md:text-2xl font-bold">{{ $totalCategories }}</p>
                </div>
                <div class="bg-orange-500 hover:bg-orange-700 text-white rounded-lg shadow-lg p-4">
                    <h3 class="font-bold text-2xl">{{ __('Jumlah Pembelian') }}</h3>
                    <p class="text-xl md:text-2xl font-bold">{{ $totalTransactions }}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

