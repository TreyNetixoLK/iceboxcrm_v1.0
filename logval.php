<?php
session_start();
$msg="";
$result = "";
$con= mysqli_connect("localhost","root","","netixolk_nixdb");

if(isset ($_POST['btn_Login']))
{
	if (empty($_POST['txtuname']) || empty($_POST['txtpword']) )
	{
		$msg= "Please enter valid user credentials"; 
	}
	else
	{
	$user;$pass;
	$user=$_POST['txtuname'];
	$pass= md5($_POST['txtpword']);
	$query =mysqli_query($con,"select * from tbl_users where Username = '$user' and Password = '$pass'");
	
	$rows = mysqli_num_rows($query);
		if ($rows == 1)
		{
		    	sessionlogsuccess($con,$user);
		}
		else
		{
		  	   sessionlogfail($con,$user,$msg);
		  	   $msg = "Incorrect Username or Password";
		
		}
	
	mysqli_close($con);
	}
}

function sessionlogsuccess(mysqli $con,$user)

{
    $res="Successful";
    
    $sql = "insert into tbl_sessions(username,Result) values ('$user','$res')";
	
if (mysqli_query($con,$sql))
	{
	            $_SESSION ['user']=$user;
			    header("Location:main.php");
	
	}
	else{
		$resu = mysqli_error($con);
		
		}
}

function sessionlogfail(mysqli $con,$user,$msg)

{
    $msg = "Incorrect Username or Password";
    
    $sql = "insert into tbl_sessions(username,Result) values ('$user','$msg')";
	
if (mysqli_query($con,$sql))
	{
	       
	}
	else{
		$resu = mysqli_error($con);
		
		}
}

?>