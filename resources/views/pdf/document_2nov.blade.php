<!DOCTYPE html> 
<html> 
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
   <style> 
 /* / column-one strt / */
 .column-one
 {
    width:100%;
  padding:1px;
  text-align:center;
  background: white;
  color: black;
 }
 .column-one tbody{
    padding: 20px;
    border: 1px dashed #50a9dc;
    display: inline-block;


}
 /* / column-one end / */

 /* / column-two strt / */
    .term-table {
        width:100%;
  padding:15px;
  text-align:center;
  background: #0e2c3d;
  color: white;
}
.term-table tbody{
    padding: 20px;
    border: 1px dashed #50a9dc;
    display: inline-block;


}
.term-table tr td h5{
    font-size:18px;
    margin:30px 0 50px;
}
.term-table tr td p{
    font-size:17px;
    line-height:26px;
}
.term-heading 
{
            color: #50a9dc;
        }
       
        .image img
{
          mix-blend-mode:lighten; 
          position: relative;
          margin:0 0 20px 0;
        }
        .image div{
            position: relative;
            display: inline-block;
        }

        .image div:before {
    content: '';
    width: 200px;
    height: 2px;
    background: #50a9dc;
    position: absolute;
    left: -214px;
    top: 36%;
}
.image div:after {
    content: '';
    width: 200px;
    height: 2px;
    background: #50a9dc;
    position: absolute;
    right: -214px   ;
    top: 36%;
}

        .term-table tr td i{
            margin: 5px;
            color: #1d9adf;
        }
/* / column-two end / */

/* / column-three strt / */
.term-coating
        {
            color: #ffffff; 
        }
        .inner-table
        {
            background: #1d9adf;  
        }
        / column-three end /

        .main-table{
            width:100%;
            height:100vh;
        }
        .main-table .main-table-col{
            width:50%;
        }
        /* customer detasil strt */
        .custmor-table{
            width:100%;
            border: 1px dashed black;
            padding:30px;
        }
        .customer-table-para
        {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap:nowrap;
            background: #2e84b5;
            color: white;
        }
        .customer-table-heading
        {
            color: #50a9dc;
        }
        /*  */
        #customer-details-section .customer-details .customer-details-heading {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap:nowrap;
        }
        #customer-details-section .customer-details .customer-details-heading h1{
            color: #50a9dc;
        }
        #customer-details-section .customer-details .customer-details-heading p{
            padding: 5px 10px;
            background: #50a9dc;
            color: white;
        }
        /*  */
      .ins-table, .ins-table tr td  {
  border: 1px solid black;
  border-collapse: collapse;
}

 .inner-table tr td  {
 border:none;
  border-collapse: collapse;
}
         .field-data{
            border-bottom: 1px solid lightgrey;
            padding: 10px 0 0;
            display: block;
            width: 100%;
        }

        .inner-table .inspection-data{
            border-bottom: 1px solid lightgrey;
            padding: 10px 0 0;
            display: block;
            width: 100%;
        }
     
        .inspection-list{
            padding: 3px 30px;
    position: relative;
    background: #0e2c3d;
    top: -25px;
    left: 15%;
    right: 15%;
    font-size: 18px;
    color: white;
        }
      
/* #customer-details-section .inspection-details .inspection-details-wrapper{
            display: flex;
            flex-wrap:nowrap;
        }
        #customer-details-section .inspection-details .inspection-details-wrapper .inspection-col{
            width: 50%;
            border: 1px solid black;
            padding: 10px 20px 40px 20px;
            text-align: center;
        } */
       
        .inspection-details-wrapper .inspection-col .inspection-col-data{
            text-align: left;
            padding-top: 10px;
            display: flex;
            gap:10px;
            flex-wrap:nowrap;
        }
        .inspection-details-wrapper .inspection-col .inspection-col-data .inspection-name{
            width: 100%;
        }
       .inspection-details-wrapper .inspection-col .inspection-col-data .inspection-data{
            border-bottom: 1px solid lightgray;
            width: 100%;
        }
        .details
        {
            text-align: center;
        }
        table{
            border:none;
            border-spacing: 0;
        }
        table tr th{
            width: 33.33%;
            
        }
        table tr .background-clr{
            background-color: #0e2c3d;
            color: white;
           position:relative;
          bottom:2px;
        }
        table tr td{
            text-align: left;
        }
        .ins-row .ins-data{
            width: 30%;
        }
        .ins-row .ins-data:nth-child(2){
            width: 70%;
        }
        table .border-1{
            border: 1px solid #000;
        }
        td.ins-data.border-bottom {
             border-bottom: 1px dashed;
             margin-bottom:20px;
            }

             .ins-row .ins-data {
               
              width: 15%;
             padding: 10px 0px 0px 0;
}

.table-spacing{
    padding: 20px 0;
}
/* customer detail end */
   </style>

</head>

<body>

<table class="custmor-table"> 
        
        <tr> 
                <td class="customer-table-heading"> 
                    <label> 
                    <h1>Customer Details &nbsp;</h1> 
                    </label> 
                </td> 
                <td>    <p class="customer-table-para">TO BE RETAINED BY CUSTOMER</p> 
                </td> 
            </tr> 
            <tr> 
                <td> 
                    <label for="name"> 
                    Name of Owner : 
                    </label> 
                </td> 
                <td>  <span class="field-data">{{ $customername }}</span>
                </td> 
            </tr> 
            <tr> 
            <td> 
                    <label for="name"> 
                    Car Model Year : 
                    </label> 
                </td> 
                <td>  <span class="field-data">{{ $carmodel }} </span>
                </td> 
            </tr> 
            <tr> 
            <td> 
                    <label for="name"> 
                    Vehicle Number : 
                    </label> 
                </td> 
                <td>  <span class="field-data">{{ $vehicalnumber }} </span>
                </td> 
            </tr> 
            <tr> 
            <td> 
                    <label for="name"> 
                    Treatment Date :
                    </label> 
                </td> 
                <td>  <span class="field-data">{{ $start_date }} </span>
                </td> 
            </tr> 
            <tr> 
            <td> 
                    <label for="name"> 
                    Assurance Period:
                    </label> 
                </td> 
                <td>  <span class="field-data">{{ $start_date }} / {{ $end_date }} </span>
                </td> 
            </tr> 
            
       
    </table>
    
    <br><br><h1 class="details">INSPECTION DETAILS</h1> 
  <!-- extra strt -->
  <table width="100%">
        <tr>
            <th class="border-1">
                <table width="100%" >
                    <tr>
                        <th></th>
                        <th class="background-clr">1st Inspection</th>
                        <th><h1></h1></th>
                    </tr>
                    
                </table>
                <table width="100%" class="table-spacing">
                    <tr class="ins-row">
                        <td class="ins-data">Due Date:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                    <tr class="ins-row">
                        <td class="ins-data">Inspection Date:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                    <tr class="ins-row">
                        <td class="ins-data">Signature:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                </table>
            </th>
            <th class="border-1">
                <table width="100%" >
                    <tr>
                        <th></th>
                        <th class="background-clr">2nd Inspection</th>
                        <th><h1></h1></th>
                    </tr>
                    
                </table>
                <table width="100%" class="table-spacing">
                    <tr class="ins-row">
                        <td class="ins-data">Due Date:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                    <tr class="ins-row">
                        <td class="ins-data">Inspection Date:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                    <tr class="ins-row">
                        <td class="ins-data">Signature:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                </table>
            </th>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <th class="border-1">
                <table width="100%" >
                    <tr>
                        <th></th>
                        <th class="background-clr">3rd Inspection</th>
                        <th><h1></h1></th>
                    </tr>
                    
                </table>
                <table width="100%" class="table-spacing">
                    <tr class="ins-row">
                        <td class="ins-data">Due Date:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                    <tr class="ins-row">
                        <td class="ins-data">Inspection Date:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                    <tr class="ins-row">
                        <td class="ins-data">Signature:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                </table>
            </th>
            <th class="border-1">
                <table width="100%" >
                    <tr>
                        <th></th>
                        <th class="background-clr">4th Inspection</th>
                        <th><h1></h1></th>
                    </tr>
                    
                </table>
                <table width="100%" class="table-spacing">
                    <tr class="ins-row">
                        <td class="ins-data">Due Date:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                    <tr class="ins-row">
                        <td class="ins-data">Inspection Date:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                    <tr class="ins-row">
                        <td class="ins-data">Signature:</td>
                        <td class="ins-data border-bottom"><p></p></td>
                    </tr>
                </table>
            </th>
        </tr>
    </table>
  <!-- extra end -->

  <br><br>

  <!-- term and cosdition strt-->    
