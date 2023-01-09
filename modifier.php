<?php

include('connection.php');
if (isset($_GET['matricule'])) {
  $matricule = $_GET['matricule'];


  if($_POST){
  
  $marque   = $_POST['marque'];
  $modele    = $_POST['modele']; 
  $transaction    = $_POST['transaction'];
  $carburant = $_POST['carburant'];
  $prix   = $_POST['prix'];
  
  mysqli_query($con , "UPDATE `voiture`
                       SET `marque`='$marque',`modele`='$modele',`transaction`='$transaction',`carburant`='$carburant',`prix`='$prix'
                       WHERE matricule = '$matricule'");
  header('Location:gestion.php');
}
}

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
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
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
                                                <div class="container"></div>
                                                <table class="table table-striped table-dark"><hr>
          <form action="" method="post">
          <?php
          $sql = mysqli_query($con, "SELECT * FROM voiture WHERE matricule = '$matricule'");
          $data = mysqli_fetch_assoc($sql);
          ?>
          <div class="form-group">
              <label for="exampleInputEmail1">Image</label><br>
              <img  src="<?php echo $data['image']; ?>" alt="...">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Matricule</label>
              <input type="text" class="form-control" readonly placeholder="matricule" name="matricule" required="" autofocus=""
              value="<?php echo $data['matricule'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Marque</label>
              <input type="text" class="form-control" placeholder="Marque" name="marque" required="" autofocus=""
              value="<?php echo $data['marque'];?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Modele</label>
              <input type="text" class="form-control" placeholder="Modele" name="modele" required="" autofocus="" value="<?php echo $data['modele'];?>">
            </div>
            
             <div class="form-group">
              <label for="exampleInputPassword1">Transaction </label>
              <input  class="form-control" name="transaction" placeholder="Nombre de place" required=""  autofocus="" value="<?php echo $data['transaction'];?>">
            </div>
            
            
            <div class="form-group">
              <label for="exampleInputPassword1">Carburant</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="carburant" name="carburant" required="" autofocus="" value="<?php echo $data['carburant']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Prix</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ex: 500 Dhs" name="prix" required="" autofocus="" value="<?php echo $data['prix'];?>">
            </div>
            
            <button type="submit" class="btn btn-primary active">Modifier</button>
          </form>         
      </div>

      <div class="col-md-3">
      
      </div>

    </div>

    <hr>           
   

                                                
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
</html>