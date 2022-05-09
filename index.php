<?php
session_start();
?>
<!DOCTYPE HTML>
   <html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
   
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Site pour un projet universitaire pour des sports de glisse" />
        <meta name="author" content="Maugy Alexandre / Célian Kouas" />


        <title>BeWet-SAE102-Projet</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/Bewet/Acceuil/assets/favicon.ico" />
        
       <!-- Font Awesome icons (free version)-->
       <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/Bewet/Acceuil/css/styles.css" type="text/css" rel="stylesheet" >

    </head>
    <body id="page-top">
        <!--Navigation-->
        <?php
        if(!isset($_SESSION['user']))
        {echo <<<FOO
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="/Bewet/Acceuil/assets/img/navbar-logo.jpg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-special ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <div class="dropdown btn btn-primary btn-rounded text-uppercase">
                            <button class="dropbtn"><b>Vêtements</b></button>
                            <div class="dropdown-content">
                              <a href="/Bewet/ProduitV/Produits.php">Tous les vêtements</a>
                              <a href="/Bewet/ProduitV/ProduitsH.php">Homme</a>
                              <a href="/Bewet/ProduitV/ProduitsF.php">Femme</a>
                              <a href="/Bewet/ProduitV/ProduitsE.php">Enfant</a>
                            </div>
                          </div></li>
                        </a></li>
                        <li class="nav-item">
                            <div class="dropdown btn btn-primary btn-rounded text-uppercase">
                            <button class="dropbtn"><b>Accessoire</b></button>
                            <div class="dropdown-content">
                              <a href="/Bewet/ProduitA/Produits.php">Tous les accessoire</a>
                              <a href="/Bewet/ProduitA/ProduitsS.php">Ski nautique</a>
                              <a href="/Bewet/ProduitA/ProduitsPV.php">Planche à Voile</a>
                              <a href="/Bewet/ProduitA/ProduitsC.php">Canoë / Kayak</a>
                              <a href="/Bewet/ProduitA/ProduitsPS.php">Surf</a>
                            </div>
                          </div></li>
                    <li class="nav-item"><a class="dropdown btn btn-primary btn-rounded text-uppercase"  href="/Bewet/Connexion/inscription.php">
                        <button class="dropbtn"><b>S'inscrire</b></button>
                    </a></li>
                     <li>
                            <form class="nav-item" action="/Bewet/Acceuil/page_produit.php" method="post"> 
                                <input id="searchbar" class="font-spe" name="recherche" type="text" placeholder="...">
                                <a class="dropdown btn btn-primary btn-rounded text-uppercase">   
                                <button class="dropbtn" type="submit"><b>Rechercher</b></button></a>
                            </form>
                         </li>
                    </ul>
                </div>
            </div>
        </nav>
FOO;
}
        else {
        echo <<<FOO
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="/Bewet/Acceuil/assets/img/navbar-logo.jpg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-special ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <div class="dropdown btn btn-primary btn-rounded text-uppercase">
                            <button class="dropbtn"><b>Vêtements</b></button>
                            <div class="dropdown-content">
                              <a href="/Bewet/ProduitV/Produits.php">Tous les vêtements</a>
                              <a href="/Bewet/ProduitV/ProduitsH.php">Homme</a>
                              <a href="/Bewet/ProduitV/ProduitsF.php">Femme</a>
                              <a href="/Bewet/ProduitV/ProduitsE.php">Enfant</a>
                            </div>
                          </div></li>
                        </a></li>
                        <li class="nav-item">
                            <div class="dropdown btn btn-primary btn-rounded text-uppercase">
                            <button class="dropbtn"><b>Accessoire</b></button>
                            <div class="dropdown-content">
                              <a href="/Bewet/ProduitA/Produits.php">Tous les accessoire</a>
                              <a href="/Bewet/ProduitA/ProduitsS.php">Ski nautique</a>
                              <a href="/Bewet/ProduitA/ProduitsPV.php">Planche à Voile</a>
                              <a href="/Bewet/ProduitA/ProduitsC.php">Canoë / Kayak</a>
                              <a href="/Bewet/ProduitA/ProduitsPS.php">Surf</a>
                            </div>
                   <li class="nav-item"><a class="dropdown btn btn-primary btn-rounded text-uppercase"  href="/Bewet/ShoppingCart/cart.php">
FOO;
                        echo "<button class='dropbtn'><b>$_SESSION[user]</b></button>";
                        echo <<<FOO
                    </a></li>
                     <li>
                            <form class="nav-item" action="/Bewet/Acceuil/page_produit.php" method="post"> 
                                <input id="searchbar" class="font-spe" name="recherche" type="text" placeholder="...">
                                <a class="dropdown btn btn-primary btn-rounded text-uppercase">   
                                <button class="dropbtn" type="submit"><b>Rechercher</b></button></a>
                            </form>
                         </li>
                    </ul>
                </div>
            </div>
        </nav>
FOO;
           } ?>
           

        <!-- Image Acceuil -->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">BeWet</div>
                <div class="masthead-heading text-uppercase">Tout le matériel de glisse nautique que vous pouvez réver est là!</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Dîtes m'en plus...</a>
            </div>
        </header>
        <!--Carousel-->
        <section class="page-section bg-light" id="carousel">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-special">Exemple de produit</h2>
                <h3 class="section-subheading text-muted">Voice quelque produits que nous proposons ici sur BeWet!</h3>
            </div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/Bewet/Acceuil/assets/img/carousel/pav.jpg" class=" m-md-auto d-block  " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Planche à Voile</h5>
                    <p class="carousel-text">Une planche à voile pour vous sentir aussi libre que l'air!</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="/Bewet/Acceuil/assets/img/carousel/kayak.jpg" class="m-md-auto d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Canoë / Kayak</h5>
                    <p class="carousel-text">Un kayak qui vous fera voguez aussi longtemps que vous le voulez!</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="/Bewet/Acceuil/assets/img/carousel/surf.jpg" class="m-md-auto d-block " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Planches de Surf</h5>
                    <p class="carousel-text">Un planche qui vous fera glisser vers l'horizon!</p>
                  </div>
                </div>
            </div>
        </div>
      </section>
        <!-- Gamme de produit -->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-special">Gamme de produit</h2>
                    <h3 class="section-subheading text-muted">Nous avons plusieurs type de produit différent appartennant à différentes games. Le voicis ci-dessous! </h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-wind fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Voile</h4>
                        <p class="text-muted">Nous proposons une large gamme de produit qui tourne autour de la voile et des sports de voile. Vous pourrez retrouver par exemples des produits portant sur le catamaran ou bien la planche à voile.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-water fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Glisse-Nautique</h4>
                        <p class="text-muted">Nous proposons une large gamme de produit qui tourne autour des sport de glisse nautique tels que le ski-nautique ou bien même le wakeboard. Des planches, des skis, des protections, tout pour votre plaisir et votre confort!</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-tshirt fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Vêtements</h4>
                        <p class="text-muted">Nous proposons également des vêtements qui pourront vous servir tout au long de vos activité de glisse nautique! Des combinaisons, des protections, des chaussures un large échantillon de produits pour tout les goûts... </p>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Map -->
        <section class="page-section bg-light" id="maps">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-special"><br>Spots de glisse</h2>
                <h3 class="little-text text-muted">Pour plus d'informations veuillez vous référez aux sites des spots trouvable sur internet!.</h3>
            </div>
            <iframe class="maps-allign"
                width="600"
                height="450"
                loading="lazy"
                allowfullscreen
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3495393.1752558663!2d3.7659001358348876!3d43.99298143306272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSpots%20de%20glisse%20nautique%20!5e0!3m2!1sfr!2sfr!4v1636541316088!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-special">Contactez nous</h2>
                    <h3 class="section-subheading text-blanc">Vous avez un problème avec un produit? Vous avez une questions à propos d'un produit? Ou pour quelque chose d'autre n'hésitez pas à nous contacter!</h3>
                </div>
                <!-- Formulaire de contact-->
                <form action="index.php" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Votre nom *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis.</div>
                            <br>
                            <!--Date de naissance input -->
                            <div class="form-group">
                            <input class="form-control" id="apost" type="text" placeholder="Votre date de naissance*" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Une adresse est requise.</div>
                            </div>
                            <br>
                            <!--Civilité Input-->
                            <input class="form-control" id="civ" type="text" placeholder="Votre civilité *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Veuillez noter votre civilité.</div>
                                <br>
                            <!-- Sport input-->
                            <div class="form-group">
                                <input class="form-control" id="apost" type="text" placeholder="Quel sport pratiquez vous?" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Une adresse est requise.</div>
                                    </div>
                            <br>
                                <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Votre adresse mail *" data-sb-validations="required,email" />
                                
                                <div class="invalid-feedback" data-sb-feedback="email:required">Une adresse mail est requise.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">L'adresse mail n'est pas valide</div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <!-- Adress postal input-->
                                    <input class="form-control" id="apost" type="text" placeholder="Votre adresse postale *" data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Une adresse est requise.</div>
                            </div>
                            <br>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="number" placeholder="Votre numéro de téléphone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Un numéro de téléphone est requis.</div>
                        </div>
                        <br>
                    </div>
                 </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Tapez votre message ici. " data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis.</div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Message envoyé avec succès</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Il y'a une erreur, le message ne s'est pas envoyé...</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-special disabled" id="submitButton" type="submit">Envoyer le message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; SAE 102 - Maugy/Kouas</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/Oximus_"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Politiques des cookies</a>
                        <a class="link-dark text-decoration-none" href="#!">Termes d'utilisation</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/Bewet/Acceuil/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
