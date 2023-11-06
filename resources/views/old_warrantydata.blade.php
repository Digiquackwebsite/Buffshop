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
     <!-- popup code form added strt -->
    <div id="NewWarrantyCard" class="popup-container">
     <div class="popup-content">
                <a href="#" class="close">&times;</a>

                 <!-- Nested Row within Card Body  strt-->
                  
    <section id="warranty">
        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-img">

                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Warranty Cards</h1>
                                </div>
                                <form class="user" id="warranty-form" method="POST" action="{{ route('wstore') }}">
                                @csrf
                              
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                           
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
                                                <input type="text" class="form-control form-control-user input-val {{ $errors->has('vehicalnumber') ? ' is-invalid' : '' }}" name="vehicalnumber" id="vehicalnumber"
                                                placeholder="Vehicle Number" value="{{ old('vehicalnumber') }}" required>
                                                @if ($errors->has('vehicalnumber'))
                                                   <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('vehicalnumber') }}</strong>
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

                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder= "Customer Email Address" value="" required/>
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

                                            <div class="mb-3">

                                            <input type="text" class="form-control form-control-user input-val {{ $errors->has('chassinumber') ? ' is-invalid' : '' }}" name="chassinumber" id="chassinumber" placeholder= "Chassi no" value="{{ old('chassinumber') }}" required/>
                                                @if ($errors->has('chassinumber'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('chassinumber') }}</strong>
                                                        </span>
                                                    @endif  
                                             
                                            </div>
                                            
                                        </div>


                                        
                                        <div class="col-sm-6">
                                            <div class="mb-3">

                                            
                                              <label for="service">Service Availed</label>
                                                <select  onchange="showForm(this)" name="service" id="service">
                                                   
                                                   <option selected >Service Availed</option>
                                                    <option value="form1">AMC</option>
                                                    <option value="form2">Ceramic Coating</option>
                                                    <option value="form3">PPF</option>
                                                   
                                                </select>
                                                <div id="form1-form" class="dynamic-form">
                                                    <form>
                                                  
                                                    <label for="field5 ">Upload 4 image</label></br>
                                                    <span>Select Front Image</span>
                                                    <input type="file" id="frontimage" name="frontimage" title = "Front" required>
                                                    <span>Select Back Image</span>
                                                    <input type="file" id="backimage" name="backimage" required>
                                                    <span>Select Left Image</span>
                                                    <input type="file" id="rightimage" name="rightimage" required>
                                                    <span>Select Right Image</span>
                                                    <input type="file" id="leftimage" name="leftimage" required>
                                                    </form>
                                                   
                                                </div>

                                                 <div id="form2-form" class="dynamic-form">
                                                    <form>
                                                 
                                                    <label for="field5">Upload 4 image</label></br>
                                                    <span>Select Front Image</span>
                                                    <input type="file" id="frontimage" name="frontimage" title = "Front" required>
                                                    <span>Select Back Image</span>
                                                    <input type="file" id="backimage" name="backimage" required>
                                                    <span>Select Left Image</span>
                                                    <input type="file" id="rightimage" name="rightimage" required>
                                                    <span>Select Right Image</span>
                                                    <input type="file" id="leftimage" name="leftimage" required>
                                                    </form>
                                                   
                                                </div>

                                                <div id="form3-form" class="dynamic-form">
                                                  
                                                    <div class="form-check pt-2" class="dynamic-form">
                                                     <?php define('flexRadioDefault', 'some_value'); ?>
                                                           <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                           <label class="form-check-label radio-font" for="flexRadioDefault1">
                                                           3Yrs Warranty
                                                           </label>
                                                           &nbsp;&nbsp;
                                                             &nbsp;&nbsp;
                                                           <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                                           <label class="form-check-label radio-font" for="flexRadioDefault2">
                                                           5Yrs Warranty
                                                           </label>
                                                           
                                                           <div class="mb-3">
                                                       <input type="text" class="form-control form-control-user input-val {{ $errors->has('ppfrollnumber') ? ' is-invalid' : '' }}" id="ppfrollnumber"
                                                       placeholder="PPF Roll Number">
                                                       @if ($errors->has('ppfrollnumber'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('ppfrollnumber') }}</strong>
                                                        </span>
                                                      @endif  
                                                                </div>
                                                  </div>

                                                  <!-- <div class="mb-3">   -->
                                            
                                                    <form>
                                                    <label for="field5 ">Upload 4 image</label></br>
                                                    <span>Select Front Image</span>
                                                    <input type="file" id="frontimage" name="frontimage" title = "Front" required>
                                                    <span>Select Back Image</span>
                                                    <input type="file" id="backimage" name="backimage" required>
                                                    <span>Select Left Image</span>
                                                    <input type="file" id="rightimage" name="rightimage" required>
                                                    <span>Select Right Image</span>
                                                    <input type="file" id="leftimage" name="leftimage" required>
                                                    </form>
                                                <!-- </div> -->
                                           
                                                      
                                                </div>


                                            </div>
                                                   
                                        
                                                
                                                
                                                
                                           

                                                
                                            <div class="mb-3">
                                                <div class="mb-3 mt-3">
                                                  
                                                    <label for="start_date" class="px-3">Start date:</label>
                                                        <input type="date" id="start_date" name="trip-start" value="<?php echo date('Y-m-d') ?>" min="<?php echo date('Y-m-d') ?>" max="2025-12-31" class="form-control form-control-user" onchange="form1StartDate(event)" />
                                                      
                                                </div>
                                              <!-- <div id="result"></div> -->
                                                <div class="mb-3 mt-3">
                                                      
                                                      <label for="end_date" class="px-3">End date:</label>
                                                      @if(flexRadioDefault === "Radio3")
                                                      <p>3year</p>
                                                  <input type="date" id="end_date" name="trip-end" value="<?php echo date('Y-m-d',strtotime('3 year')) ?>" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d',strtotime('3 year')) ?>" class="form-control form-control-user"/> 
                                                  @elseif(flexRadioDefault === "Radio5")
                                                      <p>5year</p>
                                                  <input type="date" id="end_date" name="trip-end" value="<?php echo date('Y-m-d',strtotime('3 year')) ?>" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d',strtotime('3 year')) ?>" class="form-control form-control-user"/> 
                                                      @else
                                                      <!-- <p>Oneyear</p> -->
                                                  <input type="date" id="end_date" name="trip-end" value="<?php echo date('Y-m-d',strtotime('1 year')) ?>" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d',strtotime('1 year')) ?>" class="form-control form-control-user"/> 
                                                      @endif
                                                   
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
                        New Warranty Card
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
                                            <th>Service Availed</th>
                                            <th>FrontImage</th>
                                            <th>BackImage</th>
                                            <th>RightImage</th>
                                            <th>LeftImage</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                           <th>Download PDF</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Customer Name</th>
                                            <th>Vehicle Number</th>
                                            <th>Branch Code</th>
                                            <th>Email address</th>
                                            <th>Phone Number</th>
                                            <th>Chassi Number</th>
                                            <th>Service Availed</th>
                                            <th>FrontImage</th>
                                            <th>BackImage</th>
                                            <th>RightImage</th>
                                            <th>LeftImage</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Download PDF</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($warrantycards as $key => $warrantycards)
                                    <tr>
                                  
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $warrantycards->customername }}</td>
                                    <td>{{ $warrantycards->vehicalnumber }}</td>
                                    <td>{{ $warrantycards->branchcode }}</td>
                                    <td>{{ $warrantycards->email }}</td>
                                    <td>{{ $warrantycards->phonenumber }}</td>
                                    <td>{{ $warrantycards->chassinumber }}</td>
                                    <td>{{ $warrantycards->serviceavailed }}</td>
                                    <!-- <td><img src="data:image/jpeg;base64,{{ base64_encode($warrantycards->frontimage) }}" alt="{{ $warrantycards->frontimage }}"></td> -->
                                    <td>{{ $warrantycards->frontimage }}</td>
                                    <td>{{ $warrantycards->backimage }}</td>
                                    <td>{{ $warrantycards->rightimage }}</td>
                                    <td>{{ $warrantycards->leftimage }}</td>
                                    <td>{{ $warrantycards->start_date }}</td>
                                    <td>{{ $warrantycards->end_date }}</td>
                                    <td><button onclick="generatePDF(this)">Download</button></td>
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
     <script>
        function showForm(option) {
          var selectedForm = document.getElementById(option.value + "-form");
          console.log(selectedForm, option.value, 'reached here');
          var allForms = document.getElementsByClassName("dynamic-form");
    
          // Hide all forms
          for (var i = 0; i < allForms.length; i++) {
            allForms[i].style.display = "none";
          }
    
          // Show the selected form
          selectedForm.style.display = "block";
  
          if(option.value == 'form1'){

            var start_date =  $('#start_date').val();
            console.log(start_date);
          }




        }


        function form1StartDate(e){
            console.log(e.target.value);

            // Define the input date as a string in the format "YYYY-MM-DD"
            const inputDateStr = e.target.value;

            // Create a new Date object using the input date
            const inputDate = new Date(inputDateStr);

            // Add one year to the input date
            inputDate.setFullYear(inputDate.getFullYear() + 1);

            // Get the result as a string in the format "YYYY-MM-DD"
            const resultDateStr = inputDate.toISOString().split('T')[0];

            
            $('#end_date').val(resultDateStr);
            $('#end_date').attr("min", inputDateStr);
            $('#end_date').attr("max", '');
            $('#end_date').attr("max", resultDateStr);
        }


          // Get all radio buttons strt
          const radioButtons = document.querySelectorAll('input[name="flexRadioDefault"]');
            const resultDiv = document.getElementById('result');
        
            // Add a change event listener to each radio button
            radioButtons.forEach(radioButton => {
                radioButton.addEventListener('change', () => {
            // Check which radio button is selected and display a message
            if (radioButton.checked) {
                
                const selectedOption = radioButton.value;
                 console.log(selectedOption);
                resultDiv.innerHTML = `selected ${selectedOption}`;

                
                
            }
        });
        }); 
                    // Get all radio buttons end

                //    pdf download strt
                        function generatePDF(button) {
                    // Get the row containing the data
                    var row = button.closest('tr');
                                                        
                    // Get the data from the row
                    var name = row.cells[0].textContent;
                    var vehicalnumber = row.cells[1].textContent;
                    var branchcode = row.cells[2].textContent;
                    var email = row.cells[2].textContent;
                    var phonenumber = row.cells[1].textContent;
                    var chassinumber = row.cells[1].textContent;
                    var startdate = row.cells[1].textContent;
                    var enddate = row.cells[1].textContent;
                    var service = row.cells[1].textContent;
                    
                    
                    
                    
                    // Create a new PDF document
                    var doc = new jsPDF();
                    
                    // Add content to the PDF
                    doc.text(`Name: ${name}`, 10, 10);
                    doc.text(`vehicalnumber: ${vehicalnumber}`, 10, 20);
                    doc.text(`branchcode: ${branchcode}`, 10, 30);
                    doc.text(`Email: ${email}`, 10, 30);
                    doc.text(`phonenumber: ${phonenumber}`, 10, 30);
                    doc.text(`chassinumber: ${chassinumber}`, 10, 30);
                    doc.text(`startdate: ${startdate}`, 10, 30);
                    doc.text(`enddate: ${enddate}`, 10, 30);
                    doc.text(`service: ${service}`, 10, 30);
                
                    
                    // Save the PDF with a unique name
                    var fileName = `${name}_details.pdf`;
                    doc.save(fileName);
                }

                //    pdf download end



    </script>
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