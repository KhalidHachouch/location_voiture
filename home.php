<?php
include('connection.php'); 

 $cin=$_SESSION['cin'] ;  


 $sql=mysqli_query($con, "select * from client where cin='$cin'");
while($data = mysqli_fetch_assoc($sql)){ 
 
$nom=$data['nom_client'];




                  }?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cars4You - Reserver votre voiture</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="jquery.js" type="text/javascript"></script>
        <style>@media screen and (max-width:480px){
                                                    #blackie{
                                                                width: 260px;
                                                                height: 260px;
                                                                margin: 12%;
                                                                 
                                                            }
}
@media screen and (max-width:768px){
    #blackie{ width: 380px;
              height: 300px;
              margin: 10%;
    }
}
@media screen and (min-width:1024px){
    #blackie{width:600px;
    height: 380px;}
}   
        </style>
        
        </script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="Home.php#page-top">Cars4You</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Gallerie</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Map</a></li>
                      
                          <?php if (!isset($_SESSION['cin']))  { ?> <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Login.PHP">Se connecter</a></li> <?php  } else {  ?>
                          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="reservationcl.php">Mes reservations</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="listevoitures.php">Bienvenue <?php echo $nom; ?> </a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Logout.php">Se déconnecter <?php } ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
       
                <div class="masthead-heading text-uppercase text-primary ">Cars4You votre agence préférée</div>
                <div class="masthead-subheading  ">Découvez le Maroc autrement a bord de nos véhicules les plus confortables, sécurisés et économiques.</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Découvrer nos services</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-user-tie fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Chauffeur</h4>
                        <p class="text-muted">Chauffeur sur demande pour des frais supplémentaires de 100 Dh par jours.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-people-carry         fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Livraison de voiture</h4>
                        <p class="text-muted">Votre voiture sera livrée pour vous partout au maroc</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-hands fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Assurance</h4>
                        <p class="text-muted ">Responsabilité civile<br>Accidents causés aux tiers<br>Vol & incendie<br>Dommage et collisions<br>Incendie du véhicule</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Gallerie</h2>
                    <h3 class="section-subheading text-muted">Découverez nos voitures .</h3>
                </div>
                <div class="row"> <?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 ");
  while($data = mysqli_fetch_assoc($sql)){ ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="margin-left: 80px"  class="img-fluid" src="<?php echo $data['image']; ?>"
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> <?php echo $data['marque']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $data['modele']; }  ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">    <?php $sql = mysqli_query($con, "SELECT  * FROM voiture LIMIT 1 OFFSET 1;");
  while($data = mysqli_fetch_assoc($sql)){ ?>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="margin-left: 80px"  class="img-fluid" src="<?php echo $data['image']; ?>"
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> <?php echo $data['marque']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $data['modele']; }  ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4"><?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 2");
  while($data = mysqli_fetch_assoc($sql)){ ?>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="margin-left: 80px"  class="img-fluid" src="<?php echo $data['image']; ?>"
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> <?php echo $data['marque']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $data['modele']; }  ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0"><?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 3");
  while($data = mysqli_fetch_assoc($sql)){ ?>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="margin-left: 80px"  class="img-fluid" src="<?php echo $data['image']; ?>"
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> <?php echo $data['marque']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $data['modele']; }  ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0"><?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 4");
  while($data = mysqli_fetch_assoc($sql)){ ?>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="margin-left: 80px"  class="img-fluid" src="<?php echo $data['image']; ?>"
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> <?php echo $data['marque']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $data['modele']; }  ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6"><?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 5");
  while($data = mysqli_fetch_assoc($sql)){ ?>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img style="margin-left: 80px" src="<?php echo $data['image']; ?>"
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> <?php echo $data['marque']; ?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $data['modele']; }  ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="listevoitures.php"><button type="button" class="btn btn-success btn-lg btn-block" >Reserver Maintenant </button></a>
        </section>
        <!-- About
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part<br />Of Our<br />Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->
        <!-- test-->
         <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">MAP</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
      
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            
                            <br>
                            <br>
                            <br>
                                <h4 class=" font-weight-bolder text-primary">Ouverture de 8h jusqu'a 17h</h4>
                           
                                <br>
                                
                                <h4 class="font-weight-bolder text-primary">Du lundi au Samedi</h4>
                            
                                <br>
                               
                                <h4 class="font-weight-bolder text-primary">Via l'adresse suivante: Cars4You, Marrakech 40140 Rue Zarktouni</h4>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group  mb-md-0">
                                <iframe id="blackie" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.9916300502823!2d-8.05941578498921!3d31.63407954868381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe945627e2a17%3A0xcc3ea77a047e5141!2sCars4You!5e0!3m2!1sfr!2sma!4v1590192530117!5m2!1sfr!2sma"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
                                
                            </div>
                        </div>
                    </div>

                
            </div>
        </section>
        <!-- Team 
        
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>Kay Garland</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="" />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="" />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section> -->
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <img class="img-fluid d-block mx-auto" src="assets/img/logos/Audi logo.png" alt="" />
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <img class="img-fluid d-block mx-auto" src="assets/img/logos/Ford logo.png" alt="" />
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <img class="img-fluid d-block mx-auto" src="assets/img/logos/Hyundai-Logo.png" alt="" />
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <img class="img-fluid d-block mx-auto" src="assets/img/logos/toyota-vector-logo (1).png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact
        <section class="page-section" id="contact1">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>-->
        <!-- Footer-->
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
        <!-- Portfolio Modals--><!-- Modal 1-->  <?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 ");
  while($data = mysqli_fetch_assoc($sql)){ ?>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <form action="reservation.php" > 
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $data['marque'] ; echo "   " ;  echo $data['modele']; ?></h2>
                                   <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $data['image']; ?>" alt="" />
                                    <!--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>-->
                                    <ul class="list-inline"> 
                                        <li><span class="badge badge-dark">Carburant     :        <?php echo $data['carburant']; ?></span></li>
                                        <li><span class="badge badge-dark">Transaction   :        <?php echo $data['transaction']; ?></span></li>
                                        <li><span class="badge badge-dark">Prix          :        <label id="prix"><?php echo $data['prix']; ?></label>DH/jour</span></li>
                                    </ul>
                                   
                                  
                                                 

                                    <div class="row">
                                        <div class="col">
                                            <input hidden="" value="<?php echo $data['matricule'];}  ?>" name="mat">
                                             <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Fermer</button></div><div class="col">
                                                <?php if (empty($_SESSION['cin'])){ ?> <button id="a1" class="btn btn-success text-white" disabled="true" type="submit"><i class="fas fa-times mr-1"></i>Reserver(connecter vous dabord)</button></div></div><?php } else { ?> 
                                                <button id="a1" class="btn btn-success text-white"  type="submit"><i class="fas fa-times mr-1"></i>Reserver</button></div></div><?php } ?>
                                                 
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 1  ");
  while($data = mysqli_fetch_assoc($sql)){ ?>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <form action="reservation.php" > 
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $data['marque'] ; echo "   " ;  echo $data['modele']; ?></h2>
                                   <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $data['image']; ?>" alt="" />
                                    <!--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>-->
                                    <ul class="list-inline"> 
                                        <li><span class="badge badge-dark">Carburant     :        <?php echo $data['carburant']; ?></span></li>
                                        <li><span class="badge badge-dark">Transaction   :        <?php echo $data['transaction']; ?></span></li>
                                        <li><span class="badge badge-dark">Prix          :        <label id="prix"><?php echo $data['prix']; ?></label>DH/jour</span></li>
                                    </ul>
                                   
                                  
                                                 

                                    <div class="row">
                                        <div class="col">
                                            <input hidden="" value="<?php echo $data['matricule'];}  ?>" name="mat">
                                             <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Fermer</button></div><div class="col">
                                                <?php if (empty($_SESSION['cin'])){ ?> <button id="a1" class="btn btn-success text-white" disabled="true" type="submit"><i class="fas fa-times mr-1"></i>Reserver(connecter vous dabord)</button></div></div><?php } else { ?> 
                                                <button id="a1" class="btn btn-success text-white"  type="submit"><i class="fas fa-times mr-1"></i>Reserver</button></div></div><?php } ?>
                                                 
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 2  ");
  while($data = mysqli_fetch_assoc($sql)){ ?>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <form action="reservation.php" > 
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $data['marque'] ; echo "   " ;  echo $data['modele']; ?></h2>
                                   <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $data['image']; ?>" alt="" />
                                    <!--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>-->
                                    <ul class="list-inline"> 
                                        <li><span class="badge badge-dark">Carburant     :        <?php echo $data['carburant']; ?></span></li>
                                        <li><span class="badge badge-dark">Transaction   :        <?php echo $data['transaction']; ?></span></li>
                                        <li><span class="badge badge-dark">Prix          :        <label id="prix"><?php echo $data['prix']; ?></label>DH/jour</span></li>
                                    </ul>
                                   
                                  
                                                 

                                    <div class="row">
                                        <div class="col">
                                            <input hidden="" value="<?php echo $data['matricule'];}  ?>" name="mat">
                                             <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Fermer</button></div><div class="col">
                                                <?php if (empty($_SESSION['cin'])){ ?> <button id="a1" class="btn btn-success text-white" disabled="true" type="submit"><i class="fas fa-times mr-1"></i>Reserver(connecter vous dabord)</button></div></div><?php } else { ?> 
                                                <button id="a1" class="btn btn-success text-white"  type="submit"><i class="fas fa-times mr-1"></i>Reserver</button></div></div><?php } ?>
                                                 
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 3 ");
  while($data = mysqli_fetch_assoc($sql)){ ?>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <form action="reservation.php" > 
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $data['marque'] ; echo "   " ;  echo $data['modele']; ?></h2>
                                   <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $data['image']; ?>" alt="" />
                                    <!--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>-->
                                    <ul class="list-inline"> 
                                        <li><span class="badge badge-dark">Carburant     :        <?php echo $data['carburant']; ?></span></li>
                                        <li><span class="badge badge-dark">Transaction   :        <?php echo $data['transaction']; ?></span></li>
                                        <li><span class="badge badge-dark">Prix          :        <label id="prix"><?php echo $data['prix']; ?></label>DH/jour</span></li>
                                    </ul>
                                   
                                  
                                                 

                                    <div class="row">
                                        <div class="col">
                                            <input hidden="" value="<?php echo $data['matricule'];}  ?>" name="mat">
                                             <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Fermer</button></div><div class="col">
                                                <?php if (empty($_SESSION['cin'])){ ?> <button id="a1" class="btn btn-success text-white" disabled="true" type="submit"><i class="fas fa-times mr-1"></i>Reserver(connecter vous dabord)</button></div></div><?php } else { ?> 
                                                <button id="a1" class="btn btn-success text-white"  type="submit"><i class="fas fa-times mr-1"></i>Reserver</button></div></div><?php } ?>
                                                 
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 4 ");
  while($data = mysqli_fetch_assoc($sql)){ ?>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <form action="reservation.php" > 
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $data['marque'] ; echo "   " ;  echo $data['modele']; ?></h2>
                                   <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $data['image']; ?>" alt="" />
                                    <!--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>-->
                                    <ul class="list-inline"> 
                                        <li><span class="badge badge-dark">Carburant     :        <?php echo $data['carburant']; ?></span></li>
                                        <li><span class="badge badge-dark">Transaction   :        <?php echo $data['transaction']; ?></span></li>
                                        <li><span class="badge badge-dark">Prix          :        <label id="prix"><?php echo $data['prix']; ?></label>DH/jour</span></li>
                                    </ul>
                                   
                                  
                                                 

                                    <div class="row">
                                        <div class="col">
                                            <input hidden="" value="<?php echo $data['matricule'];}  ?>" name="mat">
                                             <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Fermer</button></div><div class="col">
                                                <?php if (empty($_SESSION['cin'])){ ?> <button id="a1" class="btn btn-success text-white" disabled="true" type="submit"><i class="fas fa-times mr-1"></i>Reserver(connecter vous dabord)</button></div></div><?php } else { ?> 
                                                <button id="a1" class="btn btn-success text-white"  type="submit"><i class="fas fa-times mr-1"></i>Reserver</button></div></div><?php } ?>
                                                 
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php $sql = mysqli_query($con, "SELECT  * FROM voiture  LIMIT 1 OFFSET 5 ");
  while($data = mysqli_fetch_assoc($sql)){ ?>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <form action="reservation.php" > 
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $data['marque'] ; echo "   " ;  echo $data['modele']; ?></h2>
                                   <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>-->
                                    <img class="img-fluid d-block mx-auto" src="<?php echo $data['image']; ?>" alt="" />
                                    <!--<p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>-->
                                    <ul class="list-inline"> 
                                        <li><span class="badge badge-dark">Carburant     :        <?php echo $data['carburant']; ?></span></li>
                                        <li><span class="badge badge-dark">Transaction   :        <?php echo $data['transaction']; ?></span></li>
                                        <li><span class="badge badge-dark">Prix          :        <label id="prix"><?php echo $data['prix']; ?></label>DH/jour</span></li>
                                    </ul>
                                   
                                  
                                                 

                                    <div class="row">
                                        <div class="col">
                                            <input hidden="" value="<?php echo $data['matricule'];}  ?>" name="mat">
                                             <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Fermer</button></div><div class="col">
                                                <?php if (empty($_SESSION['cin'])){ ?> <button id="a1" class="btn btn-success text-white" disabled="true" type="submit"><i class="fas fa-times mr-1"></i>Reserver(connecter vous dabord)</button></div></div><?php } else { ?> 
                                                <button id="a1" class="btn btn-success text-white"  type="submit"><i class="fas fa-times mr-1"></i>Reserver</button></div></div><?php } ?>
                                                 
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/Sawl.js" type="text/javascript"></script>
    </body>
</html>