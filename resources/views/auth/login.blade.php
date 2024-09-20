<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CV mkr</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/LoginStyle.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form   method="POST" action="{{ route('login') }}"  class="login100-form validate-form">
           @csrf
					<span class="login100-form-title p-b-70" id="bottom">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="images/logo.jpg" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="E-mail Address"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100 " data-placeholder="Password"></span>
					</div>
          <div class="form-group row m-b-40">
               <div class="col-md-6 offset-md-4">
                   <div class="form-check">
                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                       <label class="form-check-label" for="remember">
                           {{ __('Remember Me') }}
                       </label>
                   </div>
               </div>
           </div>

					<div class="container-login100-form-btn logBtn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>
                @if (Route::has('password.request'))
                    <a class="txt2" href="{{ route('password.request') }}">
                        {{ __(' Your Password?') }}
                    </a>
                @endif
						</li>

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>
                @if (Route::has('register'))
                    <a class="txt2" href="{{ route('register') }}">
                      {{ __('Sign Up') }}
                    </a>
                @endif
						</li>
					</ul>
					<br></br>
				   @include('layouts.errors')
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/mainLogin.js"></script>
</body>
</html>
