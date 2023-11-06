<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buffshop</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <section id="car">

        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-img"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <!-- <form class="user"> -->
                                <form class="user" id="login-form" method="POST" action="{{ route('storeregister') }}">
                                    
                                @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('brachname') ? ' is-invalid' : '' }}" 
                                            name="brachname" id="brachname" placeholder= "Branch Name" value="{{ old('brachname') }}" required>
                                                @if ($errors->has('brachname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brachname') }}</strong>
                                    </span>
                                                   @endif
                                        </div>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user input-val {{ $errors->has('brachcode') ? ' is-invalid' : '' }}" 
                                            name="brachcode" id="brachcode" placeholder= "Branch Code" value="{{ old('brachcode') }}" required>
                                                @if ($errors->has('brachcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brachcode') }}</strong>
                                    </span>
                                                   @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user input-val {{ $errors->has('name') ? ' is-invalid' : '' }}"  
                            name="name" id="name" placeholder= "Representative Name" value="{{ old('name') }}" required autofocus />
                                 @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                           
                                        </div>
                                        <!-- <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Phone no">
                                        </div> -->
                                    </div>
                                    <div class="form-group">
                                       
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder= "Email" value="" required/>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user input-val {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password" value="" required/>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user input-val {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" value="" required/>
                                        </div>
                                    </div>
                                   
                                    <button class="btn btn-primary btn-user btn-block" type="submit"> Register Account</button>
                                       
                                   
                                    <hr>
                                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a> -->
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('ForgetPasswordGet') }}">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
  </section>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>