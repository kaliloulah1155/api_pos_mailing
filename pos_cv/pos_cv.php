<?php 
 
 include('factory_cv.php');
 ini_set('display_errors', 1);

 
$respfactory=new FactoryCv;

 
$nom =$_POST['nom'];
$prenoms=$_POST['prenoms'];
$dom_comp=$_POST['dom_comp'];
$poste_conv=$_POST['poste_conv'];
$search=$_POST['search'];

 
$final_response=$respfactory->factcv($nom,$prenoms,$dom_comp,$poste_conv,$search); 
//echo json_encode($final_response);

echo $final_response;
 
 