<?php 
include('initAdmin.php'); 

// //Verification de l'id de la partie chargée 
$allParties = getAllParties();

if(isset($_GET['id']) && is_numeric($_GET['id'])){
	$chp = getChp();
}


include('views/formulaireTemplate.php'); 

