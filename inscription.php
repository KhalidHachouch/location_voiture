
<?php
include('connection.php');

if($_GET){
  
$cin     = $_GET['cin'];
$nom     = $_GET['nom'];
$prenom    = $_GET['prenom'];
$email    = $_GET['email'];
$passw = $_GET['passw'];
$telephone  = $_GET['telephone'];


  mysqli_query($con, "INSERT INTO `client`(`cin`, `nom_client`, `prenom_client`, `email_client`, `passwd_client`, `telephone_client`) VALUES ('$cin','$nom','$prenom','$email','$passw','$telephone')");
  
  
 
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
        <title>Inscription</title>
        <script>
            function verify(){

                var pass=document.getElementById("passw").value;
                var pass1=document.getElementById("passw1").value;
                if( pass !== pass1)
                {     
                 
                 document.getElementById("msg").innerHTML="Les mots de passe ne sont pas identiques";
                 return false;
                }

                else
                {
                 return true ;
                }


            }
        </script>
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
                        <!--<% if(session.getAttribute("email")==null){ %>--><li class="nav-item"><a class="nav-link js-scroll-trigger" href="Login.php">Login</a></li><!--    <%}%>-->
                       <!-- <% if(session.getAttribute("email")!=null){ %><li class="nav-item"><a class="nav-link js-scroll-trigger" href="Logout.php">Logout</a></li><%}%>-->
                    </ul>
                </div>
            </div>
        </nav>
                  
                <form> 
                    <header class="masthead">
                        <div class="container">
        <!--<pre>
                              Email                    :<input type="text" name="email"/>


                              Mot de passe             :<input type="password" name="passw" id="passw" />
                              

                              Confirmez le mot de passe:<input type="password" name="passw1" id="passw1" />



                              CIN                      :<input type="text" name="cin"/>


                              Nom complet              :<input type="text" name="nom"/>
                              

                              Adresse                  :<input type="text" name="adresse"/>


                              Télèphone                :<input type="number" name="tel"/>



                              

                              <input type="submit" name="inscription" value="S'inscrire" onclick="return verify();"/>


                            
                              
        </pre>--><div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4 text-primary">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="get">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Nom</label><input class="form-control py-4" id="inputFirstName" required=""  type="text" name="nom" placeholder="Entrez votre nom" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">Prenom</label><input class="form-control py-4" required=""  id="inputLastName" type="text" name="prenom" placeholder="Entrez votre prenom" /></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Telephone</label><input class="form-control py-4" required=""  id="inputFirstName" type="text" name="telephone" placeholder="Telephone" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName">CIN</label><input class="form-control py-4" required=""  id="inputLastName" type="text" name="cin" placeholder="Cin" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input class="form-control py-4" required="" id="inputEmailAddress" type="email" name="email" aria-describedby="emailHelp" placeholder="Entrz votre adresse email " /></div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Mot de passe</label><input class="form-control py-4" required="" id="passw" type="password" name="passw" placeholder="Entrer mot de passe" /></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirmez votre mot de passe</label><input class="form-control py-4" required="" id="passw1" name="passw1" type="password" placeholder="Confirmez mot de passe" /></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><span class="small text-danger" id="msg"></span>< <input class="btn btn-primary btn-block" type="submit" name="inscription" value="S'inscrire" onclick="return verify();"/> ></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="Login.php">Vous avez deja un compte? Connectez-vous</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
        
                        </div> </header></form>
   <!--     <% 
    Connection c=Connexion.get();
       Statement s=c.createStatement();
              
           String sinscrire   = request.getParameter("inscription"); 
           if(sinscrire!=null){

           String nom = request.getParameter("nom");
           String prenom = request.getParameter("prenom");
         String adresse =request.getParameter("adresse");
          String pass  = request.getParameter("passw");
          String login =request.getParameter("email");
          String tel =request.getParameter("tel");
          String cin=request.getParameter("cin");
          String reqt="insert into client values('"+cin+"','"+nom+prenom+"','"+adresse+"','"+tel+"','"+login+"','"+pass+"')" ;
          System.out.print(reqt);

          s.executeUpdate(reqt);
         response.sendRedirect("Login.php");}
           

        %>-->
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