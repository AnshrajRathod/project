@include("partials.header")
@extends("partials.footer")

<style>
    .img1 {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    #carouselExampleIndicators {
        margin: 0 auto;
        width: 70%;
    }

    .card {
        /* / width: 100px;/ border: none; */
        transition: transform 0.3s;
        height: 95%;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        height: 50%;
        object-fit: cover;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .card-text {
        color: #555;
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide1.jpg" style="height: 500px; width:100%" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/slide2.jpg" style="height: 500px; width:100%" class="d-block" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/img/slide3.jpg" style="height: 500px; width:100%" class="d-block" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="img text-center"id="menCategory">
                <img class="img1" src="/img/mens photo.jpg" alt="man"><br>
                <label for="Men">Men</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="img text-center" id="womenCategory">
                <img class="img1" src="/img/womens photo.jpg" alt="woman"><br>
                <label for="Womens">Womens</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="img text-center" id="kids">
                <img class="img1" src="/img/kidsphoto.jpg" alt="kids"><br>
                <label for="Kids">Kids</label>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {

        $("#menCategory").click(function () {

            window.location.href = "/search?search=men";
        });
    });
    $(document).ready(function () {

        $("#womenCategory").click(function () {

            window.location.href = "/search?search=women";
        });
    });
    $(document).ready(function () {

        $("#kids").click(function () {

            window.location.href = "/search?search=kids";
        });
    });




</script>




<div class="container border show border-5 mb-5">
    <div class="container my-4 mt-5" id="ques">
        <div class="row my-4" id="productContainer">

            @foreach ($product->take(4) as $products)
                <div class="col-3">
                    <div class="card">
                        <img src="/img/{{ $products->product_image_path }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $products->product_name }}</h5>
                            <p class="card-text">{{ $products->product_description }}</p>
                            <h3>₹{{ $products->product_price }}</h3>
                            <a href="{{ route('add' , ['id' => $products->id]) }}" class="btn btn-dark">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container d-flex align-items-center justify-content-center mb-3">
            <button id="viewAllBtn" onclick="showHiddenElements()" class="btn btn-primary">View All</button>
        </div>
    </div>
</div>

<div class="container border hidden border-5 mb-5">
    <div class="container my-4 mt-5" id="ques">
        <div class="row my-4" id="productContainer">
            @foreach ($product as $products)
                <div class="col-3">
                    <div class="card">
                        <img src="/img/{{ $products->product_image_path }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $products->product_name }}</h5>
                            <p class="card-text">{{ $products->product_description }}</p>
                            <h3>₹{{ $products->product_price }}</h3>
                            <a href="{{ route('add' , ['id' => $products->id]) }}"  class="btn btn-dark">Add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container d-flex align-items-center justify-content-center mb-3">
            <button id="viewAllBtn" onclick="HiddenElements()" class="btn btn-primary hidd1">View Less</button>
        </div>
    </div>
</div>

<style>
    .hidden{
        display: none;
    }
    .show{
        display: block;
    }
    .hidd1{
        display: none;
    }
</style>

<script>
    function showHiddenElements() {
        let hiddenElements = document.querySelectorAll('.hidden');

        hiddenElements.forEach(function (element) {
            element.style.display = 'block';
        });

        let showElements = document.querySelectorAll(('.show'));

        showElements.forEach(function (element) {
            element.style.display = 'none';
        });

        let showHiddenbtn = document.querySelectorAll('.hidd1');

        showHiddenbtn.forEach(function (element) {
            element.style.display = 'block';
        });
    }
    function HiddenElements() {
        let hiddenElements = document.querySelectorAll('.hidden');

            hiddenElements.forEach(function (element) {
                element.style.display = 'none';
            });

            let showElements = document.querySelectorAll(('.show'));

            showElements.forEach(function (element) {
                element.style.display = 'block';
            });

            let showHiddenbtn = document.querySelectorAll('.hidd1');

            showHiddenbtn.forEach(function (element) {
                element.style.display = 'none';
            });
    }
</script>



<script>
    function showHiddenElements() {
        let hiddenElements = document.querySelectorAll('.hidden');

        hiddenElements.forEach(function (element) {
            element.style.display = 'block';
        });

        let showElements = document.querySelectorAll(('.show'));

        showElements.forEach(function (element) {
            element.style.display = 'none';
        });

        let showHiddenbtn = document.querySelectorAll('.hidd1');

        showHiddenbtn.forEach(function (element) {
            element.style.display = 'block';
        });
    }
    function HiddenElements() {
        let hiddenElements = document.querySelectorAll('.hidden');

            hiddenElements.forEach(function (element) {
                element.style.display = 'none';
            });

            let showElements = document.querySelectorAll(('.show'));

            showElements.forEach(function (element) {
                element.style.display = 'block';
            });

            let showHiddenbtn = document.querySelectorAll('.hidd1');

            showHiddenbtn.forEach(function (element) {
                element.style.display = 'none';
            });
    }
</script>
</body>
</html>