<table border="1" bordercolor="blue" class="main-table"> 
        <tr> 
            <td class="main-table-col"> column 1
                <table class="column-one">   
                    <tbody>
                    <tr>
                        <td>
                        <div><img src="img/logo.png" alt="footer-logo" width="100px"></div>
                        </td>
                    </tr>

                    <tr>
                        <td><img src="img/linkdin.png" alt="footer-logo" width="25px">
                        <img src="img/instagram.png" alt="footer-logo" width="25px">@the_buffshop | 
                        <img src="img/fb.png" alt="footer-logo" width="25px">the_buffshop |
                        <img src="img/fb.png" alt="footer-logo" width="25px">the_buffshop.in
                    
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td> 
            <td class="main-table-col">column 2
                <table class="term-table">   
                <tbody>
                    <tr>
                
                        <td>

                        <h1 class="term-heading">Terms and Conditions</h1>

                        <hr>
                

                    <h5>In the Event of a defect in the treatment & Subject to the conditions below having met, the damaged areas will be re-treated.  </h5>

                    <p>1. The customer shall have the treated car inspected once every 6 months during the entire applicable warranty period. </br> &nbsp;&nbsp;&nbsp;&nbsp;(1 year 2 inspections I 2 year - 4 inspections)</p>

                    <p>2. The warranty is rendered invalid in the event of an accident or if the car is Diesel washed or steam washed.</p>
                    <p>3. The vehicle should be washed by a wet micro fibre cloth using clean water.</p>
                    <p>4. The car should not be washed using hard water or bore well water, incase washed, the warranty will be void.</p>
                    <p>5. If the paint surface is scrapped, scratched or in any way damaged, the owner shall be required to have it inspected & treatment reapplied. 
                    The cost of such treatment & labour cost incurred, shall be borne by the owner. </p>
                    <p>6. This card has to be retained for the entire warranty period. In case of the loss of warranty card the warranty is invalid.</p>

                    </td>
                    </tr>

                    <tr>
                        <td class="image">
                        <div><img src="img/logo.png" alt="footer-logo" width="100px"></div>
                        </td>
                    </tr>

                    <tr>
                        <td><img src="img/linkdin.png" alt="footer-logo" width="25px">
                        <img src="img/instagram.png" alt="footer-logo" width="25px">@the_buffshop | 
                        <img src="img/fb.png" alt="footer-logo" width="25px">the_buffshop |
                        <img src="img/fb.png" alt="footer-logo" width="25px">the_buffshop.in
                    
                        </td>
                    </tr>
             </tbody>
             </table>
            </td> 
            <!-- <td class="main-table-col"> column 3
                    <table class="term-table">   
                            <tbody>
                            <tr>
                                <td class="image">
                                <div><img src="img/logo.png" alt="footer-logo" width="100px"></div>
                                </td>
                            </tr>
                            <tr>
                        
                                <td>

                                <h1 class="term-coating">CERAMIC COATING</h1>

                                <hr>
                        

                            <h1 class="term-heading">ASSURANCE 
                                <h1 class="term-coating">CARD</h1> </h1>

                            <p>Duration Of Assurance</p>

                        </td>
                        
                            </tr>
                            <td>
                                    <table class="inner-table"> 
                                        <tr> 
                                            <td>ONE YEAR</td> 
                                            <td>TWO YEAR</td> 
                                        </tr> 
                                    
                                    
                                    </table> 
                                </td> 
                            

                            <tr>
                                <td><img src="img/linkdin.png" alt="footer-logo" width="25px">
                                <img src="img/instagram.png" alt="footer-logo" width="25px">@the_buffshop | 
                                <img src="img/fb.png" alt="footer-logo" width="25px">the_buffshop |
                                <img src="img/fb.png" alt="footer-logo" width="25px">the_buffshop.in
                            
                                </td>
                            </tr>
                    </tbody>
                </table>
            </td>  -->
        </tr> 
       
    </table>
      
</body>
</html> 