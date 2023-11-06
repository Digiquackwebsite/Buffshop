
@include('layouts.header')
@include('layouts.style')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

     
      <!-- Sidebar --> 

    @include('vendorsidebar')

<!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper">
     <!-- popup code form added strt -->
    <div id="NewWarrantyCard" class="popup-container">
     <div class="popup-content">
                <a href="#" class="close">&times;</a>

                 <!-- Nested Row within Card Body  strt-->
                  
    <section id="warranty">
        <div class="">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-img">

                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Add-New Warranty Card</h1>
                                </div>
            <form class="user" id="warranty-form" method="POST" action="{{ route('wstore') }}" enctype="multipart/form-data">
                                @csrf
                              
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                           
                                            <div class="mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('customername') ? ' is-invalid' : '' }}" 
                                            name="customername" id="customername" placeholder= "Customer Name" value="{{ old('customername') }}" required>
                                                @if ($errors->has('customername'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('customername') }}</strong>
                                    </span>
                                                   @endif
                                               
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('vehicalnumber') ? ' is-invalid' : '' }}" 
                                            name="vehicalnumber" id="vehicalnumber" placeholder= "Vehicle Number" value="{{ old('vehicalnumber') }}" required>
                                                @if ($errors->has('vehicalnumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('vehicalnumber') }}</strong>
                                    </span>
                                                   @endif
                                               
                                            </div>
                                            <div class="mb-3">
                                            <!-- <label for="vendor_name">Vendor Name</label> -->
                                            <select name="name" id="name">
                                                <option value="" data-brachcode="" selected>Select Vendor</option>
                                                @foreach ($vendors as $key => $vendor)
                                                    <option value="{{ $vendor['name'] }}" data-brachcode="{{ $vendor['brachcode'] }}">{{ $vendor['name'] }}</option>
                                                @endforeach
                                            </select>
                                              
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" name="brachcode" id="brachcode" placeholder= "Branch Code" class="form-control form-control-user" readonly>
                                            <!-- <input type="text" class="form-control form-control-user input-val {{ $errors->has('brachcode') ? ' is-invalid' : '' }}" 
                                            name="brachcode" id="brachcode" placeholder= "Branch Code" value="{{ old('brachcode') }}" required>
                                                @if ($errors->has('brachcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brachcode') }}</strong>
                                    </span>
                                                   @endif -->


                                               
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                            name="email" id="email" placeholder= "Email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                   @endif

                                           
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('phonenumber') ? ' is-invalid' : '' }}" 
                                            name="phonenumber" id="phonenumber" placeholder= "phonenumber" value="{{ old('phonenumber') }}" required>
                                                @if ($errors->has('phonenumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                                   @endif 
                                            
                                            </div>

                                            <div class="mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('chassinumber') ? ' is-invalid' : '' }}" 
                                            name="chassinumber" id="chassinumber" placeholder= "chassinumber" value="{{ old('chassinumber') }}" required>
                                                @if ($errors->has('chassinumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('chassinumber') }}</strong>
                                    </span>
                                                   @endif

                                          
                                             
                                            </div>
                                            <div class="mb-3">
                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('carmodel') ? ' is-invalid' : '' }}" 
                                            name="carmodel" id="carmodel" placeholder= "carmodel" value="{{ old('carmodel') }}" required>
                                                @if ($errors->has('carmodel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('carmodel') }}</strong>
                                    </span>
                                                   @endif

                                          
                                             
                                            </div>
                                            
                                        </div>


                                        
                                        <div class="col-sm-6">
                                            <div class="mb-3">

                                            
                                            <label for="service">Service Availed</label>
                                                <select  onchange="showWarrentyForm(this)" name="service" id="service">
                                                   
                                                   <option selected >Service Availed</option>
                                                    <option value="AMC">AMC</option>
                                                    <option value="CeramicCoating">CeramicCoating</option>
                                                    <option value="PPF">PPF</option>
                                                   
                                                </select>

                                                <div id="PPF-form" class="dynamic-form">
                                                  
                                                  <div class="form-check pt-2" class="dynamic-form">
                                                   <?php define('flexRadioDefault', 'some_value'); ?>
                                                         <input class="form-check-input" onclick="selectPPFYear(3)" type="radio" name="ppfyear" value="3" id="flexRadioDefault1" checked>
                                                         <label class="form-check-label radio-font" for="flexRadioDefault1">
                                                         3Yrs Warranty
                                                         </label>
                                                            </br>
                                                         <input class="form-check-input" onclick="selectPPFYear(5)" type="radio" name="ppfyear" value="5" id="flexRadioDefault2" >
                                                         <label class="form-check-label radio-font" for="flexRadioDefault2">
                                                         5Yrs Warranty
                                                         </label>
                                                         
                                                         <div class="mb-3">
                                                    <input type="text" class="form-control form-control-user input-val {{ $errors->has('ppfrollnumber') ? ' is-invalid' : '' }}" 
                                            name="ppfrollnumber" id="ppfrollnumber" placeholder= "ppfrollnumber" value="{{ old('ppfrollnumber') }}">
                                                @if ($errors->has('ppfrollnumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ppfrollnumber') }}</strong>
                                    </span>
                                                   @endif
                                                              </div>
                                                </div>
                                                    
                                              </div>
                                               
                                            </div>
                                                   
                                        <div class="mb-3">  
                                        <!-- <div class="dynamic-form" id="form1-form"> -->
                                        @foreach(['front', 'back', 'right', 'left','top','bottom'] as $position)
        <label for="{{ $position }}image">{{ ucfirst($position) }} Image:</label>
        <input type="file" name="{{ $position }}image"><br>
                        @endforeach
                                               
                                         <!-- </div> -->
                                            </div>
                                                
                                                
                                            <div class="mb-3">
                                                <div class="mb-3 mt-3">
                                                  
                                                    <label for="start_date" class="px-3">Start date:</label>
                                                        <input type="date" id="start_date" name="start_date" value="<?php echo date('Y-m-d') ?>" min="<?php echo date('Y-m-d') ?>" max="2025-12-31" class="form-control form-control-user" onchange="form1StartDate(event)" />
                                                      
                                                </div>
                                              <!-- <div id="result"></div> -->
                                                <div class="mb-3 mt-3">
                                                      
                                                      <label for="end_date" class="px-3">End date:</label>
                                                     
                                                      <!-- <p>Oneyear</p> -->
                                                  <input type="date" id="end_date" name="end_date" value="<?php echo date('Y-m-d',strtotime('5 year')) ?>" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d',strtotime('5 year')) ?>" class="form-control form-control-user"/> 
                                                   
                                                   
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
                            <h1 class=" h3 text-gray-800">Manage WarrantyCards
                            </h1>
                        </div>
                        <div>
                        <a href="#NewWarrantyCard" class="btn btn-primary btn-user btn-block">
                        Add-New Warranty Card
                            </a>
                            
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-5">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <!-- <div>
                                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            </div>
                            <div class="m-0 font-weight-bold text-primary">
                                <p class="excel"><a href="#">Export in excel</a></p>
                            </div> -->
                           
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Customer Name</th>
                                            <th>Vehicle Number</th>
                                            <th>Branch Code</th>
                                            <th>Email address</th>
                                            <th>Phone Number</th>
                                            <th>Chassi Number</th>
                                            <th>Car Model</th>
                                            <th>Service Availed</th>
                                            <th>PPF Roll Number</th>
                                            <th>FrontImage</th>
                                            <th>BackImage</th>
                                            <th>RightImage</th>
                                            <th>LeftImage</th>
                                            <th>TopImage</th>
                                            <th>BottomImage</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                           <th>Download PDF</th>
                                        </tr>
                                    </thead>
                              
                                    <tbody>
                                    @foreach ($warrantycards as $key => $warrantycards)
                                    <tr>
                                  
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $warrantycards->customername }}</td>
                                    <td>{{ $warrantycards->vehicalnumber }}</td>
                                    <td>{{ $warrantycards->brachcode }}</td>
                                    <td>{{ $warrantycards->email }}</td>
                                    <td>{{ $warrantycards->phonenumber }}</td>
                                    <td>{{ $warrantycards->chassinumber }}</td>
                                    <td>{{ $warrantycards->carmodel }}</td>
                                    <td>{{ $warrantycards->service }}</td>
                                    <td>
                                        @if($warrantycards->ppfrollnumber == NULL)
                                                NA
                                            @else
                                            {{ $warrantycards->ppfrollnumber }}
                                            @endif </td>
                                    <td> 
                                        <a class="image-link" href="{{ asset('' . $warrantycards->frontimage) }}" data-lightbox="cards">{{  str_replace('uploads/cards/', '', $warrantycards->frontimage) }}</a>
                                    </td>
                                    <td>
                                        <a class="image-link" href="{{ asset('' . $warrantycards->backimage) }}" data-lightbox="cards">{{  str_replace('uploads/cards/', '', $warrantycards->backimage) }}</a>
                                    </td>
                                    <td>
                                        <a class="image-link" href="{{ asset('' . $warrantycards->rightimage) }}" data-lightbox="cards">{{  str_replace('uploads/cards/', '', $warrantycards->rightimage) }}</a>
                                    </td>
                                    <td>
                                        <a class="image-link" href="{{ asset('' . $warrantycards->leftimage) }}" data-lightbox="cards">{{  str_replace('uploads/cards/', '', $warrantycards->leftimage) }}</a>
                                    </td>
                                    <td>
                                        <a class="image-link" href="{{ asset('' . $warrantycards->topimage) }}" data-lightbox="cards">{{  str_replace('uploads/cards/', '', $warrantycards->topimage) }}</a>
                                    </td>
                                    <td>
                                        <a class="image-link" href="{{ asset('' . $warrantycards->bottomimage) }}" data-lightbox="cards">{{  str_replace('uploads/cards/', '', $warrantycards->bottomimage) }}</a>
                                    </td>
                                    <td>{{ $warrantycards->start_date }}</td>
                                    <td>{{ $warrantycards->end_date }}</td>
                                    <!-- <td><button id="generate-pdf">Download PDF</button></td> -->
                                    <td><a href="{{ url('/pdf-warrenty-card/'.$warrantycards->id) }}" target="_blank" rel="noopener noreferrer" download>DownLoad PDF</a></td>
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
 <!-- start added to startenddate  -->
 <script>
 function showWarrentyForm(option) {
// debugger;
          var selectedForm = document.getElementById(option.value + "-form");
          console.log(option.value, 'reached here11111');
        //   var allForms = document.getElementsByClassName("dynamic-form");
    
        //   // Hide all forms
        //   for (var i = 0; i < allForms.length; i++) {
        //     allForms[i].style.display = "none";
        //   }
    
          // Show the selected form
          
          const startDate = new Date($('#start_date').val());
          console.log(startDate);
          var year = 1;
          if(option.value == 'AMC'){
            $('#PPF-form').hide();
            year = 1;

          }
          else if(option.value == 'CeramicCoating'){
            $('#PPF-form').hide();
            year = 1;
          }else if(option.value == 'PPF'){
            $('#PPF-form').show();
            year = 3;

          }

            // Add 3 years to the start date
            startDate.setFullYear(startDate.getFullYear() + year);

            // Format the new date as 'yyyy-MM-dd' for the end date input
            const endDate = startDate.toISOString().split('T')[0];

            // Update the end date input field
            $('#end_date').val(endDate);
       }

       function selectPPFYear(year){
          console.log(year);

            // Get the selected start date from the input field
            const startDate = new Date($('#start_date').val());
             console.log(startDate);

            // Add 3 years to the start date
            startDate.setFullYear(startDate.getFullYear() + year);

            // Format the new date as 'yyyy-MM-dd' for the end date input
            const endDate = startDate.toISOString().split('T')[0];

            // Update the end date input field
            $('#end_date').val(endDate);


       }


        function form1StartDate(e){
            //console.log(e.target.value);

            // Define the input date as a string in the format "YYYY-MM-DD"
            const inputDateStr = e.target.value;
            console.log(inputDateStr);
            // Create a new Date object using the input date
            const inputDate = new Date(inputDateStr);
            console.log(inputDate);
            // Add one year to the input date
            inputDate.setFullYear(inputDate.getFullYear() + 1);

            // Get the result as a string in the format "YYYY-MM-DD"
            const resultDateStr = inputDate.toISOString().split('T')[0];

           
            $('#end_date').val(resultDateStr);
            $('#end_date').setAttribute("min", inputDateStr);
            $('#end_date').setAttribute("max", '');
            $('#end_date').setAttribute("max", resultDateStr);
         
        }

              


             //end  added to startenddate  

    </script>
   
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
</script>

<!--autopopulate brachcode when select vendor name strt -->
<script>
    $(document).ready(function () {

      


        $('#name').change(function (event) {

              // Get the <select> element
var selectElement = document.getElementById("name");

// Get the selected option
var selectedOption = selectElement.options[selectElement.selectedIndex];

// Get the value of a specific attribute (e.g., data-custom-attribute)
var customAttribute = selectedOption.getAttribute("data-brachcode");
 $('#brachcode').val(customAttribute);
console.log("Selected Option's Custom Attribute: " + customAttribute);

        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('form');
        const submitButton = form.querySelector('button[type="submit"]');
       // console.log("Selected Option's Custom Attribute: " + submitButton);
        form.addEventListener('submit', function (event) {
            if (form.querySelectorAll('.error').length > 0) {
                event.preventDefault(); // Prevent form submission
                // You can also display an error message here if needed
            }
        });
    });


</script>
<!--autopopulate brachcode when select vendor name end -->

