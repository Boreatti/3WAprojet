<?php 
//chargement du modele
include('../script/init.php');



if(isset($_GET['id']) && is_numeric($_GET['id'])){
	$chp = getChp('*');

}


include('chapitre.phtml');


