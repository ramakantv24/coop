@extends('layouts.app')
@section('content')
<script>
    function showpass1() {
        var spass = document.querySelector(".pass1");
        if (spass.type === "password") {
            spass.type = "text";
        } else {
            spass.type = "password";
        }
    }

    function showpass2() {
        var spass2 = document.querySelector(".pass2");
        if (spass2.type === "password") {
            spass2.type = "text";
        } else {
            spass2.type = "password";
        }
    }
</script>

<div class="Login-container">
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

                        <h3>Hello Again!</h3>
                        <h5>Welcome back</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="email" placeholder="Username" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" placeholder="Password" type="password" class="form-control pass1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" onclick="showpass1()">
                                    Show Password
                                </label>
                            </div>
                            <button type="submit" class="btn btn-login">Login</button>

                            <div class="forgot">
                                <a href="{{ url('/signup') }}">
                                    New user? Signup
                                </a>
                            </div>
                            <div class="forgot">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection