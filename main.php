<?php include("logval.php"); ?>
<?php
	if ($_SESSION ['user'] == "")
	{
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICEBOX CRM</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/morris.css">
    
     <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="assets/img/favicon-32x32.png">
  
	
</head>

<body>
    <header></header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="main.php?page=dashboard">ICEBOX CRM</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="main.php?page=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-shopping-cart fa-fw"></i> Sales Management</a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="https://app.hubspot.com/login" target="_blank">HubSpot CRM</a></li>
                            <li role="presentation"><a href="main.php?page=createsale">Create New Sale</a></li>
                            <li role="presentation"><a href="main.php?page=quote_gen">Generate Quotation</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-dollar fa-fw"></i>Finance Management</a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="main.php?page=pricing">Create a new Plan</a></li>
                            <li role="presentation"><a href="https://www.sampathvishwa.com/SVRClientWeb/ActionController" target="_blank">Online Banking - VISHWA</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-group fa-fw"></i> Customer Management</a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="main.php?page=OrderSearch">Search order details</a></li>
                            <li role="presentation"><a href="main.php?page=pendingordlist">Pending Order List</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <i class="fa fa-database fa-fw"></i> Network Management</a> 
                    
                       <ul class="dropdown-menu" role="menu">
                           <li role="presentation"><a href="main.php?page=serv_config">Service Configuration</a></li>
                           <li role="presentation"><a href="main.php?page=config_Report">Configuration Report</a></li>
                           <li role="presentation"><a href="main.php?page=svrmgr">Server Manager</a></li>
                       </ul>
                     
                  </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-gears fa-fw"></i> Administration</a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="main.php?page=newuser">Manage User Account</a></li>
                            <li role="presentation"><a href="main.php?page=resetpw">Reset User Password</a></li>
                        </ul>
                    </li>
                    <li></li>
                    <li class="dropdown">
                       <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Logged in as	<?php $msg = $_SESSION ['user'].""; echo $msg.""; ?></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="https://webmail.netixo.lk/" target="_blank">Access Web Mail</a></li>
                            <li role="presentation"><a href="https://netixotech.slack.com/" target="_blank">Slack Communicator</a></li>
                            <li role="presentation"><a href="main.php?page=changepw">Change Password</a></li>
                            <li role="presentation"><a href="logout.php">Log Out</a></li>
                        
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <div style="width:100%;height:auto;">
 <?php
	if(isset($_GET['page'])){
	    include($_GET['page'].".php");
	}
	else{
		include("dashboard.php");
	}
 ?>
</div>

    
</body>

</html>