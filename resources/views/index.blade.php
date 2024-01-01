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


<div class="container border border-5 mb-5">
    <div class="container my-4 mt-5" id="ques">
        <div class="row my-4">
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="container d-flex align-items-center justify-content-center mb-3">
    <a href="#">
        <button class="btn btn-primary">View All</button>
    </a>
</div>
</div>

</body>

</html>
