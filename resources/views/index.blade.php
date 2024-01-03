@include("partials.heder")
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
        /* width: 100px; */
        border: none;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        height: 200px;
        /* Adjust the height of the card images */
        object-fit: cover;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .card-text {
        color: #555;
    }

    .hidden-card {
        display: none;
    }

    .hidden-card {
        display: none;
    }

    /* Adjustments for the card layout */
    #cardContainer {
        display: flex;
        flex-wrap: wrap;
    }

    .col {
        flex: 0 0 25%;
        /* Set width to 25% for each column */
        max-width: 25%;
        box-sizing: border-box;
        margin-bottom: 20px;
        /* Add margin between columns */
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
            <div class="img text-center">
                <img class="img1" src="/img/mens photo.jpg" alt="man"><br>
                <label for="Men">Men</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="img text-center">
                <img class="img1" src="/img/womens photo.jpg" alt="woman"><br>
                <label for="Womens">Womens</label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="img text-center">
                <img class="img1" src="/img/kidsphoto.jpg" alt="kids"><br>
                <label for="Kids">Kids</label>
            </div>
        </div>
    </div>
</div>

{{-- 
@foreach ($customers as $customer)
<div class="col">
    <div class="card">
        <img src="{{$customer->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$customer->name}}</h5>
            <p class="card-text">{{$customer->decs}}</p>
            <p>{{$customer->price}}</p>
        </div>
    </div>
</div>
@endforeach --}}




    <div class="container border border-5 mb-5">
        <div class="container my-4 mt-5" id="ques">
            <div class="row my-4" id="productContainer">
                <!-- Display the first 4 products -->
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
    
            <!-- "View All" button to load more products -->
            <div class="container d-flex align-items-center justify-content-center mb-3">
                <button id="viewAllBtn" class="btn btn-primary">View All</button>
            </div>
            <div class="col hidden-card">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col hidden-card">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col hidden-card">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col hidden-card">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col hidden-card">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col hidden-card">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col hidden-card">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col hidden-card">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var viewAllBtn = document.getElementById('viewAllBtn');
        var hiddenCols = document.querySelectorAll('#productContainer .col:nth-child(n+5)'); // Select all columns starting from the 5th

        // Hide columns beyond the first 4
        for (var i = 4; i < hiddenCols.length; i++) {
            hiddenCols[i].classList.add('hidden');
        }

        // Attach click event to the "View All" button
        viewAllBtn.addEventListener('click', function () {
            // Show all hidden products
            hiddenCols.forEach(function (col) {
                col.classList.remove('hidden');
            });

            // Hide the "View All" button after displaying all products
            viewAllBtn.style.display = 'none';
        });
    });
</script>
    
    <style>
        .col.hidden {
            display: none;
        }
    </style>
    
    
    

</body>

</html>
