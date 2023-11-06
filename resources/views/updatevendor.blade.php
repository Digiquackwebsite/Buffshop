
@include('layouts.header')
@include('layouts.style')


<body class="bg-gradient-primary">
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
                          name="brachname" id="brachname" placeholder= "Vendor Name" value="{{ $vendors->brachname }}" required autofocus />
                               @if ($errors->has('brachname'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('brachname') }}</strong>
                                  </span>
                              @endif
                                         
                                      </div>
                                        
                                        <div class="form-outline mb-3">
                                      
                                      <input type="text" class="form-control form-control-user input-val {{ $errors->has('brachcode') ? ' is-invalid' : '' }}"  
                          name="brachcode" id="brachcode" placeholder= "Branch Code" value="{{ $vendors->brachcode }}" readonly />
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
                                      
                                      <input type="text" class="form-control form-control-user input-val {{ $errors->has('email') ? ' is-invalid' : '' }}"  
                          name="email" id="email" placeholder= "Email" value="{{ $vendors->email }}" readonly>
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
                                
                                        <!-- <button class="btn btn-primary btn-user btn-block" type="submit">  Update</button> -->
                                        <div class="form-actions">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-danger" id="closeButton">Close</button>
    </div>
                                           
                                        </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
   </section>
</div>
</div>
<script>
    document.getElementById('closeButton').addEventListener('click', function() {
        window.location.href = '{{ route('closeForm') }}';
    });
</script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>