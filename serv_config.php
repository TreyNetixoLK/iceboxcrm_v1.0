 <?php include("connection.php"); ?>
 <?php include("general.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
	
	
	if(isset($_POST['btn_search']))
	{
	   $search =$_POST['txtsearch'];
	   $sql="SELECT * FROM tbl_orders WHERE OrderID=".$search;
		
	   if($result=mysqli_query($connect,$sql))
	   {
		   
		   if(mysqli_num_rows($result)>0)
		   {
			  while($row=mysqli_fetch_array($result))
			  {
				 $name=$row[1];
				  
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
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
    <h1 align="center">Service Configuration</h1>
    <br />
     <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="panel panel-primary">
  <div class="panel-heading">Quick Customer search</div>
  <div class="panel-body">
      <form class="form-inline" method="post" action="">
          <div class="form-group">
<input type="text" id="disabledTextInput" class="form-control" placeholder="Reference without the prefix 'N'" style="width: 250px;" name ="txtsearch" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>"> &nbsp;<button type="submit" class="btn btn-primary" name="btn_search">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          
         <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Customer / Company Name</label>
         <div class="col-sm-7">
    <input type="text" class="form-control" id="inputEmail3" placeholder="Customer Name" style="width: 400px;" name="txtcomp" value="<?php echo $name;  ?>">
         </div>
          </div>
	</form>
    
</div>   
  </div>
        <br />
        
        <div class="row">
    <form class="form-horizontal" action="" method="post">
  <div class="col-xs-6">
            
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Hosting Space</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Values in MB" name="txthost">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Bandwith</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Values in MB" name="txtbandwith">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Email Accounts</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtemails">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Main IP Address</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Eg: 192.168.1.1" name="txtip">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Server Name</label>
    <div class="col-sm-6">
        <select class="form-control" name="txtserver">
        <option></option>
    	<?php 
		  
		  $sql =mysqli_query($connect,"select * from tbl_server");
		  while($row=mysqli_fetch_array($sql))
		  {
		?>
		<option><?php echo $row["serv_name"]?></option> 
		  <?php 
			  
		  }
		  
		  ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Service Status</label>
    <div class="col-sm-6">
      <select class="form-control" name="txtstat">
        <option>Active</option>
        <option>Withdrawn</option>
        <option>Cancelled</option>
        <option>Pending</option>
        </select>
    </div>
  </div>
            </div>
  <div class="col-xs-6">
      
       <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">CPanel Username</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtcpuname">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">CPanel Password</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtcpwrod">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">CPanel Portal URL</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="https://" name="txturl">
    </div>
  </div>
      <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">DNS Server [Primary]</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtdns1">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">DNS Server [Redundant]</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtdns2">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label"></label>
    <div class="col-sm-6">
      <input type="hidden" class="form-control" id="inputEmail3" placeholder="" value="<?php if(isset($_POST['txtsearch'])){ echo($_POST['txtsearch']); } ?>" name="txtrr">
    </div>
  </div>      

        </div>
           <div align="center">
  <button type="submit" class="btn btn-success" name="Btn_Save">Save Configuration</button>&nbsp;
  <button type="reset" class="btn btn-info">Reset all fields</button>&nbsp;
  <br />
  <br />
  </div>  
            </form>
            <?php

		
if(isset ($_POST['Btn_Save']))
{
	
$search2 =$_POST['txtrr'];	  
$hosting= $_POST['txthost'];
$bandwith= $_POST['txtbandwith'];
$emailc= $_POST['txtemails'];
$mip= $_POST['txtip'];
$server= $_POST['txtserver'];
$stat =$_POST['txtstat'];
$cpun=$_POST['txtcpuname'];
$cppw=$_POST['txtcpwrod'];
$url=$_POST['txturl'];
$dns1=$_POST['txtdns1'];
$dns2=$_POST['txtdns2'];
$resu = "";
	
	$sql77 = "update tbl_orders set DiskSpace ='$hosting', 
	Bandwith ='$bandwith', 
	CPUname ='$cpun', 
	CPPword ='$cppw', 
	EmailAccounts ='$emailc', 
	portalurl ='$url', 
	DNSSID1 ='$dns1', 
	DNSSID2 ='$dns2', 
	MIPAdd ='$mip',
	Server ='$server', 
	Status='$stat' WHERE OrderID='$search2'";
	
    if (mysqli_query($connect,$sql77))
	{
		$resu = "<div class='alert alert-success' role='alert'>Service have been configured sucessfully.</div>";
		echo $resu;
	}
	else{
		$resu = "<div class='alert alert-danger' role='alert'>".mysqli_error($connect)."</div>";
		
		}
}
			?>
           
</div>
        
</div>
</body>
</html>
