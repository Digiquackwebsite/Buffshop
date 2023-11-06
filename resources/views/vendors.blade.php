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
    <div id="NewVendor" class="popup-container">
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
                                    <h1 class="h4 text-gray-900 mb-4">Register on Buffshop</h1>
                          </div>
                           
                          <form class="user" id="vendor-form" method="POST" action="{{ route('vstore') }}">
                                @csrf
                                <div class="form-outline mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('brachname') ? ' is-invalid' : '' }}" 
                                            name="brachname" id="brachname" placeholder= "Branch Name" value="{{ old('brachname') }}" required>
                                                @if ($errors->has('brachname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brachname') }}</strong>
                                    </span>
                                                   @endif
                                        </div>
                                        <div class="form-outline mb-3">
                                        <input type="text" class="form-control form-control-user input-val {{ $errors->has('brachcode') ? ' is-invalid' : '' }}" 
                                            name="brachcode" id="brachcode" placeholder= "Branch Code" value="{{ old('brachcode') }}" required>
                                                @if ($errors->has('brachcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brachcode') }}</strong>
                                    </span>
                                                   @endif
                                        </div>
                                  
                                    <div class="form-outline mb-3">
                                      
                                        <input type="text" class="form-control form-control-user input-val {{ $errors->has('name') ? ' is-invalid' : '' }}"  
                                    name="name" id="name" placeholder= "Representative Name" value="{{ old('name') }}" required autofocus />
                                 @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                           
                                        </div>

                                        <div class="form-outline mb-3">
                                      
                                      <input type="text" class="form-control form-control-user input-val {{ $errors->has('phone') ? ' is-invalid' : '' }}"  
                          name="phone" id="phone" placeholder= "Phone Number" value="{{ old('phone') }}" required autofocus />
                               @if ($errors->has('phone'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                  </span>
                              @endif
                                         
                         </div> 
                                       
                                 
                         <div class="form-outline mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder= "Enter Email" value="" required/>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                            </div>
                            
                                    <div class="form-outline mb-3">
                                        <input type="password" class="form-control form-control-user input-val {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password" value="" required/>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                        <div class="form-outline mb-3">
                                        <input type="password" class="form-control form-control-user input-val {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" value="" required/>
                                        </div>
                                
                                        <button class="btn btn-primary btn-user btn-block py-2" type="submit">  Submit</button>
                            
                                           
                                        </form> 
                            </div>
                        </div>
                    </div>
                                                </div>
                        </div>
                    </div>
        <!-- Nested Row within Card Body end -->
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
                            <h1 class=" h3 text-gray-800">Manage Vendors
                            </h1>
                        </div>
                        <div>
                            <a href="#NewVendor" class="btn btn-primary btn-user btn-block">
                                New Vendor
                            </a>
                             
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-5">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <!-- <div>
                                <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
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
                                            <th>Sr.No</th>
                                            <th>Vendor Name</th>
                                            <th>Branch Code</th>
                                            <th>Email address</th>
                                            <th>User Name</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @foreach ($vendors as $key => $vendors)
                                    <tr>
                                  
                                    <td>{{ $vendors->Id }}</td>
                                    <td>{{ $vendors->Brachname }}</td>
                                    <td>{{ $vendors->Brachcode }}</td>
                                    <td>{{ $vendors->email }}</td>
                                    <td>{{ $vendors->name }}</td>
                                    <td>{{ $vendors->phone }}</td>
                                    
                                   
                                   
                               
                                    <td>
                                        <div class="d-flex">
                                        <a href="{{ route('vendors.edit', $vendors->Id) }}"  style="font-size:13px;"><button class="btn btn-primary pxy-2 mr-3 custom">Edit</button></a>
                                
                                                                    
                                    <form method="POST" action="{{ route('vendors.destroy', $vendors->Id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger p-2 mr-3 custom" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                    </div>
                                     <!-- <div class="btn-group">
                                                  <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <a href="#"><i class="fa fa-edit"></i></a>
                                                    
                                                  </button>
                                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item" href="#">Delete Vendor</a></li>
                                                        <li><a class="dropdown-item" href="#">Temporary Disable</a></li>
                                                        <li><a  class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Update Password &raquo;</a> </li>
                                                          
                                                      </ul>
                                              </div> 
                                              </td>  -->
                                   
                                    
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
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="user">
                <div class="form-outline mb-3">
                    <input type="password" id="form2Example22" placeholder="Password" class="form-control form-control-user" />
                </div>

                <div class="form-outline mb-3">
                <input type="password" id="form2Example23"  placeholder="Confirm Password" class="form-control form-control-user" />
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  



</body>
@include('layouts.style')
