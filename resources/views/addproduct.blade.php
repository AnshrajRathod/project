@include('partials.header')
@extends('partials.footer')


@if (session()->has('addcart'))
    <div class="alert alert-success alert-dismissible fade show my-2" role="alert" id="addcart">
        <strong>Success</strong> Product add to cart
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </button>
    </div>
    <script>
        setTimeout(function() {
            $('#addcart').alert('close');
        }, 3000);
    </script>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container-fluid row my-4" id="productContainer">


    <div class="col-5 container-fluid">
        <div class="card">

            <img src="/img/{{ $product->product_image_path }}" class="card-img-top" alt="...">

        </div>
    </div>




    <div class="col-5">

        <div class="card-body">
            <h5 class="card-title">{{ $product->product_name }}</h5>
            <p class="card-text">{{ $product->product_description }}</p>
            <h3>₹{{ $product->product_price }}</h3>

        </div>




        <div class="my-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, ab. Eligendi eius laboriosam impedit, dolore
            quod placeat architecto,<b>{{ $product->product_name }}</b> aut temporibus asperiores ad dolores ab.
            Assumenda libero quidem repudiandae adipisci soluta.
        </div>
        <span><b> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque similique maiores asperiores</b>
        </span>
        <br><br><br>

        <ul>
            <li>
                <span> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque similique maiores asperiores
                </span>

            </li>

        </ul>
        <ul>
            <li>
                <span> Lorem ipsum, dolor sit amet <b>{{ $product->product_description }}</b>. Atque similique maiores
                    asperiores </span>
            </li>

        </ul>

        <form action="{{ route('cart.add', $product->id) }}" method="POST" class="my-5">
            @csrf
            <button type="submit" class="btn btn-warning   " style="font-size:30px">Add to Cart</button>
        </form>

    </div>

</div>


<div class="container">



</div>
