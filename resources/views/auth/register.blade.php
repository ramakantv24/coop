@extends('layouts.app')
@section('content')

<script>
    function showpass() {
        var spass1 = document.querySelector(".pass10");
        if (spass1.type === "password") {
            spass1.type = "text";
        } else {
            spass1.type = "password";
        }
    }
</script>



<div class="signup-container">
    <div class="">
        <div class="">
            <div class="login-box">
                <!-- <div class="login-box-header">Login Page</div> -->
                <div class="login-left">
                    <div class="text">
                        <h2>COOP</h2>
                        <h6>Insights for Financial Empowerment: Your Credit Report Companion</h6>
                        <a href="{{ url('/') }}">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="login-box-body">
                    <div class="forms">
                        <h3>Hello There!</h3>
                        <h5>Create You Account</h5>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input id="name" placeholder="Your Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email-signup">Your Mail</label>
                                    <input id="email-signup" placeholder="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="no-signup">Mobile Number</label>
                                    <input type="tel" id="no-signup" placeholder="Mobile No"  oninput="validatePhoneNumber(this);" onKeyPress="return isNumber(event)" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('mobile_no') }}" maxlength="10" required>
                                    @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="no-signup">Location</label>
                                    <input id="no-signup" placeholder="location" type="text" class="form-control  @error('location') is-invalid @enderror pass10" name="location" value="{{ old('location') }}" required>
                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input id="password" placeholder="Password" type="password" class="form-control  @error('password') is-invalid @enderror  pass10" name="password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Confirm Password</label>
                                    <input id="password" placeholder="Confirm Password" type="password" class="form-control  " name="password_confirmation" required>
                                </div>
                            </div>
                            <!-- <div class="passowrdfiled">
                                <label>
                                    <input type="checkbox" onclick="showpass()">
                                    Show Password
                                </label>
                            </div> -->

                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-login btn-hide">Sign up</button>
                            </div>

                            <div class="forgot col-md-12">
                                <a href="{{ url('/login') }}" class="text-left ">
                                    Already user? Login
                                </a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     var signupButton = document.querySelector('.btn-hide');
    //     var signupContainer = document.querySelector('.signup-container');

    //     signupButton.addEventListener('click', function() {
    //         signupContainer.style.display = 'none';
    //     });
    // });

    function validatePhoneNumber(input) {
        // Remove any non-digit characters
        input.value = input.value.replace(/\D/g, '');
    }
</script>
@endsection