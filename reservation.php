<?php
 include('connection.php');

 $cin=$_SESSION['cin'] ;  


 $sql=mysqli_query($con, "select * from client where cin='$cin'");
while($data = mysqli_fetch_assoc($sql)){ 
 
$nom=$data['nom_client'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta  charset=UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"> </script>


        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="tablecss.css">
        <link rel="stylesheet" type="text/css" href="https:/DataTables/datatables.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" /> <style type="text/css">input{background-color:#333}</style>
        <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
        <title>Reservation</title>
    </head>
        <title>Reservation</title>
    </head>
       <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="Home.php#page-top">Cars4You</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="home.php#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Home.php#portfolio">Gallerie</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="home.php#contact">Map</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="reservation.php">réserver</a></li>
                          <?php if (!isset($_SESSION['cin']))  { ?> <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Login.PHP">Se connecter</a></li> <?php  } else {  ?>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">Bienvenue <?php echo $nom; ?> </a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Logout.php">Se déconnecter <?php }} ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
                    <header class="masthead">
                        <div class="container">
                                                      <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                             <div class="form-group">
                                                <div ></div> <form action="reservationn.php" method="post"> <?php if(isset($_POST['reserver'])){
                  $checkbox = $_POST['check'];
                  for($i=0;$i<count($checkbox);$i++){
                    $mat = $checkbox[$i]; 
                   $sql = mysqli_query($con, "SELECT  * FROM voiture where matricule='$mat' group by marque,modele  ");
  while($data = mysqli_fetch_assoc($sql)){ 
    $matricule =$data['matricule'];
    $marque =$data['marque'];
    $modele =$data['modele'];?> 
 <table  id="table_id"  class="table  table-striped table-dark">
  <thead>
  <tr style="background-color: gold;">
       <th scope="col">Marque</th>
      <th scope="col">Modele</th>
      <th scope="col">Transaction</th>
      <th scope="col">Carburant</th>
      <th scope="col">Date debut</th>
      <th scope="col">Date fin</th>
      <th scope="col">Chauffeur </th>
      <th scope="col">Prix </th>
      <th scope="col">Image</th>
      <th scope="col">Qte en stock</th>
      <th scope="col">Qte a reserver</th>
            </tr>
  </thead>
            <tbody>
      
                 <tr>              <input hidden="true"  value="<?php echo $matricule ?>" name="matricule[]">
             <td name="marque[]" > <?php echo $data['marque']; ?></td>
            <td name="modele[]"><?php echo $data['modele']; ?></td>
            <td name="transaction[]"><?php echo $data['transaction']; ?></td>
            <td name="carburant[]"><?php echo $data['carburant']; ?></td>
            <?php 
                  $date=date('Y-m-d');
                  $result=mysqli_query($con,"SELECT count(modele) as total from voiture where marque='$marque' and modele='$modele' group by marque , modele");
                  $datai=mysqli_fetch_assoc($result);
    ?>
            <td><input type="date" id="dated" name="dated[]"  value="<?php echo $date ?>"></td>
            <td><input type="date" id="datef" name="datef[]"  value="<?php echo $date ?>"></td>
            <td >
              <input type="checkbox" name="Chauffeur[]"/>


            </td>
           
            <td><input  hidden="true" name="prix[]"  ><?php echo $data['prix']; ?> Dhs</td>
            <td><img src="<?php echo $data['image']; ?>" alt="..."></td>
             <td onkeyup="diffe()" id="qts" name="qts[]"><?php echo $datai['total']; ?></td>
             
              <td><input  name="qtr[]" id="qtr" type="number"></td>
             
                    </tr>
                                              

             </tbody>
</table><?php }}?><button  type="submit" name="valider" class="btn btn-success btn-lg btn-block">VALIDER</button></a></form>
<form action="reservationn.php" method="get"><?php } 
  else {
                                                $mat =$_GET['mat']; 
                   $sql = mysqli_query($con, "SELECT  * FROM voiture where matricule='$mat' group by marque,modele  ");
  while($data = mysqli_fetch_assoc($sql)){ 
    $matricule =$data['matricule'];
    $marque =$data['marque'];
    $modele =$data['modele'];

  
  
    ?> 
                                                      <table  id="table_id"  class="table  table-striped table-dark">
  <thead>
  <tr style="background-color: gold;">

 
      <th scope="col">Marque</th>
      <th scope="col">Modele</th>
      <th scope="col">Transaction</th>
      <th scope="col">Carburant</th>
      <th scope="col">Date debut</th>
      <th scope="col">Date fin</th>
      <th scope="col">Chauffeur </th>
      <th scope="col">Prix </th>
      <th scope="col">Image</th>
      <th scope="col">Qte en stock</th>
      <th scope="col">Qte a reserver</th>
            
      
    </tr>
  </thead>
            <tbody>     <input hidden="true"  value="<?php echo $matricule ?>" name="matricule[]">
             <td name="marque[]" > <?php echo $data['marque']; ?></td>
            <td name="modele[]"><?php echo $data['modele']; ?></td>
            <td name="transaction[]"><?php echo $data['transaction']; ?></td>
            <td name="carburant[]"><?php echo $data['carburant']; ?></td>
            <?php 
                  $date=date('Y-m-d');
                  $result=mysqli_query($con,"SELECT count(modele) as total from voiture where marque='$marque' and modele='$modele' group by marque , modele");
                  $datai=mysqli_fetch_assoc($result);
               
                  
            ?>
            <td><input type="date" id="dated" name="dated[]"  value="<?php echo $date ?>"></td>
            <td><input type="date" id="datef" name="datef[]"  value="<?php echo $date ?>"></td>
            <td >
              <input type="checkbox" name="Chauffeur[]"/>


            </td>
           
            <td><input  hidden="true" name="prix[]"  ><?php echo $data['prix']; ?> Dhs</td>
            <td><img src="<?php echo $data['image']; ?>" alt="..."></td>
             <td onkeyup="diffe()" id="qts" name="qts[]"><?php echo $datai['total']; ?></td>
             
              <td><input  name="qtr[]" id="qtr" type="number"></td>
             
                    </tr>
                                              
<?php }} 
  ?>
             </tbody>
</table><button  type="submit" name="valider" class="btn btn-success btn-lg btn-block">VALIDER</button></a></form>

                                            </div>
                             <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                             <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                             <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                             <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                             <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                             <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                             <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                            
                            
                        </div>
                        </div>
                    </header>

        <!-- footer -->
                <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!">Privacy Policy</a><a href="#!">Terms of Use</a></div>
                </div>
            </div>
        </footer>
    </body>
    <script>var date1 = document.getElementById('dated');$message = "DATE INVALIDE!!";
        var date2 = document.getElementById('datef');
      function diff(){
        if(date2<date1){
        alert('$message');} var qts = document.getElementById('qts');$messag = "STOCK INSSUFISANT";
        var qtr = document.getElementById('qtr');
      function diffe(){
        if(qts<qtr){
        alert('$messag'); 
      
      }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</html>