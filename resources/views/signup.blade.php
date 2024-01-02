@include("partials.header")
@extends("partials.footer")

  <center> <strong class="text-primary"><h1> Sign-up</h1> </strong>  </center>

<div class="container my-5">
<form action="{{ route('signup') }}" method="POST" id="naitik">
    @csrf
    <div class="form-group">
        <label for="name ">Name :</label>
        <input type="text" class="form-control" name="name" id="name"
            aria-describedby="helpId" placeholder=""value="{{ old('name') }}"required>
        @error('name')
            <span class=" text-danger">{{ $message }}</span>
        @enderror

   
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address :</label>
        <input type="email" class="form-control" id="email"
            aria-describedby="emailHelp" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span class=" text-danger">{{ $message }}</span>
        @enderror
        <div id="emailErrorContainer" class="text-danger"></div>
        <div id="errorContainer" class="text-danger"></div>
    </div>
    <div class="mb-3">
        <label for="phonenumber" class="form-label">Phonenumber :</label>
        <input type="text" class="form-control" id="phonenumber" aria-describedby="emailHelp" name="phonenumber"required minlength="10" maxlength="10" pattern="[0-9]{10}" title="Please enter a 10-digit number" required value="{{ old('phonenumber') }}" >
        <span class="text-danger">
          @error('phonenumber')
            {{$message}}
          @enderror
        </span>
      </div>
      <div class="mb-3 row">
        <div class="mb-3 col">
          <label for="" class="form-label">Gender:</label ><br>
            <div class="form-check-inline">
                <input class="" type="radio" name="gender"  value="M"
                {{-- {{$customer->gender == "M" ? "checked" : ""}} --}}
                >
                <label class="" for="male">Male</label>
                <input class="" type="radio" name="gender"  value="F"
                {{-- {{$customer->gender == "F" ? "checked" : ""}} --}}
                >
                <label class="" for="female">Female</label>
                <input class="" type="radio" name="gender"  value="O"
                {{-- {{$customer->gender == "O" ? "checked" : ""}} --}}
                >
                <label class="" for="other">Other</label>
            </div>
        </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password :</label>
        <input type="password" class="form-control" id="password" name="password" required>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Confirm Password :</label>
        <input type="password" class="form-control" id="password" name="cpassword" required>
        <div id="passwordErrorContainer" class="text-danger">


            @error('cpassword')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>


        <button type="submit" class="btn btn-primary my-4" id="startStopButton" >Register</button>
</form>

</div>
