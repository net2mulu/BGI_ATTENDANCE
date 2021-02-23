{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.multipurposethemes.com/admin/joblly-admin-template-dashboard/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 13:38:30 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/joblly-admin-template-dashboard/images/favicon.ico">

    <title>BGI ATTENDANCE-Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset("back/css/vendors_css.css ") }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href=" {{ asset("back/css/style.css") }}">
	<link rel="stylesheet" href="{{ asset("back/css/skin_color.css ") }}">	

</head>
	
<body class="hold-transition theme-primary bg-img" style=" background-image: url(back/images/login_back_3.jpg), linear-gradient(red, yellow);">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded30 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">BGI Ethiopia</h2>
								<p class="mb-0">Sign in to continue to dash board.</p>							
							</div>
							<div class="p-40">
								<form   method="POST" action="{{ route('login') }}">
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											{{-- <input type="email" class="form-control pl-15 bg-transparent" placeholder="Username"> --}}
                                            <input id="email" type="email" class="form-control pl-15 bg-transparent  form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											{{-- <input type="password" class="form-control pl-15 bg-transparent" placeholder="Password"> --}}

                                            <input id="password" type="password" class=" form-control pl-15 bg-transparent  form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror


										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                          {{-- <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button> --}}
										</div>
										<!-- /.col -->
									  </div>
								</>	
								
							</div>						
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src={{ asset("back/js/vendors.min.js") }}></script>
	<script src={{ asset("back/js/pages/chat-popup.js") }}></script>
    <script src={{ asset("back/assets/icons/feather-icons/feather.min.js") }}></script>	

</body>

<!-- Mirrored from www.multipurposethemes.com/admin/joblly-admin-template-dashboard/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Feb 2021 13:38:31 GMT -->
</html>
