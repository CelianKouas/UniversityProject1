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
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
       <!-- Font Awesome icons (free version)-->
       <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" type="text/css" rel="stylesheet" >

    </head>
    <body id="page-top">

<?php 
    if(!isset($_SESSION['user'])){
    header('Location:../index.php');
    die();}
?>
      
        <!--Navigation-->
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
                        <button class='dropbtn'><b>$_SESSION[user]</b></button></a>
                    </li>
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

require "../calldb.php";
/*$users = $pdo->query("SELECT * FROM panier_utilisateur_$_SESSION[user]");
$users->execute();
var_dump($panier);*/

$users = $pdo->query("SELECT * FROM utilisateurs where username = '$_SESSION[user]'");
$users->execute();
foreach ($users as $user) {

echo <<<FOO

    <section class="page-section">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center mt-3 ">Espaces Utilisateur</h3>
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <h5 class=" mb-2 text-muted1 mt-3"> Vos informations personelles :</h5>
            </div>
            <div class="row">
                    <div class="col-lg-4 mt-3">
                        <span class="mt-2"> <a class="text-muted2">Nom d'utilisateur:</a>$user[username]</span>
                    </div>
            </div>
            <div class="col-lg-2 mt-3">
                <span class="mt-2"><a class="text-muted2">Genre:</a></span>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <input type="checkbox" id="genre" name="sexe" checked>
                    <label for="genre">$user[sexe]</label>
                </div>
            </div>
            <div class="row">
                <span class="mt-2"><a class="text-muted2">Age:</a>  $user[age]</span>
            </div>
            <div class="row">
                <span class="mt-2"><a class="text-muted2">Adresse mail:</a>  $user[email]</span>
            </div>
            <div class="row mb-lg-3">
                <span class="mt-2"><a class="text-muted2">Mot de passe:</a> ***********</span>
            </div>
         </div>
        

        <div class="container">   
        <div class="col-lg-12">
        <form action="deconnexion.php" method="post">
        <input type="hidden" name="deconnexion" value="1">
         <button type="submit" class='btn btn-primary btn-xl text-uppercase' data-bs-dismiss='modal'>
             <i class='fas fa-times  me-1'></i>
                Déconnexion
        </button>
        </form>
        </div>
        </div>

        </section> 

        
FOO; }

          

$calcul_quantite_total = $pdo->query("SELECT * FROM panier_utilisateur_$_SESSION[user]");
$calcul_quantite_total->execute();

$somme2 = array();
foreach ($calcul_quantite_total as $qtotal) {
    $somme1 = $qtotal['quantite_base'];
    $temp += $somme1;
    $somme2[] = $temp;
}


echo <<<FOO
        <section class="pt-5 pb-5">
            <div class="container border-top">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center mt-3 ">Votre Panier</h3>
                    <p class="mb-5 text-center">
FOO;
                        echo"<i class='text-info font-weight-bold'>";echo end($somme2);echo"</i> produit(s) dans votre panier</p>";


$calcul_prix_produit = $pdo->query("SELECT * FROM panier_utilisateur_$_SESSION[user]");
$calcul_prix_produit->execute();

$result = array();

foreach ($calcul_prix_produit as $pproduit) {
    $quantite_produit = $pproduit['quantite'];
    $prix_produit = $pproduit['prix_base'];
    $temp = ($quantite_produit * $prix_produit);
    $result[] = $temp;
}

$paniers = $pdo->query("SELECT * FROM panier_utilisateur_$_SESSION[user]");
$paniers->execute();    

$i = 0;
//var_dump($result);
foreach ($paniers as $panier) {
                    if ($result[$i] < $panier['prix_base']) {echo <<<FOO
                        <form name="myform" class="myform" action="cart_inter4.php" method="post">
                        <input type="hidden" name="id_p_u" value="$panier[id_panier_utilisateur]"/>
                        <button type="submit">Submit</button>
                        </form>
                FOO;
                
                echo '<script type="text/javascript">document.myform.submit();</script>';}

                    $sum1 = $result[$i];
                    $quantite = $panier['quantite'];
                    if ($sum1 < 0) {$sum1 = $panier['prix_base']; $quantite = $panier['quantite_base'];}
                    $sum1€ = ($sum1 .= "€");
                  
                    echo <<<FOO
                    
                    <table id="shoppingCart" class="table table-condensed table-responsive">    
                        <thead>
                            <tr>
                                <th style="width:60%">Ref : $panier[id_panier_utilisateur]</th>
                                <th style="width:12%">Prix</th>
                                <th style="width:10%">Quantité</th>
                                <th style="width:16%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src='../Acceuil/assets/img/portfolio/$panier[image]' alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h4>$panier[nom_complet] $panier[couleur_affichée] $panier[sexe]</h4>
                                            <p class="font-weight-light">Bewet</p>
                                        </div>
                                    </div>
                                </td>
FOO;
                            echo"<td data-th='Price'>"; echo"$sum1€"; echo"</td>";
echo <<<FOO
                                <td data-th="Quantité total">$quantite</td>
                                <td data-th="Quantité"> 
                                <form action="cart_inter.php" method="post">
                                            <input type="hidden" name="id_p_u" value="$panier[id_panier_utilisateur]">
                                            <input type="number" name="nb_produits" min="0" max="99" value="$panier[quantite]"
                                                class="form-control form-control-lg text-center">
                                            <input type="hidden" name="prix" value="$result[$i]">
                                            <input type="hidden" name="prix_base" value="$panier[prix_base]">
                                            
                                
                                </td>
                                <td class="actions" data-th="">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <i class="fas fa-sync"></i>
                                        </button>
                                   
                                        </form>
                                       
                                        <form action="cart_inter3.php" method="post">
                                            <input type="hidden" name="id_p_u" value="$panier[id_panier_utilisateur]">
                                            <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </t body>
                    </table>
FOO;
$sum2 += $sum1;
if ($sum1 < 0) {$sum1 = $panier['prix_base']; $quantite = $panier['quantite_base'];}
$i++;
}
if ($sum1 >= 1) {
                echo <<<FOO
                    <div class="float-right text-right">
                        <h4>Coût Total:</h4>
FOO;
$sum2 .= "€";
                echo <<<FOO
                        <h1>$sum2</h1>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-6 order-md-2 text-right">
                    <a href="cart_inter2.php" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Tout Acheter</a>
                </div>
FOO; }
echo <<<FOO
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="../Acceuil/page_produit_2.php">
                        <i class="fas fa-arrow-left mr-2"></i>Revenir aux produits</a>
                </div>
            </div>
            </div>  
        </section>
FOO;  
?>
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