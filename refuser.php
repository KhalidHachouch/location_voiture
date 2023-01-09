<?php
include ('connection.php') ;if (isset($_GET['numero_reservation'])) {
  $num = $_GET['numero_reservation']; echo $num;

	
	mysqli_query($con," UPDATE reservation set statuts='refuse' where numero_reservation=$num ");
	header('location:reservationad.php');
} 


?>