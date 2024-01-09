<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopping site</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .hidee{
            display: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark ">
        <div class="container-fluid">

            <a class="navbar-brand" href="/"><img src="\img\logo1.avif"
                    style=" width: 60px; height:60px ; border-radius:50%"></a>
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
