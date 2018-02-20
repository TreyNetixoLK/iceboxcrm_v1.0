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
   <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
  <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
        new nicEditor({fullPanel : true}).panelInstance('area');
  });
  //]]>
  </script>
</head>

<body>
<div align="center">
<h1>Generate Quotation</h1>
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
        <div class="col-md-10">
            
            <div class="panel panel-primary">
           <div class="panel-body">
               <table border="0" width="1250px" height="250px">
                <form action="dompdf_ops.php" method="post">
               <tr>
                   <td width="300px">Order Reference Number</td>
                   <td width="300px"><input type="text" class="form-control" name="ord_ref" id="exampleFormControlInput1" value="<?php echo $id; ?>"></td>
                   <td width="300px">&nbsp;&nbsp;Customer / Company Name</td>
                   <td width="300px"><input type="text" class="form-control" name="com_name" id="exampleFormControlInput1" value="<?php echo $name; ?>"></td>
                </tr>
                <tr>
                   <td width="300px">Quote Description</td>
                   <td width="300px" colspan="3">
                   <textarea class="form-control" id="area" rows="4" name="description"></textarea>       
                   </td>
                </tr>
                <tr>
                   <td width="300px">Price [LKR]</td>
                  <td width="300px" colspan="2"><input type="text" class="form-control" name="price" id="exampleFormControlInput1"></td>
                  
                    <input type="hidden" class="form-control" name="domain" value="<?php echo $domain; ?>" id="exampleFormControlInput1">
                    <input type="hidden" class="form-control" name="type" value="<?php echo $ordtype; ?>" id="exampleFormControlInput1">
                    
                    
                  <td width="300px" colspan="3" align="center"> <button type="submit" name="btn_generate" class="btn btn-primary">Generate Quote</button>
  <button type="rest" class="btn btn-default">Reset</button></td>
                </tr>
                     </form>  
               </table>
            
           </div>
           </div>
        
		</div>    
         </div> 
         </div> 
    <div class="col-md-1"></div>
         
</body>
</html>