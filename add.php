<?php

include('connection.php');


if (isset($_POST['ajouter'])){




$matricule         = $_POST['matricule'];  
$marque         = $_POST['marque'];
$modele         = $_POST['modele'];
$carburant     = $_POST['carburant'];
$transaction   = $_POST['transaction'];
$prix           = $_POST['prix'];

     $filename = $_FILES["imgvoit"]["name"];
    $tempname = $_FILES["imgvoit"]["tmp_name"];    
        $folder = "img/".$filename;
$disponible='oui';
  move_uploaded_file($tempname, $folder);


$sql = mysqli_query($con, "INSERT INTO voiture (matricule, marque, modele,carburant,transaction,prix,image,disponible)
                           VALUES ('$matricule','$marque','$modele','$carburant','$transaction','$prix','$folder','$disponible')");

         
}
?>
<!DOCTYPE html>
<html>
    <head>
                        <meta charset="utf-8" />
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
        <title>ajouter voiture</title>

    </head>
    <body id="page-tope">
                  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="Home.php#page-top">Cars4You</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Home.php#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Home.php#portfolio">Gallerie</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Home.php#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Home.php#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
                  
                <form method="post" enctype="multipart/form-data"> 
                    <header class="masthead">
                        <div class="container">
  <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4 text-primary">Ajouter Voiture</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Nom</label><input class="form-control py-4" id="inputFirstName" required=""  type="text" name="matricule" placeholder="Matricule" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Prenom</label><input class="form-control py-4" required=""  id="inputLastName" type="text" name="marque" placeholder="marque" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Telephone</label><input class="form-control py-4" required=""  id="inputFirstName" type="text" name="modele" placeholder="modele" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">CIN</label><input class="form-control py-4" required=""  id="inputLastName" type="text" name="carburant" placeholder="Carburant" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" required="" id="inputEmailAddress" type="text" name="transaction" aria-describedby="emailHelp" placeholder="transaction "/></div>
                                            <div class="form-row">  
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Mot de passe</label><input class="form-control py-4" required="" id="passw" type="text" name="prix" placeholder="prix" /></div>
                                                </div>       <div class="form-group">
                                                                      
              <input name="imgvoit" type="file" class="form-control" required="">
            </div>
            
                                                
                                            </div>
                                            <div class="form-group mt-4 mb-0"><span class="small text-danger" id="msg"></span>< <input class="btn btn-primary btn-block" type="submit" name="ajouter" value="Ajouter" /> ></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                      
                                    </div>
                                </div>
                            </div>
                        </div>  
        
                        </div> </header></form>

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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</html>