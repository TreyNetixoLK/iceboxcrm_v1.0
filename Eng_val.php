<?php include("connection.php"); ?>
<?php
access_engval();
function access_engval()
{
	global $connect;
	$user = $_SESSION ['user'];
	$sql9 =mysqli_query($connect,"select * from tbl_users where Username ='$user'");
	
	while($row=mysqli_fetch_array($sql9))
	{
		$admins = $row[6];
		
		
        if ($admins == "Administrator")
		{
			header('Location:nix/nix_main.php');
		} 
		else
		{
			echo ("<div class='row'>
                      <div class='col-md-6 col-md-offset-3'>
                        <div class='jumbotron' align='center'>
					    <h2><b>Oops!!</b>,You are not authorised to be here.</h2>
					    <br />
					     <p>Access to this page have been restricted by the System Administrator.</p>
					    </div>
					  </div>
					 </div>");
			
			exit();
		}
			
	}
}
?>