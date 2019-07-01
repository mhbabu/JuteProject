<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>
    {!! Html::style('assets/admin/vendor/fontawesome-free/css/all.min.css') !!}
    {!! Html::style('assets/admin/css/sb-admin-2.min.css') !!}
</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                {{ Form::open(['url'=>'admin/login','method'=>'post','class'=>'user']) }}
                                    <div class="form-group {{ $errors->has('user_email')?'has-error':'' }}">
                                        {!! Form::email('user_email','',['class'=>'form-control form-control-user', 'id'=>'exampleInputEmail', 'aria-describedby'=>'emailHelp', 'placeholder'=>'Enter Email Address...']) !!}
                                        {!! $errors->first('user_email','<span class="help-block" style="color: red;">:message</span>') !!}
                                    </div>
                                    <div class="form-group {{ $errors->has('password')?'has-error':'' }}">
                                        {!! Form::password('password',['class'=>'form-control form-control-user', 'id'=>'exampleInputPassword', 'placeholder'=>'Password']) !!}
                                        {!! $errors->first('password','<span class="help-block" style="color: red;">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit('Login',['class'=>'btn btn-primary btn-user btn-block']) !!}
                                    </div>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                    </a>
                                {{ Form::close() }}
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
{!! Html::script('assets/admin/vendor/jquery/jquery.min.js') !!}
{!! Html::script('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}
{!! Html::script('assets/admin/vendor/jquery-easing/jquery.easing.min.js') !!}
{!! Html::script('assets/admin/js/sb-admin-2.min.js') !!}

</body>

</html>
