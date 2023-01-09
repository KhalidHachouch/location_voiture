<?php include ('connection.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta  charset=UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="tablecss.css">
        <link rel="stylesheet" type="text/css" href="https:/DataTables/datatables.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
        <title>ADMIN</title>
    </head>
        <title>ADMIN</title>
    </head>
       <body id="page-top">
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="Home.php#page-top">Cars4You</a><button class="navbar-toggler navbar-toggler-right"  type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="  collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="dropdown nav-item"><a class="  nav-link js-scroll-trigger dropbtn" href="Home.php#services">Voiture</a><div class="  dropdown-content">
    <a href="add.php">Ajouter </a>
    <a href="gestion.php">Gerer </a>
    
  </div> </li>     <li class="dropdown nav-item"><a class="  nav-link js-scroll-trigger dropbtn" href="Home.php#services">Chauffeur</a><div class="  dropdown-content">
    <a href="add.php">Ajouter </a>
    <a href="gestion.php">Gerer</a>
    
  </div> </li>
                       <div class="  collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="dropdown2 nav-item"><a class="  nav-link js-scroll-trigger dropbtn2" href="Home.php#services">Reservation</a><div class="dropdown-content2">
     </div> </li>
                        
            
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Logout.php">Se déconnecter</a></li>
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
                                              <div ></div> <form action="valider.php" method="post"> 
                                                <table id="table_id" class="table table-striped table-dark">
  <thead>
  <tr style="background-color: gold;">

 
      <th scope="col">Num reservation</th>
      <th scope="col">Matricule</th> <th scope="col">Cin</th>
      <th scope="col">Date debut</th>
      <th scope="col">Date fin</th><th scope="col">chauffeur</th>
      <th scope="col">Statut</th>
            <th scope="col">action</th>
      
    </tr>
  </thead>
            <tbody>
         
                 
             <tr>  <?php  $sql = mysqli_query($con, "SELECT * FROM reservation where statuts='en cours'");          




  while($data = mysqli_fetch_assoc($sql)){ 
    $numero_reservation =$data['numero_reservation']; $_SESSION['numero_reservation'] = $numero_reservation;$mat=$data['matricule'] ;$_SESSION['matri'] = $mat;
    ?>     <td name="numero_reservation" > <?php echo $data['numero_reservation']; ?></td>
           <td name="matricule"><?php echo  $data['matricule'] ; ?></td>
           <td name="cin"><?php echo $data['cin']; ?></td>
           <td name="date_debut"><?php echo $data['date_debut']; ?></td>
           <td name="date_fin"><?php echo $data['date_fin']; ?></td>
           <td name="chauffeur"><?php  if($data['chauffeur']=='avec'){  $date=date('Y-m-d');
 

$sqll=mysqli_query($con, "SELECT  COUNT(*) FROM chauffeur");
$c=1;
  while($data = mysqli_fetch_assoc($sqll)){
   $c=$c+1;     }   



 $query = "SELECT DISTINCT c.* FROM chauffeur c,reservation r where ( c.numero_reservation=r.numero_reservation and r.date_fin<$date) or c.numero_reservation is null limit $c" ;                         ?>                                                                                                                                                                                        <SELECT name= "chauff" > <?php
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){                                                 
       echo "<option value='".$row['id_chauffeur']."'>".$row['nom_chauffeur']."</option>";
   $ic=$row['id_chauffeur']; }echo "</select>";
} else { echo "sans";}   ?></td>
           <td name="statuts"><?php echo $data['statuts']; ?></td>
 
         
          
           
              <td><button name="valider" type="submit"  onclick=" return confirm('etes vous sur de vouloir valider');" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Valider</button><a  href="refuser.php" onclick=" return confirm('etes vous sur de vouloir Refuser');" name="refuser"  class="btn btn-danger ml-4 btn-sm active" role="button" aria-pressed="true">Refuser</a></td>

             
                    </tr>

                    
                                          
                                                                 
                          <?php } ?>                     

            </tbody>
</table>
</form>
                                                
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</html>