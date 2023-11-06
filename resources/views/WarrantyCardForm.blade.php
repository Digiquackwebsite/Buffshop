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
    <section id="warranty">
        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-img"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Warranty Cards form</h1>
                                </div>
                                <form class="user" id="warranty-form" method="POST" action="{{ route('wstore') }}">
                                @csrf
                              
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <input type="text" class="form-control form-control-user input-val {{ $errors->has('vehicalnumber') ? ' is-invalid' : '' }}" name="vehicalnumber" id="vehicalnumber"
                                                placeholder="Vehicle Number" value="{{ old('vehicalnumber') }}" required>
                                                @if ($errors->has('vehicalnumber'))
                                                   <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('vehicalnumber') }}</strong>
                                                    </span> 
                                                @endif
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('customername') ? ' is-invalid' : '' }}" name="customername" id="customername"
                                                placeholder="Customer Name" value="{{ old('customername') }}" required>
                                                @if ($errors->has('customername'))
                                                   <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('customername') }}</strong>
                                                    </span> 
                                                @endif
                                               
                                            </div>
                                            <div class="mb-3">

                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('branchcode') ? ' is-invalid' : '' }}" name="branchcode" id="branchcode"
                                                placeholder="Branch Code" value="{{ old('branchcode') }}" required>
                                                @if ($errors->has('branchcode'))
                                                   <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('branchcode') }}</strong>
                                                    </span> 
                                                @endif


                                               
                                            </div>
                                            <div class="mb-3">

                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder= "Email Address" value="" required/>
                                                @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif 

                                              
                                            </div>
                                            <div class="mb-3">

                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('phonenumber') ? ' is-invalid' : '' }}" name="phonenumber" id="phonenumber" placeholder= "Phone no" value="{{ old('phonenumber') }}" required/>
                                                @if ($errors->has('phonenumber'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('phonenumber') }}</strong>
                                                        </span>
                                                    @endif  
                                             
                                            </div>
                                            
                                        </div>


                                        
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <select onchange="showForm(this)">
                                                    <option selected >Service Availed</option>
                                                    <option value="form1">AMC</option>
                                                    <option value="form2">Ceramic Coating</option>
                                                    <option value="form3">PPF</option>
                                                </select>
                                                
                                                <div id="form1-form" class="dynamic-form">
                                                    <form>
                                                  
                                                    <label for="field5 ">Upload 4 image</label>
                                                    <input type="file" id="field1" name="field1 ">
                                                    <input type="file" id="field1" name="field1">
                                                    <input type="file" id="field1" name="field1">
                                                    <input type="file" id="field1" name="field1">
                                                    </form>
                                                   
                                                </div>
                                                
                                                <div id="form2-form" class="dynamic-form">
                                                    <form>
                                                 
                                                    <label for="field5">Upload 4 image</label>
                                                    <input type="file" id="field1" name="field1">
                                                    <input type="file" id="field1" name="field1">
                                                    <input type="file" id="field1" name="field1">
                                                    <input type="file" id="field1" name="field1">
                                                    </form>
                                                   
                                                </div>
                                                
                                                <div id="form3-form" class="dynamic-form">
                                                    <form>
                                                   
                                                    <label for="field5">Upload 4 image</label>
                                                    <input type="file" id="field1" name="field1">
                                                    <input type="file" id="field1" name="field1">
                                                    <input type="file" id="field1" name="field1">
                                                    <input type="file" id="field1" name="field1">
                                                    <div class="form-check pt-2">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                        <label class="form-check-label radio-font" for="flexRadioDefault1">
                                                        3 Year Warranty
                                                        </label>
                                                        </div>
                                                        <div class="form-check">
                                                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                                        <label class="form-check-label radio-font" for="flexRadioDefault2">
                                                      5 Year Warranty
                                                        </label>
                                                        </div>
                                                
                                                    <input type="text" class="form-control form-control-user mt-3" id="exampleLastName"
                                                    placeholder="PPF Roll Number">

                                                    </form>
                                                  
                                                </div> 
                                                <div class="mb-3 mt-3">
                                                  
                                                    <label for="start" class="px-3">Start date:</label>
                                                        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2025-12-31" class="form-control form-control-user" />
                                                      
                                                </div>
                                                <div class="mb-3 mt-3">
                                                      
                                                    <label for="start" class="px-3">End date:</label>
                                                    <input type="date" id="start" name="trip-end" value="2018-07-22" min="2018-01-01" max="2025-12-31" class="form-control form-control-user"/> 
                                                 
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <button class="btn btn-primary btn-user btn-block" type="submit">  Submit</button>
                                      
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
  </section>
   
    </head>
    <body>
     

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="leb/bootstrap/js/javascript.js" ></script>
    <script>
        function showForm(option) {
          var selectedForm = document.getElementById(option.value + "-form");
          var allForms = document.getElementsByClassName("dynamic-form");
    
          // Hide all forms
          for (var i = 0; i < allForms.length; i++) {
            allForms[i].style.display = "none";
          }
    
          // Show the selected form
          selectedForm.style.display = "block";
        }
      </script>

</body>

</html>