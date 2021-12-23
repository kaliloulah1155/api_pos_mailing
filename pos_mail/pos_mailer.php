<?php 

 include('factory_email.php');
 ini_set('display_errors', 1);


$respfactory=new FactoryMail;
$emailput=$_POST['sendemail'];  // email du receveur
$contentTitre='NGSYS SENDER VIA POSEIDON'; // Objet du mail
$output="Je suis un mail de test ngsys - <b>factoriser</b>"; //Contenu du mail il peut prendre du html



/* 
   la fonction factmail prend en parametre le mail du receveur , l'ojet et le contenu 
*/
$final_response=$respfactory->factmail($emailput,$contentTitre,$output); 
echo json_encode($final_response);

 