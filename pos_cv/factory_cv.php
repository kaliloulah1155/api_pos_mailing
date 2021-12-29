<?php

 //appel de la class permettant de parametrer la requete POST CURL
//NB : Veuillez configurer CURL au prealable dans apache avant son utilisation (voir documentat apache)  
//Veuillez configurer egalement le htaccess dans apache
 include('curllib.php');
 

 class FactoryCv{


	function factcv(string $nom,string $prenoms,string $dom_comp,string $poste_conv,string $search):?string{
		$resp=new LibCurl; 

		$data_array =array(
		    'nom'=>$nom,
		    'prenoms'=>$prenoms,
		    'dom_comp'=>$dom_comp,
		    'poste_conv'=>$poste_conv,
		    'search'=>$search
		  );


		$response= $resp->postlibCurl('list_cv',$data_array);
		$data_response= json_encode($response);
        return  $data_response;
     }
}



 