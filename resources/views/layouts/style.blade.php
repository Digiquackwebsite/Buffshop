<style>
  
    /* warrenty  style strt  */
    
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
    background-color: none !important;
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
/* end  popup css  vendors style end  */

/* vendors style strt  */

    
    #NewVendor .bg-register-img{
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
  background: none !important;;
}

.popup-content a.close{
  color: white;
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

/* warranty card form height css */

.card-body{
  height:100vh;
  overflow-y:auto;
}


.vendorcard-body{
  height:10vh;
  overflow-y:auto;
}

/* end  popup css   vendors style end  */
  
    </style>
    <!-- imagespopup on warrentycard strt -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<!-- imagespopup on warrentycard end -->
    <!-- Bootstrap Css 27oct2023 strt -->
    <link href="{{ URL::asset('leb/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css 27oct2023 end -->

<script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js "></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js "></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
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


    
