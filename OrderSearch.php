 <?php include("connection.php"); ?>
 <?php
// Turn off all error reporting
error_reporting(0);
?>
 <?php
					       $notes = $_POST ['txtcomment'];
						   $val = $_SESSION ['user'];
					       $Ref = $_POST['txtsearch'];
					
					if(isset ($_POST['btn_addNote']))
{
	$sql3 = "insert into tbl_ordernotes(Nref,Username,comments) values ('$Ref','$val','$notes')";
	
if (mysqli_query($connect,$sql3))
	{
	
	}
	else{
		$resu = mysqli_error($connect);
		echo $resu;
		}
}
						?>   
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div align="center">
<h1>Search Order</h1>
<form class="form-inline" method="post">
<input type="text" id="disabledTextInput" class="form-control" placeholder="Reference without the prefix 'N'" style="width: 300px;" name="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;<button type="submit" class="btn btn-primary" name="btn_Search">Search</button>
	</form>
	<?php
	
	
	if(isset($_POST['btn_Search']))
	{
	   $search =$_POST['txtsearch'];
	   $sql="SELECT * FROM tbl_orders WHERE OrderID=".$search;
	   $V = "N";
		
	   if($result=mysqli_query($connect,$sql))
	   {
		   
		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
			    
			     $id=$row[0] ;
				 $name=$row[1];
				 $nic =$row[2];
				 $breg =$row[3];
				 $ordtype =$row[4];
				 $Scontact =$row[5];
				  $padd =$row[6];
				  $contact =$row[7];
				  $email =$row[8];
				  $domain =$row[9];
				  $hosting =$row[10];
				  $bandwith =$row[11];
				  $cpun =$row[12];
				  $cppw =$row[13];
				  $eacc =$row[15];
				  $PE =$row[16];
				  $cmnt =$row[17];
				  $purl =$row[18];
				  $dns1 =$row[19];
				  $dns2 =$row[20];
				  $mipa =$row[21];
				  $svr =$row[22];
				  $stat =$row[23];
				  $creat =$row[24];
				  $ETA =$row[26];
                  $Rec_d =$row[27];
                  $Act_d =$row[28];
				  
			  }
		   }
		  else 
		   { 
			  $msg="<h3 style=color:red;>Not Found!</h3>";
				echo $msg;
		   }
		   
	   }
	   else
	   {
		  $msg ="<h3 style=color:red;>".mysqli_error($connect) ."</h3>";
		  echo $msg;
	   }
	}
	?>
	 
