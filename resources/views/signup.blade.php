@include('partials.header')
@extends('partials.footer')

<div class="container d-flex align-items-center justify-content-center">
        <div class="card my-4 mx-5 shadow" style="width: 50rem; color: rgb(0, 110, 255);">
       
        <div class="card-body">
          <h5 class="card-title">Sign-Up</h5>
          <p class="card-text"><form action="{{ route('signup') }}" method="POST" id="naitik">
            @csrf
            <div class="form-group">
                <label for="name "> Name :</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                value="{{ old('name') }}" required placeholder="Enter your Name">
                @error('name')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
    
    
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address :</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                    value="{{ old('email') }}" required placeholder="Enter your Email">
                @error('email')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
                <div id="emailErrorContainer" class="text-danger"></div>
                <div id="errorContainer" class="text-danger"></div>
            </div>
            <div class="mb-3">
                <label for="phonenumber" class="form-label">Phonenumber :</label>
                <input type="text" class="form-control" id="phonenumber" aria-describedby="emailHelp"
                    name="phonenumber"required minlength="10" maxlength="10" pattern="[0-9]{10}"
                    title="Please enter a 10-digit number" required value="{{ old('phonenumber') }}" placeholder="Enter your PhoneNo.">
                <span class="text-danger">
                    @error('phonenumber')
                        {{ $message }}
                    @enderror
                </span>
            </div>
    
            <div class="mb-3 row">
                <div class="mb-3 col">
                    <label for="" class="form-label">Gender:</label><br>
                    <div class="form-check-inline">
                        <input class="" type="radio" name="gender" required value="M"
                            {{ old('gender') == 'M' ? 'checked' : '' }}>
                        <label class="" for="male">Male</label>
                        <input class="" type="radio" name="gender" value="F"
                            {{ old('gender') == 'F' ? 'checked' : '' }}>
                        <label class="" for="female">Female</label>
                        <input class="" type="radio" name="gender" value="O"
                            {{ old('gender') == 'O' ? 'checked' : '' }}>
                        <label class="" for="other">Other</label>
                    </div>
                </div>
            </div>
            
    
            <div class="mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" class="form-control" id="password" value="{{ old('password') }}" name="password"
                    required  placeholder="Enter your Password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password :</label>
                <input type="password" class="form-control" id="password" value="{{ old('password') }}" name="cpassword"
                    required   placeholder="Enter your Confirm Password">
                <div id="passwordErrorContainer" class="text-danger">
                    @error('cpassword')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary my-4" id="startStopButton">Sign-up</button>
        </form></p>
          
        </div>
      </div>
  
    </div>
