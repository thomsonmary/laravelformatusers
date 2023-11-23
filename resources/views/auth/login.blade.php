<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel 9 Login Form') }}</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset ('1.FormLogin/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('1.FormLogin/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">


		<div class="container-login100" style="background-image: url('{{ asset ("1.FormLogin/images/bg-01.jpg") }}  ') ;">
		

            <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login <br> Administrator
				</span>

    
				<form class="login100-form validate-form p-b-33 p-t-5"
                 method="POST" action="{{ route('login') }}" >
                @csrf

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
						required autocomplete="email" placeholder="Username/Email" autofocus >
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

                    <div class="container-login100-form-btn m-t-32">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
                         <button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn m-t-32">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                    </div>
            </form>
			</div>
	
    
        </div>
	</div>
	
	<a class="dropdown-item" href="{{ route('logout') }}" 
	onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	<span class="link-collapse">{{ __('Log Out') }}</span></a>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	</form>


	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset("1.FormLogin/vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("1.FormLogin/vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("1.FormLogin/vendor/bootstrap/js/popper.js")}}"></script>
	<script src="{{ asset("1.FormLogin/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("1.FormLogin/vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("1.FormLogin/vendor/daterangepicker/moment.min.js")}}"></script>
	<script src="{{ asset("1.FormLogin/vendor/daterangepicker/daterangepicker.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("1.FormLogin/vendor/countdowntime/countdowntime.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("1.FormLogin/js/main.js")}}"></script>

</body>
</html>