@include('partials.header')
@extends('partials.footer')

@foreach($cart as $product)
    
<div class="card mb-4">
    <div class="row g-0">
        <div class="col-md-2">
            <img src="/img/{{ $product['product_image_path'] }}" class="img-fluid rounded-start" alt="">
        </div>
        <div class="col-md-5">
            <div class="card-body">
                <h4 class="card-text"><strong>Product name:</strong> {{ $product['product_name'] }}</h4>
                <h5 class="card-text"><strong>Price:</strong> ₹{{ $product['price'] }}</h5>
                <div class="row">
                <div class="col-md-6">                   
                    {{-- <p class="card-text"><strong>Quantity:</strong> {{ $product['quntity'] }}</p> --}}
                    <p class="card-text"><strong>Quantity:</strong>
                        <button class="btn btn-sm btn-secondary" onclick="decreaseQuantity({{ $product['product_id'] }})">-</button>
                        <span id="quantity_{{ $product['product_id'] }}">{{ $product['quntity'] }}</span>
                        <button class="btn btn-sm btn-secondary" onclick="increaseQuantity({{ $product['product_id'] }})">+</button>
                    </p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="card-text"><strong>Total:</strong> {{ $product['quntity']* $product['price'] }}</p>
                </div>

            </div>
         
            <a href="{{ route('delete', ['id' => $product['id']]) }}" onclick="return confirm('Are you sure you want to remove this ?')">
                <button class="btn btn-danger fs-6 my-3">Remove</button>
            </a>
            
            
            <a href="#" >
                <button onclick="hidee()" class="btn btn-danger fs-6 my-3">Order</button>
            </a>
<div class="hidee">
            <h5>Please pay here</h5>
            <p>Check No.</p>
            <input type="number" name="check" >
            <a href="{{ route('order', ['id' => $product['id']]) }}" >
                <button class="btn btn-danger fs-6 my-3">Order</button>
            </a>
        </div>
        </div>
    </div>
</div>
</div>
@endforeach

<script>
    function hidee(){
        let hiddenElements = document.querySelectorAll('.hidee');
        hiddenElements.forEach(function (element) {
        element.style.display = 'block';
});
    }
</script>
<style>
    .hidee{
        display: none;
    }
</style>
<script>
    function decreaseQuantity(productId, price) {
        let quantityElement = document.getElementById('quantity_' + productId);
        let totalElement = document.getElementById('total_' + productId);
        let currentQuantity = parseInt(quantityElement.textContent);

        if (currentQuantity > 1) {
            quantityElement.textContent = currentQuantity - 1;
            updateTotal(productId, (currentQuantity - 1) * price);
        }
    }

    function increaseQuantity(productId, price) {
        let quantityElement = document.getElementById('quantity_' + productId);
        let totalElement = document.getElementById('total_' + productId);
        let currentQuantity = parseInt(quantityElement.textContent);

        quantityElement.textContent = currentQuantity + 1;
        updateTotal(productId, (currentQuantity + 1) * price);
    }

    function updateTotal(productId, total) {
        let totalElement = document.getElementById('total_' + productId);
        totalElement.textContent = total;
    }
</script>

