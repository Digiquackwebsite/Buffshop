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

    <!-- Bootstrap Css -->
    <link href="leb/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

      <!-- Custom styles for this page -->
      <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
         
<style>
    
      #NewWarrantyCard .bg-register-img{
    background: url("../img/service-bg.jpg");
    background-position: center;
    background-size: cover;
    background-repeat:no-repeat;
}
        /* strt  popup css  */
.popup-container {
    visibility: hidden;
    opacity: 0;
    transition: all 0.3s ease-in-out;
    transform: scale(1.3);
    position: fixed;
    z-index: 7;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(21, 17, 17, 0.61);
    display: flex;
    align-items: center;
}
.popup-content {
    background-color: #fefefe;
    margin: auto;
    width:80%;
    border-radius: 10px;
}

.popup-content a.close{
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    background: none;
    padding: 0;
    margin: 6px 10px 0 0;
    text-decoration:none;
}

.popup-content a.close:hover{
  color:#333;
}

.popup-container:target{
  visibility: visible;
  opacity: 1;
  transform: scale(1);
}
/* end  popup css  */
    </style>
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     
      <!-- Sidebar --> 

    @include('sidebar')

<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper">

                  
                 <section id="register">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-img"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Update Your Details</h1>
                        </div>
                        <form method="POST" action="{{ route('vendors.update', $vendors->Id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-outline mb-3">
                                    <input type="text" class="form-control form-control-user input-val {{ $errors->has('brachname') ? ' is-invalid' : '' }}" 
                                    name="brachname" id="brachname" placeholder= "Branch Name" value="{{ $vendors->Brachname }}" required>
                                        @if ($errors->has('brachname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('brachname') }}</strong>
                            </span>
                                           @endif
                                </div>
                                <div class="form-outline mb-3">
                                <input type="text" class="form-control form-control-user input-val {{ $errors->has('brachcode') ? ' is-invalid' : '' }}" 
                                    name="brachcode" id="brachcode" placeholder= "Branch Code" value="{{ $vendors->Brachcode }}" required>
                                        @if ($errors->has('brachcode'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('brachcode') }}</strong>
                            </span>
                                           @endif
                                </div>
                          
                            <div class="form-outline mb-3">
                              
                                <input type="text" class="form-control form-control-user input-val {{ $errors->has('name') ? ' is-invalid' : '' }}"  
                    name="name" id="name" placeholder= "Representative Name" value="{{ $vendors->name }}" required autofocus />
                         @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                                   
                                </div>

                                <div class="form-outline mb-3">
                              
                              <input type="text" class="form-control form-control-user input-val {{ $errors->has('phone') ? ' is-invalid' : '' }}"  
                  name="phone" id="phone" placeholder= "Phone Number" value="{{ $vendors->phone }}" required autofocus />
                       @if ($errors->has('phone'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                      @endif
                                 
                              </div> 
                               
                         
                            <div class="form-outline mb-3">
                               
                                    <input type="text" class="form-control form-control-user input-val {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder= "Email" value="" required/>
                    @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                            </div>
                          
                            <!-- <div class="form-outline mb-3">
                                <input type="password" class="form-control form-control-user input-val {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password" value="" required/>
                    @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                                </div>
                                <div class="form-outline mb-3">
                                <input type="password" class="form-control form-control-user input-val {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" value="" required/>
                                </div> -->
                        
                                <button class="btn btn-primary btn-user btn-block" type="submit">  Update</button>
                    
                                   
                                </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</section>
                                      


            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- start added to startenddate  -->
   
      <!--end  added to startenddate  -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

      <!-- Page level plugins -->
      <script src="vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
      <!-- Page level custom scripts -->
      <script src="js/demo/datatables-demo.js"></script>

    <script src="leb/bootstrap/js/javascript.js" ></script>


    

   
      
</body>

</html>