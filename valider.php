<?php
include ('connection.php') ;$num = $_SESSION['numero_reservation']; if (isset($_POST) ) {
  $mat=$_SESSION['matri'];
  $id=$_POST['chauff'];
	var_dump($num,$id,$mat);
	mysqli_query($con," UPDATE reservation set statuts='valide' where numero_reservation=$num "); 																			           mysqli_query($con," UPDATE chauffeur set  numero_reservation=$num where id_chauffeur=$id");
	    mysqli_query($con," UPDATE chauffeur set  matricule='$mat' where id_chauffeur=$id");
} 


?>