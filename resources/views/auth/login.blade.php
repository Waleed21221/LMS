@extends('layouts.app')

@section('content')
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collectives - Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/css?family=Philosopher:400,700" rel="stylesheet"> -->
    
</head>
<body>

<section>
    
<div id="login-header">
    <div class="container-fluid">
        <div class="logo">
            <img src="images/logo.png" class="img-fluid" width="120" />
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-8 col-md-6 col-12 p-0">
        <div id="login-bg">
            <div class="login-bg-text">
                <h5>Giving it back,</h5>
                <h3>One Student <br/> at a time.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum  endisse ultrices gravida. Risus commodo iverra maecenas accumsan.</p>
            </div>
        </div>
    </div>
        
    <div class="col-4 col-md-6 col-12 p-0">
        <div id="login-form-bg">
            <div class="login-form-parent">
                <div class="login-form-header">
                    <img src="images/logo-c.png" class="img-fluid mb-3" width="50">
                    <h5>SIGN IN TO YOUR <br/> LMS DASHBOARD</h5>
                    <p>USING YOUR COLLECTIVE ID</p>
                </div>

                <div class="login-form-body">
                    <form action="" actiön="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Student ID, Teacher ID, Staff ID">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Password') }}</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">
                            
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <button type="submit">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">FORGOT PASSWORD?</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="login-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="links m-auto">
                <ul>
                    <li><a href="#">TERMS & CONDITIONS</a></li>
                    <li><label>|</label></li>
                    <li><a href="#">PRIVACY POLICY</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

</section>















<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
@endsection