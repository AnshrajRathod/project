@include('partials.header')
@extends('partials.footer')

<style>
    .card:hover {
        transform: scale(1.05);
        transition: transform 0.5s ease; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<h2 class="text-center text-danger-emphasis mt-2">Your Orders</h2>

<div class="container mx-auto">
    @foreach ($order as $cartItem)
        <div class="card mb-4 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="/img/{{ $cartItem->product_image_path }}" class="img-fluid rounded-start" alt="{{ $cartItem->product_name }}">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        @foreach ($product as $productItem)
                            @if ($productItem->id == $cartItem->product_id)
                                <h4>{{ $productItem->product_name }}</h4>
                                <p>{{ $productItem->product_description }}</p>
                                <p class="card-text"><strong>Price:</strong> ₹{{ $productItem->product_price }}</p>
                            @endif
                        @endforeach

                        {{-- You can include quantity and total information --}}
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text"><strong>Quantity:</strong> {{ $cartItem->quntity }}</p>
                            </div>
                            <div class="col-md-6 text-end">
                                <p class="card-text"><strong>Total:</strong> ₹{{ $cartItem->price}}</p>
                            </div>
                        </div><br>
                        <div class="row">
                            <p><strong>Order at:</strong> {{ $cartItem->created_at->format('d-M-Y') }}</p>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