</div>
<br />
    <div class="col-md-1"></div>
    <div align="center">
    <div class="row">
        <div class="col-md-6">
            
            <div class="panel panel-primary">
           <div class="panel-heading">Customer Profile</div>
           <div class="panel-body">
                <table width="800px" align="center">
                     <tr>
                        <td colspan="2" style="text-align:left;"><b>Order Information</b></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center; color:white;"><b>.</b></td>  
                    </tr>
                    <tr>
                        <td width="300px">Order Reference Number</td>
                        <td style="color:blue;"><?php echo $V.$id; ?></td>
                    </tr>
                    <tr>
                        <td width="300px">NIC/PP/DL No</td>
                        <td style="color:blue;"><?php echo $nic; ?></td>
                    </tr>
                     <tr>
                        <td width="300px">Customer / Company Name</td>
                        <td style="color:blue;"><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <td width="300px">Business Registration No</td>
                        <td style="color:blue;"><?php echo $breg; ?></td>
                    </tr>
                    <tr>
                        <td>Permanent Address</td>
                        <td style="color:blue;"><?php echo $padd; ?></td>
                    </tr>
                     
               </table>
               <br />
               <table  width="800px" align="center">
                     <tr>
                        <td colspan="2" style="text-align:left;"><b>Customer Information</b></td>
                    </tr>
                   <tr>
                        <td colspan="2" style="text-align:center;color:white;"><b>.</b></td>  
                    </tr>
                    <tr>
                        <td width="300px">Name of Authorised Contact</td>
                        <td style="color:blue;"><?php echo $Scontact; ?></td>
                    </tr>
                     <tr>
                        <td width="300px">Contact No. of Authorised Contact</td>
                        <td style="color:blue;"><?php echo $contact; ?></td>
                    </tr>
                    <tr>
                        <td width="300px">Email Address</td>
                        <td style="color:blue;"><email><?php echo $email; ?></email></td>
                    </tr>
                     
               </table>
               <br />
               <table  width="800px" align="center">
                     <tr>
                        <td colspan="2" style="text-align:left;"><b>Billing Information</b></td>  
                    </tr>
                   <tr>
                        <td colspan="2" style="text-align:center;color:white;"><b>.</b></td>  
                    </tr>
                    <tr>
                        <td width="300px">Plan Name</td>
                        <td style="color:blue;"><a href="" data-toggle="modal" data-target="#myModal"><?php echo $hosting; ?></a></td>
                    </tr>
                    
               </table>
               <br/>
               <table width="800px" align="center">
                     <tr>
                        <td colspan="2" style="text-align:left;"><b>Netixo Representitives Information</b></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center; color:white;"><b>.</b></td>  
                    </tr>
                    <tr>
                        <td width="300px">Account Manager</td>
                        <td style="color:blue;"><?php echo $creat ; ?></td>
                    	
                    </tr>
                    <tr>
                        <td width="300px">Project Engineer</td>
                        <td style="color:blue;"><?php echo $PE; ?></td>
                    </tr>
               </table>
               <br/>
               <table width="800px" align="center">
                     <tr>
                        <td colspan="2" style="text-align:left;"><b>Project Information</b></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center; color:white;"><b>.</b></td>  
                    </tr>
                    <tr>
                        <td width="300px">Order Received Date</td>
                        <td style="color:blue;"><?php echo $Rec_d ; ?></td>
                    	
                    </tr>
                    <tr>
                        <td width="300px">Project ETA</td>
                        <td style="color:blue;"><?php echo $ETA; ?></td>
                    </tr>
                   <tr>
                        <td width="300px">Activation Date</td>
                        <td style="color:blue;"><?php echo $Act_d; ?></td>
                    </tr>
               </table>
           </div>
           </div>
        <div class="panel panel-primary">
                <div class="panel-heading">Comments</div>
                <div class="panel-body">
                    <form action="" method="post">
                       <input type="hidden" id="disabledTextInput" class="form-control" name="txtref" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>">
                        <textarea class="form-control" rows="3" name="txtcomment"></textarea><br />
                        <button type="submit" class="btn btn-primary" name="btn_addNote" >Save Comment</button>
                        </form>
                        <?php
					       $notes = $_POST ['txtcomment'];
						   $val = $_SESSION ['user'];
					       $Ref = $_POST['txtref'];
					
					if(isset ($_POST['btn_addNote']))
{
	$sql3 = "insert into tbl_ordernotes(Nref,Username,comments) values ('$Ref','$val','$notes')";
	
if (mysqli_query($connect,$sql3))
	{
	
	}
	else{
		$resu = mysqli_error($connect);
		echo $resu;
		}
}
						?>   
	
                </div>
            </div>
             
        </div>
         <div class="col-md-4">
         <div class="panel panel-primary">
           <div class="panel-heading">Technical Profile</div>
           <div class="panel-body">
            <table width="360px" height="300px" align="center">
                    <tr>
                        <td>Domain Name</td>
                         <td style="color:green;"><a href="https://www.<?php echo $domain; ?>" target="_blank"><?php echo $domain; ?></a></td>
                    </tr>
                     <tr>
                        <td>CPanel URL</td>
                        <td style="color:green;"><a href="https://<?php echo $purl; ?>" target="_blank"><?php echo $purl; ?></a></td>
                    </tr>
                    <tr>
                        <td>Bandwith [MB]</td>
                        <td style="color:green;"><?php echo $bandwith; ?></td>
                    </tr>
                    <tr>
                        <td>Email Accounts</td>
                        <td style="color:green;"><?php echo $eacc; ?></td>
                    </tr>
                    <tr>
                        <td>Main IP Address</td>
                        <td style="color:green;"><?php echo $mipa; ?></td>
                    </tr>
                     <tr>
                        <td>Server</td>
                        <td style="color:green;"><?php echo $svr; ?></td>
                    </tr>
                    <tr>
                        <td>DNS Server ID [1]</td>
                        <td style="color:green;"><?php echo $dns1; ?></td>
                    </tr>
                    <tr>
                        <td>DNS Server ID [2]</td>
                        <td style="color:green;"><?php echo $dns2; ?></td>
                    </tr>
                <tr>
                        <td>Status</td>
                        <td>
                        
                        <?php
			   				$act = 'Active';
							$pending = 'Pending';
			   				$prog = 'Progressing';
			   
						if ($stat == $act)
						{
							echo "<h4><span class='label label-success'>".$stat."</span></h4>";
						}
			    		else if ($stat == $pending)
						{
							echo "<h4><span class='label label-default'>".$stat."</span></h4>";
						}
						else if ($stat == $prog)	
						{
							echo "<h4><span class='label label-warning'>".$stat."</span></h4>";
						}
						else
						{
							echo "<h4><span class='label label-danger'>".$stat."</span></h4>";
						}
						?>
                        </td>
                    </tr>
                     
               </table>
           </div>
           </div>
           
            <div class="panel panel-primary">
                <div class="panel-heading">Customers Requirement</div>
                <div class="panel-body">

                        <table class="table table-striped">
 <thead>
  <tr>
  	<th><b></b></th>
  </tr>
  </thead>
  <tbody>
  <?php
	  
	  $tbsql="SELECT * FROM tbl_orders where OrderID=$id";
	
	  $records =mysqli_query($connect,$tbsql);
      while($package=mysqli_fetch_assoc($records))
	  		{
		  echo "<tr>";
		  echo "<td>".$package["Comments"]."</td>";
		  echo "</tr>";
		  
		  
	  		} // end While loop
	  
	  ?>
  </tbody>
