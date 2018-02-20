<?php include("connection.php"); ?>
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
<h1 align="center">Create a New Sale</h1>

<br />
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  	<div>
 <div class="panel panel-default">
  <div class="panel-body">
      <div class="row">
          
<form action="" method="post">
    <div class="col-xs-6">
 	<div class="form-group">
      <label for="disabledSelect">Order Type</label>
      <select id="disabledSelect" class="form-control" name="txtordtype">
        <option></option>
        <option>Dynamic Web Site</option>
        <option>Static Web Site</option>
        <option>Mobile Application</option>
        <option>Solution Development</option>
      </select>
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Customer / Company Name</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtcompname">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Business Registration No</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtbusregno">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">NIC No</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtnicno">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Name of Authorised Contact</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtauthcontact">
    </div>
    <div class="form-group">
      <label for="disabledTextInput">Contact No. of Authorised Contact</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Contact Number with country code for oversease clients" name="txtcontactno">
    </div>
    </div>
    <div class="col-xs-6">
     <div class="form-group">
      <label for="disabledTextInput">Email Address</label>
      <input type="email" id="disabledTextInput" class="form-control" placeholder="" name="txtemail">
    </div>
      <div class="form-group">
      <label for="disabledTextInput">Permanent Address</label>
      <textarea class="form-control" rows="3" name="txtpermaddress"></textarea>
    </div>
      <div class="form-group">
      <label for="disabledTextInput">Requested Domain Name</label>
       <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="txtreqdomainname">
    </div>
    <div class="form-group">
      <label for="disabledSelect">Plan Name</label>
      <select class="form-control" name="plan">
        <option></option>
    	<?php 
		  
		  $sql4 =mysqli_query($connect,"select * from tbl_packages");
		  while($row=mysqli_fetch_array($sql4))
		  {
		?>
		<option><?php echo $row["pkg_name"] ?></option> 
		  <?php 
			  
		  }
		  
		  ?>
      </select>
    </div>
  
    <div class="form-group">
      <label for="disabledTextInput">Requirement</label>
      <textarea class="form-control" rows="3" name="txtcomments" data-length="800" placeholder="Please describe the customers requirement"></textarea>
    </div>
    </div>
    <div align="center">
    <button type="submit" class="btn btn-success" name="Btn_CreateSale">Create New Sale</button>
    <button type="reset" class="btn btn-primary">Reset All Fields</button>
    </div>
</form>
<br />
<?php
	  
$ordert= $_POST['txtordtype'];
$custname= $_POST['txtcompname'];
$bregno= $_POST['txtbusregno'];
$nic= $_POST['txtnicno'];
$aucontact= $_POST['txtauthcontact'];
$conactno =$_POST['txtcontactno'];
$email=$_POST['txtemail'];
$permadd=$_POST['txtpermaddress'];
$domain=$_POST['txtreqdomainname'];
$planname=$_POST['plan'];
$comments=$_POST['txtcomments'];
$createdate = date('Y-m-d');
$val = $_SESSION ['user'];
$Status ="Pending";
$resu = "";
$resu1="";
		
if(isset ($_POST['Btn_CreateSale']))
{
	$sql = "insert into tbl_orders(CustName,NIC_NO,BusinessReg,OrdType,SiteContact,Perm_Address,ContactNo,Email,DomainName,HostingPlan,Comments,Status,createdby,Ord_Rec_Date) values ('$custname','$nic','$bregno','$ordert','$aucontact','$permadd','$conactno','$email','$domain','$planname','$comments','$Status','$val','$createdate')";
	
if (mysqli_query($connect,$sql))
	{
		$resu = "<div class='alert alert-success' role='alert'>The Record has been added.</div>";
		echo $resu;
	}
	else{
		$resu = "<div class='alert alert-danger' role='alert'>".mysqli_error($connect)."</div>";
		echo $resu;
		}
}
	  
?>
</div>
</div>
</div>
  </div>
  <div class="col-md-2"></div>
</div>
    </div>
</body>
</html>