<?php include("connection.php"); ?>
<?php include("general.php"); ?>
<?php
// Turn off all error reporting
error_reporting(0);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1 align="center">Plans and Pricing</h1>

<br />
<div class="row">
    <div class="col-md-1"></div>
  <div class="col-md-5">
        	<div style="width: 500px;">
 <div class="panel panel-default">
  <div class="panel-body">
<form action="" method="post">
 	<div class="form-group">
      <label for="disabledSelect">Plan Name</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtpname">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Wholesale Reference</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtwref">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Alllocated Hosting Space [MB]</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txthostspc">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Allocated Bandwith [MB]</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtbandwith">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Price</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Sri Lankan Rupees" name="txtprice">
    </div>
   
    <div align="center">
    <button type="submit" class="btn btn-success" name="btn_Create">Create Plan</button>
    <button type="reset" class="btn btn-primary">Reset Fields</button>
    </div>
</form>
</div>
</div>
</div>
<?php
	
$planname= $_POST['txtpname'];
$wreference= $_POST['txtwref'];
$hostingspc= $_POST['txthostspc'];
$bandwith= $_POST['txtbandwith'];
$price= $_POST['txtprice'];
$val = $_SESSION ['user'];
$resu = "";
$resu1="";
		
if(isset ($_POST['btn_Create']))
{
	$sql = "insert into tbl_packages(pkg_name,whols_ref,alloc_host_spc,alloc_bandwith,price,created_by) values ('$planname','$wreference','$hostingspc','$bandwith','$price','$val')";
	
if (mysqli_query($connect,$sql))
	{
		$resu = "<div class='alert alert-success' role='alert' style='width: 500px;'>The new Plan has been created.</div>";
		
	}
	else{
		$resu = mysqli_error($connect);
		
		}
}
?>
 <?php
	  echo $resu;
	  ?>    
</div>
  <div class="col-md-5">
 <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">All Plans</h3>
  </div>
  <div class="panel-body">
   <div style="padding-left: 20px">
<table class="table table-striped">
 <thead>
  <tr>
  	<th><b>Plan Name</b></th>
  	<th><b>Wholesale Reference</b></th>
  	<th><b>Price [LKR]</b></th>
  </tr>
  </thead>
  <tbody>
  <?php
	  
	  $tbsql="SELECT * FROM tbl_packages";
	
	  $records =mysqli_query($connect,$tbsql);
      while($package=mysqli_fetch_assoc($records))
	  		{
		  echo "<tr>";
		  echo "<td>".$package["pkg_name"]."</td>";
		  echo "<td>".$package["whols_ref"]."</td>";
		  echo "<td>".$package["price"]."</td>";
		  echo "</tr>";
		  
		  
	  		} // end While loop
	  
	  ?>
  </tbody>
</table>
</div>
  </div>
</div>
  </div>
  <div class="col-md-1"></div>
</div>
<br />
</body>
</html>