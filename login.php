<?php
include('connection.php');
if(isset($_GET['email_client']) && isset($_GET['pass'])){
    
    $email_client = mysqli_real_escape_string($con , $_GET['email_client']);
    $pass = mysqli_real_escape_string($con , $_GET['pass']);
    
    $sql = mysqli_query($con,"SELECT * FROM client WHERE email_client = '$email_client' AND passwd_client ='$pass'");
        
        if(mysqli_num_rows($sql) == 1){
        $data = mysqli_fetch_assoc($sql);
        $_SESSION['cin']   = $data['cin'];
        
          header('Location:home.php');

        } else if (mysqli_num_rows($sql) == 0) {

          $sqli = mysqli_query($con,"SELECT * FROM admin WHERE email = '$email_client' AND passwd ='$pass'");
          if(mysqli_num_rows($sqli) == 1){
        $data = mysqli_fetch_assoc($sqli);
        $_SESSION['nom']   = $data['nom'];
        
          header('Location:reservationad.php');
}
        
else if(mysqli_num_rows($sqli) == 0) {  
    $sqla = mysqli_query($con,"SELECT * FROM chauffeur WHERE email_chauffeur = '$email_client' AND passwd_chauffeur ='$pass'");
          if(mysqli_num_rows($sqla) == 1){
        $data = mysqli_fetch_assoc($sqla);
        $_SESSION['nom_chauffeur']   = $data['nom_chauffeur'];
        
          header('Location:chauffeur.php');}else {header('Location:login.php?loginfailed');}}  }                                        }
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
        <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
        <title>Login</title>
    </head>
    <body id="page-top">
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="Home.php#page-top">Cars4You</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Home.php#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Home.php#portfolio">Gallerie</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Home.php#map">Map</a></li>
             
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Login.php">Se connecter</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <form>
       
<header class="masthead">
<div class="container">
                            
<div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4 text-primary">Login</h3></div>
                                    <div class="card-body">
                                        <form name="f1"   method = "get">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input  id="user" name="email_client" required="" class="form-control py-4"  type="email"  placeholder="Entrer votre adresse email "  /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Mot de passe</label><input  id="pass" name="pass" class="form-control py-4"  required=""  type="password" placeholder="Entrer votre mot de passe" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><span class="small text-danger" id="msg" ></span><input type="submit" class="btn btn-primary" name="login" value="Login"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="Inscription.php">Vous n'avez toujours pas un compte? Rejoignez nous!</a></div>
                                    </div>
                                </div>
                        </div>
</div> 

    </header>
      
                            
        



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