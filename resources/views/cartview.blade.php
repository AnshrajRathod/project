@include('partials.header')
@extends('partials.footer')

@if (session()->has('order'))
<div class="alert alert-success alert-dismissible fade show my-2" role="alert" id="addcart">
    <strong>Success</strong> order successfully 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </button>
</div>
<script>
    setTimeout(function() {
        $('#addcart').alert('close');
    }, 3000);

</script>
@endif

@foreach($cart as $product)
@php
$orderid = $product->users_id;
$users = Auth::user()->id;
@endphp
@if($orderid == $users )
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
                   
                    <p class="card-text">
                        <strong>Quantity:</strong>
                        <button class="btn btn-sm btn-secondary"    onclick="decreaseQuantity({{ $product['id'] }})">-</button>
                        <span id="quantity_{{ $product['id'] }}">{{ $product['quntity'] }}</span>
                        <button class="btn btn-sm btn-secondary" onclick="increaseQuantity({{ $product['id'] }})">+</button>
                    </p>
                </div>
                <div class="col-md-6 text-end">
                    <p class="card-text"><strong>Total:</strong> <span id="price_{{ $product['id'] }}">{{ $product['quntity']* $product['price'] }}</span> </p>
                </div>

            </div>
         
            <a href="{{ route('delete', ['id' => $product['id']]) }}" onclick="return confirm('Are you sure you want to remove this ?')">
                <button class="btn btn-danger fs-6 my-3">Remove</button>
            </a>
            
            
            
 
            <h5>Please pay here</h5>
           
            <a href="{{ route('order', ['id' => $product['id']]) }}"onclick="return confirm('Are you sure you want to order this ?')" >
            <button class="btn btn-danger fs-6 my-3">Order</button>
            </a>
       
        </div>
    </div>
</div>
</div>

@endif

@endforeach

@if($cart->where('users_id', Auth::id())->isEmpty())
<center>
    <div class="alert alert-danger my-5">
       <b>No product found in Cart.</b>
    </div>
</center>
@endif




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


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>

function updateQuantity(productId, operation) {
    $.ajax({
        type: 'get',
        url: '/update-quantity/' + productId,
        data: { _token: '{{ csrf_token() }}', operation: operation },
        success: function(response) {
          
            $('#quantity_' + productId).text(response.quantity);
            console.log(response.quantity);
          
            $('#price_' + productId).text(response.price);


  
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
}

function increaseQuantity(productId) {
    updateQuantity(productId, 'increase');
}

function decreaseQuantity(productId) {
    updateQuantity(productId, 'decrease');
}
</script>