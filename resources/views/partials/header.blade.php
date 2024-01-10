<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping site</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
 
        .hidee{
            display: none;
        }
        .offcanvas.show {
        transform: none;
    }
    .nav-item a {
        padding-left: 20px !important;
    }
    .nav-link {
        display: block;
        padding: .5rem 1rem;
        
        text-decoration: none;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;}
        .icon-p {
            margin-right: 10px;
        }
        #ul{ padding-left: 20px !important}


.icon-width{
    font-size: 20px;
}
.icon-width li a {
    padding-right: 20px !important ;
}
.nav-item a {
    padding-left: 20px !important;
}
.manu{
    padding-right: 20px !important;
    padding-left: 20px !important;
    font-size: 20px !important;
    border: none !important;
}
.offcanvas{
    width: 300px;
    height: 1000px;
    background-color: rgb(249, 249, 249);
    color: black;
}
#offcanvasScrolling {
    margin-top: 86px;
    width: 285px;
    height: 820px;
    background-color: rgb(249, 249, 249);
    color:black;
}
    </style>
</head>

<body>
   
    @if (Auth::check())
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"id="offcanvasScrolling">
    <div class="offcanvas-header icon-1">
        <i class="bi bi-speedometer2"></i>
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel"> @auth
            <span class="text-dark mx-3  ">{{ Auth::user()->name }}</span>
        @else
            <div class="text-light"> Guest </div>

        @endauth</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> 
      </div>
      <div class="offcanvas-body">

        <h6>ORDER</h6>
        <ul class="p-0 m-0" id="ul">
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link" aria-current="page" href="{{ route('vieworder') }}"> <i class="bi bi-bag-check-fill"></i> Order page </a>
          </li>
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link" aria-current="page" href="{{ route('cartview') }}"><i class="bi bi-cart3"> </i> Cart </a>
          </li>
        </ul>
        <br>
        <h6>Components</h6>
        <ul class="p-0 m-0"id="ul">
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link  " aria-current="page" href="#"><i class="bi bi-puzzle icon-p"></i>Base</a>
          </li>
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link  " aria-current="page" href="#"><i class="bi bi-cursor icon-p"></i>Buttons</a>
          </li>
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link  " aria-current="page" href="#"><i class="bi bi-pie-chart icon-p"></i>Charts</a>
          </li>
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link  " aria-current="page" href="#"><i class="bi bi-card-text icon-p"></i>Forms</a>
          </li>
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link  " aria-current="page" href="#"><i class="bi bi-star icon-p"></i>Icons</a>
          </li>
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link  " aria-current="page" href="#"><i class="bi bi-bell icon-p"></i>Notifications</a>
          </li>
          <li class="nav-item offcanvas-icon p-0 m-0">
            <a class="nav-link  " aria-current="page" href="#"><i class="bi bi-lightning-charge icon-p"></i>Plugins</a>
          </li>
        </ul>
      </div>
</div>
@endif
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark ">
        <div class="container-fluid">

            <a class="navbar-brand" href="/"><img src="\img\logo1.avif"
                    style=" width: 60px; height:60px ; border-radius:50%"></a>
                    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                    aria-controls="offcanvasScrolling"><i class="navbar-toggler-icon"></i></button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <div class="me-auto mx-2">
                        <form action="{{ route('search') }}" class="d-flex">
                            <input name="search" class="form-control sear me-2" style="width:550px" type="search"
                                placeholder="Search" aria-label="Search">
                        </form>
                    </div>
            </div>


            @if (Auth::check())
                @auth
                    <span class="text-light mx-3  ">{{ Auth::user()->name }}</span>
                @else
                    <div class="text-light"> Guest </div>

                @endauth


                <a href="{{ route('vieworder') }}"> <i class="fa fa-dropbox float-right me-4"
                        style="font-size:30px;color:white"></i></a>
                <a href="{{ route('cartview') }}"> <i class="fa fa-shopping-bag float-right me-4"
                        style="font-size:30px;color:white"></i></a>
            @else
                {{ header('location:login') }}
            @endif
            <i id="liveToastBtn" class="fa fa-user float-right me-4"
                style="font-size:30px; color:white; cursor: pointer;"></i>

        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <div class="toast-container position-fixed top-4 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <button type="button" class="btn-close float-right" data-bs-dismiss="toast" aria-label="Close"></button>
            <div class="toast-header">
                <h6><strong> @auth
                            <strong> Welcome:{{ Auth::user()->name }} </strong>
                        @else
                            <div class="text-denger"> Guest </div>

                        @endauth
                    </strong> <br>
                    <p class="mb-0">Manage cart, Orders and wishlist</p>
                </h6>
            </div>
            @if (Auth::check())
                <div class="toast-body">
                    <a href="{{ route('logout') }}" class="btn btn-outline-dark float-right">Logout</a>
                </div>
            @else
                <div class="toast-body">
                    <a href="{{ route('login') }}" class="btn btn-outline-dark float-left">Sign in</a>
                    <a href="{{ route('signup') }}" class="btn btn-outline-dark float-right">Sign Up</a>
                </div>
            @endif

        </div>
    </div>
