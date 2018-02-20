 <?php include("connection.php"); ?>
<?php

if(!isset($_POST['ord_ref'])) dir();
$request = array('ord_ref'=>$_POST['ord_ref'], 'com_name'=>$_POST['com_name'],'description'=>$_POST['description'],'price'=>$_POST['price'],'domain'=>$_POST['domain'],'type'=>$_POST['type']);

//Including Template 
ob_start();
require_once('quote_temp_new.php');
$temp = ob_get_clean();


// Including autoloader
require_once"dompdf/autoload.inc.php";
    
//Reference the Dompdf Namespace
use Dompdf\Dompdf;

$dompdf= new Dompdf();
$dompdf->set_option('defaultFont', 'Ubuntu');
$dompdf->loadHtml($temp);
$dompdf->setPaper('A4','lanscape');
$dompdf->render();

//Output the generated PDF
$dompdf->stream('codexworld',array('Attachment'=>0));
    

    
?>