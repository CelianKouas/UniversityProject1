<?php
session_start();?>
<!DOCTYPE HTML>
   <html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
   
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Site pour un projet universitaire pour des sports de glisse" />
        <meta name="author" content="Maugy Alexandre / Célian Kouas" />


        <title>BeWet-SAE102-Projet</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
       <!-- Font Awesome icons (free version)-->
       <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" type="text/css" rel="stylesheet" >

    </head>
    <body id="page-top">
        
    <?php
    if(!isset($_SESSION['user']))
        {echo <<<FOO
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="../index.php"><img src="assets/img/navbar-logo.jpg" alt="..." /></a>
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
                              <a href="../ProduitV/Produits.php">Tous les vêtements</a>
                              <a href="../ProduitV/ProduitsH.php">Homme</a>
                              <a href="../ProduitV/ProduitsF.php">Femme</a>
                              <a href="../ProduitV/ProduitsE.php">Enfant</a>
                            </div>
                          </div></li>
                        </a></li>
                        <li class="nav-item">
                            <div class="dropdown btn btn-primary btn-rounded text-uppercase">
                            <button class="dropbtn"><b>Accessoire</b></button>
                            <div class="dropdown-content">
                              <a href="../ProduitA/Produits.php">Tous les accessoire</a>
                              <a href="../ProduitA/ProduitsS.php">Ski nautique</a>
                              <a href="../ProduitA/ProduitsPV.php">Planche à Voile</a>
                              <a href="../ProduitA/ProduitsC.php">Canoë / Kayak</a>
                              <a href="../ProduitA/ProduitsPS.php">Surf</a>
                            </div>
                          </div></li>
                    <li class="nav-item"><a class="dropdown btn btn-primary btn-rounded text-uppercase"  href="../Connexion/inscription.php">
                        <button class="dropbtn"><b>S'inscrire</b></button>
                    </a></li>
                     <li>
                            <form class="nav-item" action="../Acceuil/page_produit.php" method="post"> 
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
                <a class="navbar-brand" href="../index.php"><img src="assets/img/navbar-logo.jpg" alt="..." /></a>
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
                              <a href="../ProduitV/Produits.php">Tous les vêtements</a>
                              <a href="../ProduitV/ProduitsH.php">Homme</a>
                              <a href="../ProduitV/ProduitsF.php">Femme</a>
                              <a href="../ProduitV/ProduitsE.php">Enfant</a>
                            </div>
                          </div></li>
                        </a></li>
                        <li class="nav-item">
                            <div class="dropdown btn btn-primary btn-rounded text-uppercase">
                            <button class="dropbtn"><b>Accessoire</b></button>
                            <div class="dropdown-content">
                              <a href="../ProduitA/Produits.php">Tous les accessoire</a>
                              <a href="../ProduitA/ProduitsS.php">Ski nautique</a>
                              <a href="../ProduitA/ProduitsPV.php">Planche à Voile</a>
                              <a href="../ProduitA/ProduitsC.php">Canoë / Kayak</a>
                              <a href="../ProduitA/ProduitsPS.php">Surf</a>
                            </div>
                   <li class="nav-item"><a class="dropdown btn btn-primary btn-rounded text-uppercase"  href="../ShoppingCart/cart.php">
FOO;
                        echo "<button class='dropbtn'><b>$_SESSION[user]</b></button>";
                        echo <<<FOO
                    </a></li>
                     <li>
                            <form class="nav-item" action="../Acceuil/page_produit.php" method="post"> 
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
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-special">Toutes les planches de surf</h2>
                    <h3 class="section-subheading text-muted">Vous trouverez ici toutes les planches de surf que nous proposons sur BeWet.</h3>

                    <?php
                    require "../calldb.php";

                    {$produits = $pdo->query("SELECT * FROM produits where nom_complet='Planche de Surf'");}
                    

                    $produits->execute();
                
                    echo" <div class='row'>";
                    foreach ($produits as $produit) {
                        

echo"                          <div class='col-lg-4 col-sm-6 mb-4'>";
echo"                              <div class='portfolio-item'>";
echo"                                   <a class='portfolio-link' data-bs-toggle='modal' href='#a$produit[id]'>";
echo"                                       <div class='portfolio-hover'>";
echo"                                            <div class='portfolio-hover-content'><i class='fas fa-search fa-3x'></i></div>";
echo"                                       </div>";
echo"                                       <img class='img-fluid' src='assets/img/portfolio/$produit[image]'/>";                                    
echo"                                    </a>";                               
echo"                                   <div class='portfolio-caption border-top'>";
echo"                                       <div class='portfolio-caption-heading'><p style='font-size: 75%;text-transform: uppercase'>$produit[nom_complet] $produit[couleur_affichée] $produit[sexe] : $produit[prix]€ </p></div>";

echo"                   </div>";
echo"                 </div>";
echo"                 </div>";



    
echo"       <div class='portfolio-modal modal fade' id='a$produit[id]' tabindex='-1' role='dialog' aria-hidden='true'>";
echo"           <div class='modal-dialog'>";
echo"                <div class='modal-content'>";
echo"                  <div class='close-modal' data-bs-dismiss='modal'><img src='assets/img/close-icon.png' alt='Close modal' /></div>";
echo"                    <div class='container'>";
echo"                        <div class='row justify-content-center'>";
echo"                            <div class='col-lg-8'>";
echo"                                <div class='modal-body'>";
                                        // <!-- Project details--> //
echo"                                    <h2 class='text-special'><p style='font-size: 75%;text-transform: uppercase'>$produit[nom_complet] $produit[couleur_affichée] $produit[sexe]</p></h2>";
echo"                                    <p class='item-intro text-muted'>$produit[description]</p>";
echo"                                    <img class='img-fluide' src='assets/img/portfolio/$produit[image]'/>";
echo"                                    <h3 class='text-muted'>$produit[prix]€</h3>";
echo"                                    <button class='btn btn-primary btn-xl text-uppercase' data-bs-dismiss='modal' type='button'>";
echo"                                        <i class='fas fa-times me-1'></i>";
echo"                                        Revenir aux produits";
echo"                                    </button>";
echo <<<FOO
                                      <form method="post" action="../Acceuil/ppiAPS.php">
                                      <input type="hidden" name ="id_p" value="$produit[id]"/>
                                        <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="submit">
                                          <i class="fas fa-shopping-cart "></i>
                                        Ajouter au panier
                                        </button>
                                      </form>
FOO;
echo"                                </div>";
echo"                            </div>";
echo"                        </div>";
echo"                    </div>";
echo"                </div>";
echo"            </div>";
echo"                    </div>";  }?>


            </div>
        </section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>




    </body>
   </html>