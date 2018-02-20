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
    <h1 align="center">Server Manager</h1>
    <br />
     <div class="col-md-3">
    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Create New Server</h3>
  </div>
  <div class="panel-body">
<form class="form-horizontal" action="" method="post">            
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Server Name</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="" name="txtsvrname">
    </div>
  </div>
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Capacity</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Values in MB" name="txtcapacity">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">Bandwith</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Values in MB" name="txtbandwith">
    </div>
  </div>
      <div class="form-group" align="center">
  <button type="submit" class="btn btn-success" name="btn_create">Create</button>&nbsp;
  <button type="reset" class="btn btn-info">Reset</button>&nbsp;
   
  </div>
      </form>
</div>
    
    </div>
<?php
	  
$svrname= $_POST['txtsvrname'];
$capacity= $_POST['txtcapacity'];
$bandwith= $_POST['txtbandwith'];

		
if(isset ($_POST['btn_create']))
{
	$sql = "insert into tbl_server(serv_name,alloc_cap,alloc_band) values ('$svrname','$capacity','$bandwith')";
	
if (mysqli_query($connect,$sql))
	{
		$resu = "<div class='alert alert-success' role='alert'>The New Server is ready to be used.</div>";
		echo $resu;
	}
	else{
		$resu = "<div class='alert alert-danger' role='alert'>".mysqli_error($connect)."</div>";
		echo $resu;
		}
}
	  
?>         
    </div>
    
    <div class="col-md-9">
    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Capacity Monitor</h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
      <label for="disabledTextInput">Select Server</label>
      <select class="form-control" name="servname">
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
    <div class="well well-lg">
      <h4 align="center"><b>ServerName_Server</b></h4>
        <br />
 <label for="inputEmail3" class="col-sm-4 control-label">Server Capacity</label> 
      <div class="progress">     
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
   0% Used
  </div>
</div>
<label for="inputEmail3" class="col-sm-4 control-label">Bandwith</label> 
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 0%;">
    0% Used
  </div>
</div>
        
    </div>
  </div>
</div>
    
    </div>
</body>
</html>
