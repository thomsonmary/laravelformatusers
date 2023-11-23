<!--
<form action="{#{ route('autentikasi.rest.post') }}" method="POST">
@#csrf

NPM / NIDN <input type="text" name="login"><br>
Password    <input type="text" name="password">

<input type="submit" value="Login"> 

</form> -->
@extends('layouts.app')
@section('content')
  <!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  	<title>Login V16</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  	<link rel="icon" type="image/png" href="{{asset('1.formlogin/images/icons/favicon.ico')}}"/>
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/vendor/bootstrap/css/bootstrap.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/vendor/animate/animate.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/vendor/css-hamburgers/hamburgers.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/vendor/animsition/css/animsition.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/vendor/select2/select2.min.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/vendor/daterangepicker/daterangepicker.css')}}">
  <!--===============================================================================================-->
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/css/util.css')}}">
  	<link rel="stylesheet" type="text/css" href="{{asset('1.formlogin/css/main.css')}}">
  <!--===============================================================================================-->
  </head>
  <body>

  	<div class="limiter">
  		<div class="container-login100" style="background-image: url({{asset('1.formlogin/images/bg-01.jpg')}});">
  			<div class="wrap-login100 p-t-30 p-b-50">
  				<span class="login100-form-title p-b-41">
  					Sistem Informasi  <br> RPS-SAP-BAHAN AJAR <br> Login Dosen <br> dengan Akun Sit
  				</span>
                  @if (session('msg'))  <!-- UNTUK REDIRECT KE HALAMAN AWAL /SISWA    -->
                  <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Gagal Login !</h4>
                    <p>{{session('msg')}} </p>
                    <hr>
                    <p class="mb-0">Forbiden Acces !!!</p>
                  </div>
                @endif
  				<form method="POST" action="{{ route('autentikasi.rest.post') }}" class="login100-form validate-form p-b-33 p-t-5" >
            @csrf
      					<div class="wrap-input100 validate-input" data-validate = "Enter username">
							  <input name="login"  id="login" type="text" class="input100 @error('login') is-invalid @enderror" value="{{ old('login') }}" required autocomplete="login" autofocus 
							  placeholder="Username pada SIT">
                    @error('login')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  <span class="focus-input100" data-placeholder="&#xe82a;"></span>
      					</div>

      					<div class="wrap-input100 validate-input" data-validate="Enter password">
				  <input name="password"  id="password" type="password" class="input100 @error('password') is-invalid @enderror" required autocomplete="current-password" 
				  placeholder="Password pada SIT">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                 <span class="focus-input100" data-placeholder="&#xe80f;"></span>
      					</div>

      					<div class="container-login100-form-btn m-t-32">
      						<button type="submit" class="login100-form-btn" value="Login">
      							{{ __('Login') }}
      						</button>
      					</div>

  				</form>
  			</div>
  		</div>
  	</div>


  	<div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  	<script src="{{asset('1.formlogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('1.formlogin/vendor/animsition/js/animsition.min.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('1.formlogin/vendor/bootstrap/js/popper.js')}}"></script>
  	<script src="{{asset('1.formlogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('1.formlogin/vendor/select2/select2.min.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('1.formlogin/vendor/daterangepicker/moment.min.js')}}"></script>
  	<script src="{{asset('1.formlogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('1.formlogin/vendor/countdowntime/countdowntime.js')}}"></script>
  <!--===============================================================================================-->
  	<script src="{{asset('1.formlogin/js/main.js')}}"></script>

  </body>
  </html>
@endsection
