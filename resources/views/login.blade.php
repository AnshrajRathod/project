@include("partials.heder")
@extends("partials.footer")

<center> <strong class="text-primary"><h1> Login Page   </h1> </strong>  </center>
<div class="container my-5">

    <form action="{{ route('login') }}" method="POST" id="loginForm">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email"
                aria-describedby="email" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <div id="errorContainer2" class="text-danger"></div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>



</div>

