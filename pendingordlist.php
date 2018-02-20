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
<h1 align="center">Pending Orders Allocation</h1>

<br />
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<div style="width: 500px;">
 <div class="panel panel-default">
  <div class="panel-body">
<form action="" method="post">
 	<div class="form-group">
      <label for="disabledSelect">Netixo Reference</label>
 	  <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtnref">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Schedule Completion Date (ETA)</label>
 	  <input type="date" id="disabledTextInput" class="form-control" placeholder="" name="txtdate">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Project Engineer</label>
      <select class="form-control" name="projeng">
        <option></option>
    	<?php 
		  
		  $sql =mysqli_query($connect,"select * from tbl_users where Designation ='Project Engineer' OR Designation = 'Director'");
		  while($row=mysqli_fetch_array($sql))
		  {
		?>
		<option><?php echo $row["F_name"]?></option> 
		  <?php 
			  
		  }
		  
		  ?>
      </select>
    </div>
    <div align="center">
    <button type="submit" class="btn btn-success" name="btn_Save">Save Changes</button>
    <button type="reset" class="btn btn-primary">Reset Fields</button>
    </div>
</form>
</div>
</div>
</div>
<?php
	
$Nref= $_POST['txtnref'];
$pengineer= $_POST['projeng'];
$eta = $_POST['txtdate'];
$status= "Progressing";
$server= $_POST['servname'];
$hostspace = $_POST['txtallochost'];
$bandwith = $_POST['txtallocband'];
$val = $_SESSION ['user'];
$resu = "";
$resu1="";
		
if(isset ($_POST['btn_Save']))
{
	$sql32 = "UPDATE tbl_orders SET ProjectEngineer ='".$pengineer."', Status ='".$status."', ETA ='".$eta."' where OrderID=".$Nref;
    if (mysqli_query($connect,$sql32))
	{	
			$resu = "<div class='alert alert-success' role='alert'>This order have been assigned to an Engineer.</div>";
		    echo $resu;
	}
	else{
		$resu ="<div class='alert alert-success' role='alert'>".mysqli_error($connect)."</div>"; 
		echo $resu;
		}
}
?>
  </div>
  <div class="col-md-4"></div>
</div>
<br />
<div style="padding-left: 20px; width: 1400px;">
<h2> All  Pending Orders</h2>
<br />
<table class="table table-striped">
 <thead>
  <tr>
  	<th><b>Netixo Reference</b></th>
  	<th><b>Segment</b></th>
  	<th><b>Customer / Company Name</b></th>
  	<th><b>Plan Name</b></th>
  	<th><b>Comments</b></th>
  </tr>
  </thead>
  <tbody>
  <?php
	  
	  $tbsql="SELECT * FROM tbl_orders where Status ='Pending'";
	
	  $records =mysqli_query($connect,$tbsql);
      while($package=mysqli_fetch_assoc($records))
	  		{
		  echo "<tr>";
		  echo "<td>".$package["OrderID"]."</td>";
		  echo "<td>".$package["OrdType"]."</td>";
		  echo "<td>".$package["CustName"]."</td>";
		  echo "<td>".$package["HostingPlan"]."</td>";
		  echo "<td>".$package["Comments"]."</td>";
		  echo "</tr>";
		  
		  
	  		} // end While loop
	  
	  ?>
  </tbody>
</table>
</div>
</body>
</html>