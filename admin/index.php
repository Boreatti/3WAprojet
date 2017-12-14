<?php include('initAdmin.php'); 
// include('functionAdmin.php'); 

//Recuperer la liste des chapitres
$listeChp = getAllIdChp(); 

//Recuperer la liste des partie
$allParties = getAllParties();

include('views/indexAdminTemplate.php');
?>