</table>

                </div>
            </div>
             
             <div class="panel panel-primary">
                <div class="panel-heading">Order History</div>
                <div class="panel-body">

                        <table class="table table-striped">
 <thead>
  <tr>
  	<th><b>Date and Time</b></th>
  	<th><b>User</b></th>
  	<th><b>Comments</b></th>
  </tr>
  </thead>
  <tbody>
  <?php
	  
	  $tbsql="SELECT * FROM tbl_ordernotes where Nref=$id";
	
	  $records =mysqli_query($connect,$tbsql);
      while($package=mysqli_fetch_assoc($records))
	  		{
		  echo "<tr>";
		  echo "<td>".$package["date"]."</td>";
		  echo "<td>".$package["Username"]."</td>";
		  echo "<td>".$package["comments"]."</td>";
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
        
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <br/><br/>
       <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Plan ID</th>
                                                <th>Plan Name</th>
                                                <th>Allocated Hosting Space [MB]</th>
                                                <th>Allocated Bandwith [MB]</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php		
	  
	  $tbsql789="SELECT * FROM tbl_packages where pkg_name ='$hosting'";
	
	  $records9 =mysqli_query($connect,$tbsql789);
      while($package6=mysqli_fetch_assoc($records9))
	  		{
		  echo "<tr>";
		  echo "<td>".$package6["PkgID"]."</td>";
		  echo "<td>".$package6["pkg_name"]."</td>";
		  echo "<td>".$package6["alloc_host_spc"]."</td>";
		  echo "<td>".$package6["alloc_bandwith"]."</td>";
		  echo "<td>".$package6["price"]."</td>";
		  echo "</tr>";
		  
	  		} // end While loop
	  
	  ?>
                                        </tbody>
                                    </table>
		</div>    
         </div> 
         </div> 
         </div>
</body>
</html>