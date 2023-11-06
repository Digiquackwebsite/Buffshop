<!DOCTYPE html>
<html>
<head>
<style>
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
 body{
  margin: 0;
  padding:0;
  font-family:Verdana, Geneva, Tahoma, sans-serif ;
 }
 h1, h2, h3, h4, h5,h6, p{
  margin: 0;
  padding: 0;
 }
 img{
    max-width: 100%;
  }
table {
  width: 100%;
  height: 100%;
}
.col-6{
  width: 100%;
}
.bg-white {
    background: #f3f3f3;
    padding: 20px;
}
.column-one {
    border: 2px dashed #0e2c3d;
    padding: 20px;
}
.align{
  text-align: center;
}
.new-table {
    position: relative;
    margin: 10px 0;
}
.new-table:before {
    content:"";
    position: absolute;
    background-color:#1c85b2;
    width:80px;
    height:3px;
    display:block;
    top:50%;
    right:23%;
}
.new-table:after {
    content:"";
    position: absolute;
    background-color:#1c85b2;
    width:80px;
    height:3px;
    display:block;
    top:50%;
    left:23%;
}
.bg-blue{
  padding: 20px;
  background: #0e2c3d;
}
.term-table {
    padding: 30px;
    text-align: center;
    color: white;
    border: 2px dashed #ffffff;
}
.img-col-sec {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
}
.img-col-sec {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 11px;
}
span.img-image {
    align-items: center;
    display: inline-flex;
    gap: 7px;
}
.line-color {
    border: 1px solid #27aae1;
    width: 92%;
}
.align p {
    font-size: 14px;
    line-height: 25px;
    margin: 8px 0px;
}
.term-heading {
    font-size: 50px;
    line-height: 60 px;
    margin: 10px 0;
    color: #27aae1;
    font-weight: 500;
}
.color-white-heading{
  color: #fff;
  font-weight: 600;
}
.align h5 {
    font-size: 16px;
    line-height: 28px;
    margin: 10px 0;
}
table.inner-table {
    background-color: #1c85b2;
    padding: 10px;
}
.inner-table-card {
    border: 1px dashed #fff;
    display: flex;
    padding: 15px;
    align-items: center;
    justify-content: space-evenly;
    font-size: 20px;
    font-weight: 600;
    
}
span.inner-content {
    font-weight: 400;
}
</style>
</head>
<body>
  <table> 
    <tbody>
      <tr> 
        <td class="col-6 bg-white">
            <table class="column-one">   
                <tbody>
                <tr>
                    <td>
                    <div class="align new-table">
                      <img src="img/pdf-img/logo.png" alt="footer-logo" class="image" width="110px">
                    </div>
                    </td>
                </tr>

                <tr>
                    <td><div class="img-col-sec"><span class="img-image"><img src="img/pdf-img/linkdin.png" alt="footer-logo" width="25px">
                    <img src="img/pdf-img/instagram.png"  alt="footer-logo" width="25px">@the_buffshop</span>
                    <img src="img/pdf-img/fb.png"  alt="footer-logo" width="25px">the_buffshop 
                    <img src="img/pdf-img/web.png"  alt="footer-logo" width="25px">the_buffshop.in
                    </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </td> 
        <td class="col-6 bg-blue"> 
          <table class="term-table">   
             <tbody>
                  <tr>
                      <td>
                        <div class="align new-table">
                          <img src="img/pdf-img/logo.png" alt="footer-logo" class="image" width="110px">
                        </div>
                      </td>
                  </tr>
                  <tr>
              
                      <td class="align">

                      <h2 class="term-heading color-white-heading">CERAMIC COATING</h2>

                      <hr class="line-color">
              

                  <h2 class="term-heading">ASSURANCE 
                      </h2>
                      <h2 class="term-heading color-white-heading">CARD</h2> 

                  <p>Duration Of Assurance</p>

              </td>
              
                  </tr>
                  <tr><td>
                          <table class="inner-table"> 
                              <tbody><tr class="inner-table-card "> 
                                  <td>ONE <span class="inner-content">YEAR</span></td> 
                                  <td>TWO <span class="inner-content">YEAR</span></td> 
                              </tr> 
                          
                          
                          </tbody></table> 
                      </td> 
                  </tr>
             </tbody>
      </table>
  </td>
      
    </tr> 
   
</tbody>
  </table>
  <br><br><br>
  <!-- customer details strt 2nov2023 -->
  <table> 
    <tbody>
      <tr> 
        <td class="col-6 bg-white">
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
    </td>
      
      </tr> 
     
  </tbody>
    </table>
    <!-- customer details end 2nov2023 -->
<br><br><br>
<table>
<tbody>
<tr>
<td class="col-6 bg-blue">
  <table class="term-table">   
  <tbody>
      <tr class="align">
  
          <td>

          <h2 class="term-heading">Terms and Conditions</h2>

          <hr class="line-color">
  

      <h5>In the Event of a defect in the treatment &amp; Subject to the conditions below having met, the damaged areas will be re-treated.  </h5>

      <p>1. The customer shall have the treated car inspected once every 6 months during the entire applicable warranty period. <br> &nbsp;&nbsp;&nbsp;&nbsp;(1 year 2 inspections I 2 year - 4 inspections)</p>

      <p>2. The warranty is rendered invalid in the event of an accident or if the car is Diesel washed or steam washed.</p>
      <p>3. The vehicle should be washed by a wet micro fibre cloth using clean water.</p>
      <p>4. The car should not be washed using hard water or bore well water, incase washed, the warranty will be void.</p>
      <p>5. If the paint surface is scrapped, scratched or in any way damaged, the owner shall be required to have it inspected &amp; treatment reapplied. 
      The cost of such treatment &amp; labour cost incurred, shall be borne by the owner. </p>
      <p>6. This card has to be retained for the entire warranty period. In case of the loss of warranty card the warranty is invalid.</p>

      </td>
      </tr>

      <tr>
          <td>
            <div class="align new-table">
              <img src="img/pdf-img/logo.png" alt="footer-logo" class="image" width="100px">
            </div>
          </td>
      </tr>

      <tr>
        <td><div class="img-col-sec"><span class="img-image"><img src="img/pdf-img/linkdin.png" alt="footer-logo" width="25px">
        <img src="img/pdf-img/instagram.png"  alt="footer-logo" width="25px">@the_buffshop</span>
        <img src="img/pdf-img/fb.png"  alt="footer-logo" width="25px">the_buffshop 
        <img src="img/pdf-img/web.png"  alt="footer-logo" width="25px">the_buffshop.in
        </div>
        </td>
    </tr>
</tbody>
</table>
</td>
<td class="col-6 bg-white">
  <table class="column-one">   
  <tbody>
      <tr class="align ">
        <td> <img src="img/pdf-img/car.jpg" alt=""></td>
        
      </tr>
</tbody>
</table>
</td>
</tr>
</tbody> 
</table>

</body>
</html>

