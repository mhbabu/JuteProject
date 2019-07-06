<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{!! Html::style('assets/admin/login/images/icons/favicon.ico')!!}
	{!! Html::style('assets/admin/login/vendor/bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('assets/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}
	{!! Html::style('assets/admin/login/fonts/iconic/css/material-design-iconic-font.min.css') !!}
	{!! Html::style('assets/admin/login/vendor/animate/animate.css') !!}
	{!! Html::style('assets/admin/login/vendor/css-hamburgers/hamburgers.min.css') !!}
	{!! Html::style('assets/admin/login/vendor/animsition/css/animsition.min.css') !!}
	{!! Html::style('assets/admin/login/vendor/select2/select2.min.css') !!}
	{!! Html::style('assets/admin/login/vendor/daterangepicker/daterangepicker.css') !!}
	{!! Html::style('assets/admin/login/css/util.css') !!}
	{!! Html::style('assets/admin/login/css/main.css') !!}

</head>
<body>


	<div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			{{ Form::open(['url'=>'users/login','method'=>'post','class'=>'login100-form validate-form']) }}
				<span class="login100-form-title p-b-37">
                    <li class="fa fa-user"></li>
					Sign In
				</span>

				<div class="form-group {{ $errors->has('user_email')?'has-error':'' }}">
                    <div class="wrap-input100 validate-input m-b-20" data-validate="Enter your email">
{{--                        {!! Form::email('user_email','',['class'=>'input100','placeholder'=>'username or email']) !!}--}}
                        <input class="input100" type="text" name="user_email" placeholder="Enter your email">
                        <span class="focus-input100"></span>
                        {!! $errors->first('user_email','<span style="color: red;">:message</span>') !!}
                    </div>
                </div>

                <div class="form-group {{ $errors->has('password')?'has-error':'' }}">
                    <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter your password">
                        <input class="input100" type="password" name="password" placeholder="password">
                        <span class="focus-input100"></span>
                        {!! $errors->first('password','<span style="color: red;">:message</span>') !!}
                    </div>
                </div>


				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit">
						Sign In
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="assets/admin/login//images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					<a href="#" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			{{ Form::close() }}

		</div>
	</div>



	<div id="dropDownSelect1"></div>
	{!! Html::script('assets/admin/login/vendor/jquery/jquery-3.2.1.min.js') !!}
	{!! Html::script('assets/admin/login/vendor/animsition/js/animsition.min.js') !!}
	{!! Html::script('assets/admin/login/vendor/bootstrap/js/popper.js') !!}
	{!! Html::script('assets/admin/login/vendor/bootstrap/js/bootstrap.min.js') !!}
	{!! Html::script('assets/admin/login/vendor/select2/select2.min.js') !!}
	{!! Html::script('assets/admin/login/vendor/daterangepicker/moment.min.js') !!}
	{!! Html::script('assets/admin/login/vendor/daterangepicker/daterangepicker.js') !!}
	{!! Html::script('assets/admin/login/vendor/countdowntime/countdowntime.js') !!}
	{!! Html::script('assets/admin/login/js/main.js') !!}

</body>
</html>