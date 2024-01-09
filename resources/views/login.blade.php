@include("partials.header")
@extends("partials.footer")



@if (session()->has('signup'))
<div class="alert alert-success alert-dismissible fade show my-2" role="alert" id="signupSuccessAlert">
    <strong>Success</strong> Signup Successfully please Login
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </button>
</div>
<script>
    setTimeout(function() {
        $('#signupSuccessAlert').alert('close');
    }, 3000);

</script>
@endif
<div class="container d-flex align-items-center justify-content-center my-5">
    @error('message')
    <span class="text-danger">{{ $message }}</span>
@enderror

<div class="card mx-5 shadow" style="width: 50rem; color: rgb(0, 110, 255);">
    <div class="card-body">
        <h5 class="card-title">Sign-In</h5>
        <p class="card-text">
            <form action="{{ route('login') }}" method="POST" id="loginForm">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email"
                        value="{{ old('email') }}" required>
                </div>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div id="errorContainer2" class="text-danger"></div>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror

                <button type="submit" class="btn btn-primary">Sign-in</button>
            </form>
        </p>
    </div>
</div>


    


</div>

