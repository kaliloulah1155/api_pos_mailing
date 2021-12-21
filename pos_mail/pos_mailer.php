<?php 

 include('curllib.php');
 ini_set('display_errors', 1);

$resp=new LibCurl;


/*
[
    'email'=>explode(" ",$emailput),
    'subject'=>$contentTitre,
    'body'=>$output
]*/

$emailput='ibrahim.konate@ngser.com,james.akran@ngser.com';
$contentTitre='NGSYS SENDER';
$output="Je suis un mail de test ngsys";

$data_array =array(
    'email'=>explode(" ",$emailput),
    'subject'=>$contentTitre,
    'body'=>$output
  );
$resplace= $resp->postlibCurl('transactional',$data_array);
    echo json_encode($resplace);

 