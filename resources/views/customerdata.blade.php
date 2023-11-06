@include('layouts.header')
@include('layouts.style')
   

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar --> 

      @include('sidebar')

<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper">

           <!-- popup code form added strt -->
    <div id="NewCustomer" class="popup-container">
    <div class="popup-content">
                <a href="#" class="close">&times;</a>

                 <!-- Nested Row within Card Body  strt-->
                   <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                 <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-img"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Customer</h1>
                                </div>
                                <form class="user" id="customer-form" method="POST" action="{{ route('cstore') }}">
                                @csrf
                                <div class="form-outline mb-3">
                                      
                                      <input type="text" class="form-control form-control-user input-val {{ $errors->has('name') ? ' is-invalid' : '' }}"  
                          name="name" id="name" placeholder= "Customer Name" value="{{ old('name') }}" required autofocus />
                               @if ($errors->has('name'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                                         
                                      </div>

                                            <div class="form-outline mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('phone') ? ' is-invalid' : '' }}"  
                          name="phone" id="phone" placeholder= "Customer Mobile" value="{{ old('phone') }}" required autofocus />
                               @if ($errors->has('phone'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                              @endif
                                            </div>
                            
                                            <div class="form-outline mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder= "Customer Email" value="" required/>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                            <div class="form-outline mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('mileage') ? ' is-invalid' : '' }}"  
                                                    name="mileage" id="mileage" placeholder= "Vehicle Mileage at time of Treatment" value="{{ old('mileage') }}" required autofocus />
                                                        @if ($errors->has('mileage'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('mileage') }}</strong>
                                                            </span>
                                                        @endif
                                            </div>
                            
                                            <div class="form-outline mb-3">
                                                
                                                <input type="text" class="form-control form-control-user input-val {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="address" placeholder= "Address" value="" required/>
                            @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                            </div>
                                            
                                            <div class="form-outline mb-3">
                                               
                                                <input type="text" class="form-control form-control-user input-val {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="city" placeholder= "City" value="" required/>
                            @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                                            </div>
                            
                                            <div class="form-outline mb-3">
                                              
                                                <input type="text" class="form-control form-control-user input-val {{ $errors->has('postcode') ? ' is-invalid' : '' }}" name="postcode" id="postcode" placeholder= "Postcode" value="" required/>
                            @if ($errors->has('postcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                @endif
                                            </div>
                            
                            <button class="btn btn-primary btn-user btn-block" type="submit">  Submit</button>
                                        </form> 
                            </div>
                        </div>
                    </div>
                                                </div>
                        </div>
                    </div>
                      <!-- Nested Row within Card Body end  -->
    </div>
    </div>
      <!-- popup code form added end -->



            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h1 class=" h3 text-gray-800">Manage Customers
                            </h1>
                        </div>
                        <div>
                            <a href="#NewCustomer" class="btn btn-primary btn-user btn-block">
                                Customers
                            </a>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-5">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <!-- <div>
                                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            </div> -->
                            <!-- <div class="m-0 font-weight-bold text-primary">
                                <p class="excel"><a href="#">Export in excel</a></p>
                            </div> -->
                           
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Sr.No</td>
                                            <td>Customer Name</td>
                                            <td>Customer Mobile</td>
                                            <td>Customer Email</td>
                                            <td>Vehicle Mileage At <br>Time of Treatment </td>
                                            <td>Address</td>
                                            <td>City</td>
                                            <td>Postcode</td>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <td>Sr.No</td>
                                                <td>Customer Name</td>
                                                <td>Customer Mobile</td>
                                                <td>Customer Email</td>
                                                 <td>Vehicle Mileage At <br>Time of Treatment </td>
                                                <td>Address</td>
                                                <td>City</td>
                                                <td>Postcode</td>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                    @foreach ($customers as $key => $customers)
                                    <tr>
                                  
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $customers->name }}</td>
                                    <td>{{ $customers->phone }}</td>
                                    <td>{{ $customers->email }}</td>
                                    <td>{{ $customers->mileage }}</td>
                                    <td>{{ $customers->address }}</td>
                                    <td>{{ $customers->city }}</td>
                                    <td>{{ $customers->postcode }}</td>
                                  
                                     </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 

</body>

@include('layouts.style')
