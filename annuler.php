<?php
 include('connection.php');


    if (isset($_SESSION['cin'])) {
     if (isset($_GET['numero_reservation'])) {
  $num = $_GET['numero_reservation']; 

  mysqli_query($con,"delete from reservation where numero_reservation=$num");


header('location:reservationcl.php');
 }else echo "nn";
}
?>