@extends('layouts.home')

@section('title', 'Cart - MyShop')

@section('content')
<h1 class="mb-4">Your Cart</h1>
@if (count($cartItems) > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->product->price, 2) }}</td>
                    <td>${{ number_format($item->product->price * $item->quantity, 2) }}</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-sm">Remove</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="#" class="btn btn-success">Checkout</a>
@else
    <p>Your cart is empty.</p>
    <a href="/products" class="btn btn-primary">Shop Now</a>
@endif
@endsection
