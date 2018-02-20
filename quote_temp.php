 <?php include("connection.php"); ?>
 <?php
// Turn off all error reporting
error_reporting(0);
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/morris.css">
        <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="assets/img/favicon-32x32.png">
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</head>

<body>
    <div class="col-md-1"></div>
    <div align="center">
    <div class="row">
    <div class="col-md-10">
    
    <!-- Starting Template Page 02 from Here -->
    <div class="panel panel-default">
    <div class="panel-heading" style="background:'assets/img/def3.jpg';">
       <img src="assets/img/def3.jpg"> 
    
  </div>
  <div class="panel-body">
      <table border="0" width="670px">
      <tr>
        <td colspan="3">
            
            <div class="alert alert-default" role="alert">
    <h3 align="center"><b>Project Information</b></h3>
                
       <br />
            <table border="0" width="630px">
            <tr>
                <td><b>Project Reference</b></td>
                <td>:</td>
                <td>N<?php echo  $request['ord_ref']  ?></td>
            </tr>
            <tr>
                <td><b>Project Type</b></td>
                <td>:</td>
                <td><?php echo $request['type'] ?></td>
            </tr>
            <tr>
                <td><b>Customer Name</b></td>
                <td>:</td>
                <td><?php echo $request['com_name']?></td>
            </tr>
            <tr>
                <td><b>Domain Name</b></td>
                <td>:</td>
                <td><?php echo $request['domain']?></td>
            </tr>
            </table>
    </div>
         
          
          </td> 
          

      </tr>
     <tr>
        <td colspan="3">

    
    <h3 align="center"><b>Quotation</b></h3>
    <div class="alert alert-default" role="alert">
     <table class="table table-condensed"  width="630px">
    
            <tr>
                <td><b>Description</b></td>
                <td align="center" width="100px"><b>Price [LKR]</b></td>
            </tr>
            <tr>
                <td><?php echo $request['description'] ?></td>
                <td align="center" valign="middle"><b style="color:red"><?php echo $request['price'] ?>.00</b></td>
            </tr>
            
            </table>
    </div>
        </td>
     
     </tr>
    <tr>
        
        <td colspan="3"><h3 align="center"><b>Terms and Conditions</b></h3><br />
        <ul align="justify">
        <li>Please be advised that the final output of the product might be different from the initial prototype design based on the customers’ requirements. </li>    
        <li>If the client is happy to proceed with the proposal provided by Netixo Technologies, a down payment of 35% from the full amount need to be paid in order to commence the work.</li>
        <li>Domain and Hosting plans will be only valid for a period of 01 year after purchase and will need to be renewed annually. </li>
        <li>Once the designing of the project is completed the Account Manager will send a link via email to preview the designed solution before been hosted.</li>
        <li>The full payment needs to be settled before the solution is delivered. </li>
        <br /><br /> 
        </ul>
        
        </td>
        <div>
        <p><img src="assets/img/sign.png" assets="" height="60px" width="180px"><br><strong>Director - Business Development</strong></p></div>
     </tr>
      </table>
  
  </div>
  <div class="panel-footer"><i>This is a system generated document. Therefore signature not required.</i></div>
</div>
    <!-- Ending Template Page 02 from Here -->
    </div>
    <div class="col-md-1"></div>
    </div>
    </div>
</body>
</html>