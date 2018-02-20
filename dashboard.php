<?php include("connection.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php

$sql="SELECT COUNT(Status) FROM tbl_orders WHERE Status='Progressing'";

 if($result=mysqli_query($connect,$sql))
	   {
		   
		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $id=$row[0] ;
				  
			  }
		   }
		  else 
		   { 
			
		   }
		   
	   }
	   else
	   {
		  $msg ="<h3 style=color:#FFFF;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }
			    
?>
<?php

$sql2="SELECT COUNT(Status) FROM tbl_orders WHERE Status='Active'";

 if($result=mysqli_query($connect,$sql2))
	   {
		   
		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $active=$row[0] ;
				  
			  }
		   }
		  else 
		   { 
			
		   }
		   
	   }
	   else
	   {
		  $msg ="<h3 style=color:#FFFF;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }
			    
?>
<?php

$sql3="SELECT COUNT(Status) FROM tbl_orders WHERE Status='Pending'";

 if($result=mysqli_query($connect,$sql3))
	   {
		   
		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $new=$row[0] ;
				  
			  }
		   }
		  else 
		   { 
			
		   }
		   
	   }
	   else
	   {
		  $msg ="<h3 style=color:#FFFF;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }
			    
?>
<?php
$val54 = $_SESSION ['user'];
$sql3="SELECT COUNT(Status) FROM tbl_orders WHERE Createdby='$val54'";

 if($result=mysqli_query($connect,$sql3))
	   {
		   
		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				  $Sale=$row[0] ;
				  
			  }
		   }
		  else 
		   { 
			
		   }
		   
	   }
	   else
	   {
		  $msg ="<h3 style=color:#FFFF;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }
			    
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<!-- Custom CSS -->
    
    <link href="css/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
</head>


<body>
<h1 align="center"> Welcome to ICEBOX</h1>

<br />
 <div class="row">
  <div class="col-md-1"></div>
   <div class="col-md-10"> <!-- Center -->
    <div id="wrapper">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h2 style="color:white"><?php echo $Sale; ?></h2></div>
                                        <div>My Total Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h2 style="color:white"><?php echo $new ?></h2></div>
                                        <div>New Orders</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h2 style="color:white"><?php echo $id; ?></h2></div>
                                        <div>Progressing Orders</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h2 style="color:white"><?php echo $active; ?></h2></div>
                                        <div>Active Services</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Knowledge Base</h3>
                            </div>
                            <div class="panel-body">
                               <div class="list-group">
  									<a href="" class="list-group-item " data-toggle="modal" data-target="#myModal">
 								   <h4 class="list-group-item-heading">Netixo Web Products and Pricing</h4>
									<p class="list-group-item-text">You can find our existing Web Plans and pricing details through here.</p>
 									 </a>
 									 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Netixo Product Pricing</h4>
      </div>
      <div class="modal-body">
  <h2>Web Designing Pricing</h2>
	<p><b>Alwasys make sure to mention<u style="color:red"> only the total price</u> to the customer.</b> 
	<br />
	<div class="alert alert-info" role="alert">
	<ul>
		<li>Domain and Hosting Prices will be renewed Anually. Prices mentioned below is per year.</li>
		<li>Payments can be done directly to Netixo Technologies.</li>
		<li>Price might change if the client decide to go ahead with International domains</li>
	</ul>
		</div>
	</p>
	<br/>
	<div class="row">
  <div class="col-sm-6 col-md-4">
   
     <div class="panel panel-success">
  		<div class="panel-heading">
    		<h3 class="panel-title">Lite Package</h3>
  		</div>
  		<div class="panel-body">
              <br/>
             <table class="table table-striped">
 				<tr>
 					<td>Static Web Site - 5 Pages</td>
 					<td>Rs.10,000</td>
 				</tr>
 				<tr>
 					<td>.lk Domain</td>
 					<td>Rs.3,575</td>
 				</tr>
 				<tr>
 					<td>1GB hosting space with 100GB bandwith</td>
 					<td>Rs.2,925</td>
 				</tr>
 				<tr>
 					<td>Upto 4 email accounts</td>
 					<td>Free</td>
 				</tr>
 				<tr>
 					<td>Search Engine Optimization</td>
 					<td>Free</td>
 				</tr>
			</table>
  		</div>
  		<div class="panel-footer">
  			<p align="center"style="color: #F0080C; font-size:16px;"><b>Total Price LKR 16,500/-</b></p>
  		</div>
	</div>
 
  </div>
  <div class="col-sm-6 col-md-4">
   
     <div class="panel panel-success">
  		<div class="panel-heading">
    		<h3 class="panel-title">Elite Package</h3>
  		</div>
  		<div class="panel-body">
          <br/>
             <table class="table table-striped">
 				<tr>
 					<td>Static Web Site - 10 Pages</td>
 					<td>Rs.20,000</td>
 				</tr>
 				<tr>
 					<td>.lk Domain</td>
 					<td>Rs.3,575</td>
 				</tr>
 				<tr>
 					<td>2GB hosting space with 100GB bandwith</td>
 					<td>Rs.4,425</td>
 				</tr>
 				<tr>
 					<td>Upto 10 email accounts</td>
 					<td>Free</td>
 				</tr>
 				<tr>
 					<td>Search Engine Optimization</td>
 					<td>Free</td>
 				</tr>
			</table>
  		</div>
  		<div class="panel-footer">
  			<p align="center"style="color: #F0080C; font-size:16px;"><b>Total Price LKR 28,000/-</b></p>
  		</div>
	</div>
 
  </div>
  
  <div class="col-sm-6 col-md-4">
   
     <div class="panel panel-success">
  		<div class="panel-heading">
    		<h3 class="panel-title">Scroll.S Package </h3>
  		</div>
  		<div class="panel-body">
		<br/>
             <table class="table table-striped">
 				<tr>
 					<td>Static Web Page with 5 Sections
</td>
 					<td>Rs.7,000</td>
 				</tr>
 				<tr>
 					<td>.lk Domain</td>
 					<td>Rs.3,575</td>
 				</tr>
 				<tr>
 					<td>1GB hosting space with 100GB bandwith</td>
 					<td>Rs.2,925</td>
 				</tr>
 				<tr>
 					<td>Upto 4 email accounts</td>
 					<td>Free</td>
 				</tr>
 				<tr>
 					<td>Search Engine Optimization</td>
 					<td>Free</td>
 				</tr>
			</table>
			<br />
  		</div>
  		<div class="panel-footer">
  			<p align="center"style="color: #F0080C; font-size:16px;"><b>Total Price LKR 13,500/-</b></p>
  		</div>
	</div>
 
  </div>
</div>
<br />

<div class="row">
  <div class="col-sm-6 col-md-4">
   
     <div class="panel panel-info">
  		<div class="panel-heading">
    		<h3 class="panel-title">Drogon Plus</h3>
  		</div>
  		<div class="panel-body">
              <br/>
             <table class="table table-striped">
 				<tr>
 					<td>Content Management System</td>
 					<td>Rs.20,000</td>
 				</tr>
 				<tr>
 					<td>Dynamic Web Site - 5 Pages</td>
 					<td>Rs.10,000</td>
 				</tr>
 				<tr>
 					<td>.lk Domain</td>
 					<td>Rs.3,575</td>
 				</tr>
 				<tr>
 					<td>1GB hosting space with 100GB bandwith</td>
 					<td>Rs.2,925</td>
 				</tr>
 				<tr>
 					<td>Upto 4 email accounts</td>
 					<td>Free</td>
 				</tr>
 				<tr>
 					<td>Search Engine Optimization</td>
 					<td>Free</td>
 				</tr>
			</table>
  		</div>
  		<div class="panel-footer">
  			<p align="center"style="color: #F0080C; font-size:16px;"><b>Total Price LKR 36,500/-</b></p>
  		</div>
	</div>
	</div>
	
	<div class="col-sm-6 col-md-4">
   
     <div class="panel panel-info">
  		<div class="panel-heading">
    		<h3 class="panel-title">Drogon Lite</h3>
  		</div>
  		<div class="panel-body">
		<br/>
             <table class="table table-striped">
                <tr>
 					<td>Content Management System</td>
 					<td>Rs.20,000</td>
 				</tr>
 				<tr>
 					<td>Dynamic Web Site with 5 Sections</td>
 					<td>Rs.7,000</td>
 				</tr>
 				<tr>
 					<td>.lk Domain</td>
 					<td>Rs.3,575</td>
 				</tr>
 				<tr>
 					<td>1GB hosting space with 100GB bandwith</td>
 					<td>Rs.2,925</td>
 				</tr>
 				<tr>
 					<td>Upto 4 email accounts</td>
 					<td>Free</td>
 				</tr>
 				<tr>
 					<td>Search Engine Optimization</td>
 					<td>Free</td>
 				</tr>
			</table>
  		</div>
  		<div class="panel-footer">
  			<p align="center"style="color: #F0080C; font-size:16px;"><b>Total Price LKR 33,500/-</b></p>
  		</div>
	</div>
 
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> <!-- end of Modal -->
									 
 									<a href="" class="list-group-item" data-toggle="modal" data-target="#myModal2">
 								   <h4 class="list-group-item-heading">Domain Price List</h4>
									<p class="list-group-item-text">You can find the price list for the both Local and International domains here.</p>
 									 </a>
 									<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Domain Price List</h4>
      </div>
      <div class="modal-body">
       <p>With effect from 15th July 2017, following rates apply for domain registration and renewals.</p>
       
       <br />
        <table class="table table-striped">
 				<tr>
 					<td>TLD</td>
 					<td>Registration</td>
 					<td>Renewal</td>
 				</tr>
 				<tr>
 					<td>.com</td>
 					<td>Rs 1650.00</td>
 					<td>Rs 1750.00</td>
 				</tr>
 				<tr>
 					<td>.net</td>
 					<td>Rs 1750.00</td>
 					<td>Rs 1870.00</td>
 				</tr>
 				<tr>
 					<td>.org</td>
 					<td>Rs 1870.00</td>
 					<td>Rs 1980.00</td>
 				</tr>
 				<tr>
 					<td>.biz</td>
 					<td>Rs 1650.00</td>
 					<td>Rs 1750.00</td>
 				</tr>
 				<tr>
 					<td>.info</td>
 					<td>Rs 1750.00</td>
 					<td>Rs 1870.00</td>
 				</tr>
			</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> <!-- end of Modal -->

<a href="" class="list-group-item " data-toggle="modal" data-target="#myModal3">
 								   <h4 class="list-group-item-heading" style="color: #FF0004">Ongoing Promotions</h4>
									<p class="list-group-item-text">You can find the details of the ongoing promotions here.</p>
 									 </a>
 									<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ongoing Promotions</h4>
      </div>
      <div class="modal-body">
     <p> There are no ongoing promotions at the moment.</p>
      </div> 
	
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
        </div>
    </div>
</div> <!-- end of Modal -->
 									
								</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> My Pending Orders</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Order Reference</th>
                                                <th>Customer Name</th>
                                                <th>Order Type</th>
                                                <th>Plan Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
	  $val = $_SESSION ['user'];										
	  
	  $tbsql="SELECT * FROM tbl_orders where Status ='Pending' AND Createdby ='$val'";
	
	  $records =mysqli_query($connect,$tbsql);
      while($package=mysqli_fetch_assoc($records))
	  		{
		  echo "<tr>";
		  echo "<td>".$package["OrderID"]."</td>";
		  echo "<td>".$package["CustName"]."</td>";
		  echo "<td>".$package["OrdType"]."</td>";
		  echo "<td>".$package["HostingPlan"]."</td>";
		  echo "</tr>";
		  
	  		} // end While loop
	  
	  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    </div>
    <!-- /#Center  -->
    
      <div class="col-md-1"></div>
</div>

<!-- Morris Charts JavaScript -->
    <script src="css/morris.css"></script>
    <script src="css/sb-admin.css"></script>
    <script src="css/sb-admin-rtl.css"></script>

</body>
</html>