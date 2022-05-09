<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Maugy/Kouas">
    <meta name="keywords" content="S'enregistrer">

    <!-- Title Page-->
    <title>BeWet - S'enregistrer </title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" type="text/css" text rel="stylesheet">
    <link href="css/css2.css" type="text/css" text rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    
</head>

<body class="page-top">

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
        <br><br><br><br><br><br>
        <div class="registration-form">
        <form action="connexion_inter.php" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <p style="color: red"> Veuillez remplir tout les champs.</p>
            <div class="form-group">
                <input type="text" class="form-control item" name="username" placeholder="Nom d'utilisateur">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="rimuru" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Se connecter</button>
            </div>
            <div class="form-group">
                <button type="submit" formaction="inscription.php" class="btn btn-block create-account">S'inscrire</button>
            </div>
        </form>
        </div>

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
