<?php 

include('connection.php');

if ($_GET['matricule']) {
	$mat = $_GET['matricule'];
	mysqli_query($con,"DELETE FROM `voiture`  WHERE matricule = '$mat'");
	
   header('location:gestion.php');
}
?>