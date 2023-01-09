<?php
 include('connection.php');


    if (isset($_SESSION['cin'])) {
      if (isset($_POST['valider'])) {foreach($_POST["matricule"] as $rec=> $value){
         $matricule = $_POST['matricule'][$rec];
            $cin=$_SESSION['cin'];
             $dated = $_POST['dated'][$rec]; 
             $datef = $_POST['datef'][$rec];$chauffeur ="sans";
          if(isset($_POST['Chauffeur'][$rec])) { $chauffeur ="avec";} 
             $statuts = "en cours"; $qtr=$_POST['qtr'][$rec];
 $sql="INSERT INTO `reservation`(`date_debut`,`date_fin`,`statuts`,`chauffeur`,`cin`,`matricule`,`qtr`) VALUES ('$dated','$datef','$statuts','$chauffeur','$cin','$matricule','$qtr')"; 
       if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

}
header('location:home.php');
}}
?>
	
