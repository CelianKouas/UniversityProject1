<?php
session_start();
?>

<!DOCTYPE HTML>
   <html lang="fr">
   
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
        <link href="../Acceuil/css/styles1.css" type="text/css" rel="stylesheet" >

    </head>
    <body class="bodbg" id="page-top">
        
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
                            <form class="nav-item" action="page_produit.php" method="post"> 
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
                            <form class="nav-item" action="page_produit.php" method="post"> 
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
        <section class="page-section bg-light" style='background-color: white' id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-genial">Votre Recherche</h2>
                    <h3 class="section-subheading text-petit">Vous trouverez ici tout les résultats de votre recherche.</h3>
                </div>
<?php 


// Prototype du moteur de recherche//
$mots_utilise_sur_moteur_de_recherche = 0; //Initialisation de la variable//
//Propriété des objets dans un tableau//
$liste_de_mots_clés = array("a" => 
"h","ho","hom","homm","homme","hommes", 
"f","fe","fem","femm","femme","femmes", 
"e","en","enf","enfa","enfan","enfant","enfants", 
"c","co","com","comb","combi","combin","combina","combinai","combinais","combinaiso","combinaison","combinaisons", 
"v","ve","ves","vest","veste","vestes", 
"m","ma","mai","mail","maill","maillo","maillot","maillots", 
"c","ch","cha","chau","chaus","chauss","chaussu","chaussur","chaussure","chaussures", 
"s","sk","ski","skis", 
"k","ka","kay","kaya","kayak","kayaks", 
"p","pl","pla","plan","planc","planch","planche","planches", 
"o","or","ora","oran","orang","orange","oranges", 
"r","ro","ros","rose","roses", 
"v","vi","vio","viol","viole","violet","violett","violette","violettes", 
"b","br","bru","brun","brune","brunes", 
"b","bl","bla","blan","blanc","blancs", 
"n","no","noi","noir","noire","noires", 
"v","ve","ver","vert","verte","vertes",
"b","bl","ble","bleu","bleue","bleues", 
"j","ja","jau","jaun","jaune","jaunes", 
"r","ro","rou","roug","rouge","rouges"); 

//Récupération de la recherche depuis le formulaire//
$mots_utilise_sur_moteur_de_recherche = $_POST["recherche"]; 

$_SESSION['produits'] = $mots_utilise_sur_moteur_de_recherche;

 //Mise en bas de casse pour pouvoir comparer sans erreur//
$mots_utilise_sur_moteur_de_recherche = strtolower($mots_utilise_sur_moteur_de_recherche);
//Décomposition de la chaine de caractères et créer un tableau $t//
$t = (explode(" ",$mots_utilise_sur_moteur_de_recherche)); 
//Comparaison des deux tableaux qui créer un nouveau tableau possédant les valeurs qui sont présent dans les deux tableaux//
$result = array_intersect($t, $liste_de_mots_clés); 


//Fonction pour organiser les index du tableau result dans un ordre définie//
function trieur_index($a, $b) {
    $ordre_correct = array("h","ho","hom","homm","homme","hommes", 
    "f","fe","fem","femm","femme","femmes", 
    "e","en","enf","enfa","enfan","enfant","enfants", 
    "c","co","com","comb","combi","combin","combina","combinai","combinais","combinaiso","combinaison","combinaisons", 
    "v","ve","ves","vest","veste","vestes", 
    "m","ma","mai","mail","maill","maillo","maillot","maillots", 
    "c","ch","cha","chau","chaus","chauss","chaussu","chaussur","chaussure","chaussures", 
    "s","sk","ski","skis", 
    "k","ka","kay","kaya","kayak","kayaks", 
    "p","pl","pla","plan","planc","planch","planche","planches", 
    "o","or","ora","oran","orang","orange","oranges", 
    "r","ro","ros","rose","roses", 
    "v","vi","vio","viol","viole","violet","violett","violette","violettes", 
    "b","br","bru","brun","brune","brunes", 
    "b","bl","bla","blan","blanc","blancs", 
    "n","no","noi","noir","noire","noires", 
    "v","ve","ver","vert","verte","vertes",
    "b","bl","ble","bleu","bleue","bleues", 
    "j","ja","jau","jaun","jaune","jaunes", 
    "r","ro","rou","roug","rouge","rouges");

    $cle_a = array_search($a, $ordre_correct);
    $cle_b = array_search($b, $ordre_correct);
    
    if ($cle_a == $cle_b) {
        return 0;
      }
      
      return ($cle_a < $cle_b) ? -1 : 1;
    }
    
  usort($result, "trieur_index");


  //print_r($result);//


$a = $result[0];
$b = $result[1];
$c = $result[2];
$aa = "%".$result[0]."%";
$bb = "%".$result[1]."%";
$cc = "%".$result[2]."%";

//var_dump($a); echo"<br>"; var_dump($b);//

require "../calldb.php";
                

                    //echo "<br>"; var_dump(count($result)); echo "<br>";//
                    $arr_length = count($result);
                    //var_dump($arr_length); echo $arr_length; echo "<br>";

                  //Condition + requête pour obtenir tout les produits ayant au moins une propriété similiaire à la requête utilisateur"//
                  if ($arr_length == 1) {$produits = $pdo->query("SELECT * FROM produits WHERE couleur LIKE '$aa' OR type LIKE '$aa' OR sexe LIKE '$aa'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriété de type et une de couleur"//
                  elseif (($arr_length == 2)
                  && ($a == "co" or $a == "com" or $a == "comb" or $a == "combi" or $a == "combin" or $a == "combina" or $a == "combinai" or $a == "combinais" or $a == "combinaiso" or $a == "combinaison" or $a == "combinaisons"
                    or $a == "ves" or $a == "vest" or $a == "veste" or $a == "vestes"
                    or $a == "ma" or $a == "mai" or $a == "mail" or $a == "maill" or $a == "maillo" or $a == "maillot" or $a == "maillots"
                    or $a == "ch" or $a == "cha" or $a == "chau" or $a == "chaus" or $a == "chauss" or $a == "chaussu" or $a == "chaussur" or $a == "chaussure" or $a == "chaussures"
                    or $a == "sk" or $a == "ski" or $a == "skis" or $a == "ka" or $a == "kay" or $a == "kaya" or $a == "kayak" or $a == "kayaks" or $a == "pl" 
                    or $a == "pla" or $a == "plan" or $a == "planc" or $a == "planch" or $a == "planche" or $a == "planches")
                  && ($b == "or" or $b == "ora" or $b == "oran" or $b == "orang" or $b == "orange" or $b == "oranges" or $b == "ro" or $b == "ros" or $b == "rose" or $b == "roses"
                    or $b == "vi" or $b == "vio" or $b == "viol" or $b == "viole" or $b == "violet" or $b == "violett" or $b == "violette" or $b == "violettes"
                    or $b == "br" or $b == "bru" or $b == "brun" or $b == "brune" or $b == "brunes"
                    or $b == "bl" or $b == "bla" or $b == "blan" or $b == "blanc" or $b == "blancs"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "no" or $b == "noi" or $b == "noir" or $b == "noire" or $b == "noires"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "bl" or $b == "ble" or $b == "bleu" or $b == "bleue" or $b == "bleues"
                    or $b == "ja" or $b == "jau" or $b == "jaun" or $b == "jaune" or $b == "jaunes"
                    or $b == "ro" or $b == "rou" or $b == "roug" or $b == "rouge" or $b == "rouges"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE type LIKE '$aa' AND couleur LIKE '$bb'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre deux propriétés de sexe"//
                  elseif (($arr_length == 2)
                  && ($a == "ho" or $a == "hom" or $a == "homm" or $a == "homme" or $a == "hommes" or $a == "fe" or $a == "fem" or $a == "femm" or $a == "femme" 
                    or $a == "femmes" or $a == "en" or $a == "enf" or $a == "enfa" or $a == "enfan" or $a == "enfant" or $a == "enfants")
                  && ($b == "ho" or $b == "hom" or $b == "homm" or $b == "homme" or $b == "hommes" or $b == "fe" or $b == "fem" or $b == "femm" or $b == "femme" 
                    or $b == "femmes" or $b == "en" or $b == "enf" or $b == "enfa" or $b == "enfan" or $b == "enfant" or $b == "enfants"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE sexe LIKE '$aa' OR sexe LIKE '$bb'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre trois propriétés de sexe"//
                  elseif (($arr_length == 3)
                  && ($a == "ho" or $a == "hom" or $a == "homm" or $a == "homme" or $a == "hommes" or $a == "fe" or $a == "fem" or $a == "femm" or $a == "femme" 
                    or $a == "femmes" or $a == "en" or $a == "enf" or $a == "enfa" or $a == "enfan" or $a == "enfant" or $a == "enfants")
                  && ($b == "ho" or $b == "hom" or $b == "homm" or $b == "homme" or $b == "hommes" or $b == "fe" or $b == "fem" or $b == "femm" or $b == "femme" 
                    or $b == "femmes" or $b == "en" or $b == "enf" or $b == "enfa" or $b == "enfan" or $b == "enfant" or $b == "enfants")
                  && ($c == "ho" or $c == "hom" or $c == "homm" or $c == "homme" or $c == "hommes" or $c == "fe" or $c == "fem" or $c == "femm" or $c == "femme" 
                    or $c == "femmes" or $c == "en" or $c == "enf" or $c == "enfa" or $c == "enfan" or $c == "enfant" or $c == "enfants"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE sexe LIKE '$aa' OR sexe LIKE '$bb' OR sexe LIKE '$cc'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre deux propriétés de type"//
                  elseif (($arr_length == 2)
                  && ($a == "co" or $a == "com" or $a == "comb" or $a == "combi" or $a == "combin" or $a == "combina" or $a == "combinai" or $a == "combinais" or $a == "combinaiso" or $a == "combinaison" or $a == "combinaisons"
                    or $a == "ves" or $a == "vest" or $a == "veste" or $a == "vestes"
                    or $a == "ma" or $a == "mai" or $a == "mail" or $a == "maill" or $a == "maillo" or $a == "maillot" or $a == "maillots"
                    or $a == "ch" or $a == "cha" or $a == "chau" or $a == "chaus" or $a == "chauss" or $a == "chaussu" or $a == "chaussur" or $a == "chaussure" or $a == "chaussures"
                    or $a == "sk" or $a == "ski" or $a == "skis" or $a == "ka" or $a == "kay" or $a == "kaya" or $a == "kayak" or $a == "kayaks" or $a == "pl" 
                    or $a == "pla" or $a == "plan" or $a == "planc" or $a == "planch" or $a == "planche" or $a == "planches")
                  && ($b == "co" or $b == "com" or $b == "comb" or $b == "combi" or $b == "combin" or $b == "combina" or $b == "combinai" or $b == "combinais" or $b == "combinaiso" or $b == "combinaison" or $b == "combinaisons"
                    or $b == "ves" or $b == "vest" or $b == "veste" or $b == "vestes"
                    or $b == "ma" or $b == "mai" or $b == "mail" or $b == "maill" or $b == "maillo" or $b == "maillot" or $b == "maillots"
                    or $b == "ch" or $b == "cha" or $b == "chau" or $b == "chaus" or $b == "chauss" or $b == "chaussu" or $b == "chaussur" or $b == "chaussure" or $b == "chaussures"
                    or $b == "sk" or $b == "ski" or $b == "skis" or $b == "ka" or $b == "kay" or $b == "kaya" or $b == "kayak" or $b == "kayaks" or $b == "pl" 
                    or $b == "pla" or $b == "plan" or $b == "planc" or $b == "planch" or $b == "planche" or $b == "planches"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE type LIKE '$aa' OR type LIKE '$bb'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre trois propriétés de type"//
                  elseif (($arr_length == 3)
                  && ($a == "co" or $a == "com" or $a == "comb" or $a == "combi" or $a == "combin" or $a == "combina" or $a == "combinai" or $a == "combinais" or $a == "combinaiso" or $a == "combinaison" or $a == "combinaisons"
                    or $a == "ves" or $a == "vest" or $a == "veste" or $a == "vestes"
                    or $a == "ma" or $a == "mai" or $a == "mail" or $a == "maill" or $a == "maillo" or $a == "maillot" or $a == "maillots"
                    or $a == "ch" or $a == "cha" or $a == "chau" or $a == "chaus" or $a == "chauss" or $a == "chaussu" or $a == "chaussur" or $a == "chaussure" or $a == "chaussures"
                    or $a == "sk" or $a == "ski" or $a == "skis" or $a == "ka" or $a == "kay" or $a == "kaya" or $a == "kayak" or $a == "kayaks" or $a == "pl" 
                    or $a == "pla" or $a == "plan" or $a == "planc" or $a == "planch" or $a == "planche" or $a == "planches")
                  && ($b == "co" or $b == "com" or $b == "comb" or $b == "combi" or $b == "combin" or $b == "combina" or $b == "combinai" or $b == "combinais" or $b == "combinaiso" or $b == "combinaison" or $b == "combinaisons"
                    or $b == "ves" or $b == "vest" or $b == "veste" or $b == "vestes"
                    or $b == "ma" or $b == "mai" or $b == "mail" or $b == "maill" or $b == "maillo" or $b == "maillot" or $b == "maillots"
                    or $b == "ch" or $b == "cha" or $b == "chau" or $b == "chaus" or $b == "chauss" or $b == "chaussu" or $b == "chaussur" or $b == "chaussure" or $b == "chaussures"
                    or $b == "sk" or $b == "ski" or $b == "skis" or $b == "ka" or $b == "kay" or $b == "kaya" or $b == "kayak" or $b == "kayaks" or $b == "pl" 
                    or $b == "pla" or $b == "plan" or $b == "planc" or $b == "planch" or $b == "planche" or $b == "planches")
                  && ($c == "co" or $c == "com" or $c == "comb" or $c == "combi" or $c == "combin" or $c == "combina" or $c == "combinai" or $c == "combinais" or $c == "combinaiso" or $c == "combinaison" or $c == "combinaisons"
                    or $c == "ves" or $c == "vest" or $c == "veste" or $c == "vestes"
                    or $c == "ma" or $c == "mai" or $c == "mail" or $c == "maill" or $c == "maillo" or $c == "maillot" or $c == "maillots"
                    or $c == "ch" or $c == "cha" or $c == "chau" or $c == "chaus" or $c == "chauss" or $c == "chaussu" or $c == "chaussur" or $c == "chaussure" or $c == "chaussures"
                    or $c == "sk" or $c == "ski" or $c == "skis" or $c == "ka" or $c == "kay" or $c == "kaya" or $c == "kayak" or $c == "kayaks" or $c == "pl" 
                    or $c == "pla" or $c == "plan" or $c == "planc" or $c == "planch" or $c == "planche" or $c == "planches"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE type LIKE '$aa' OR type LIKE '$bb' OR type LIKE '$cc'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre deux propriétés de couleur"//
                  elseif (($arr_length == 2)
                  && ($a == "or" or $a == "ora" or $a == "oran" or $a == "orang" or $a == "orange" or $a == "oranges" or $a == "ro" or $a == "ros" or $a == "rose" or $a == "roses"
                    or $a == "vi" or $a == "vio" or $a == "viol" or $a == "viole" or $a == "violet" or $a == "violett" or $a == "violette" or $a == "violettes"
                    or $a == "br" or $a == "bru" or $a == "brun" or $a == "brune" or $a == "brunes"
                    or $a == "bl" or $a == "bla" or $a == "blan" or $a == "blanc" or $a == "blancs"
                    or $a == "ve" or $a == "ver" or $a == "vert" or $a == "verte" or $a == "vertes"
                    or $a == "no" or $a == "noi" or $a == "noir" or $a == "noire" or $a == "noires"
                    or $a == "ve" or $a == "ver" or $a == "vert" or $a == "verte" or $a == "vertes"
                    or $a == "bl" or $a == "ble" or $a == "bleu" or $a == "bleue" or $a == "bleues"
                    or $a == "ja" or $a == "jau" or $a == "jaun" or $a == "jaune" or $a == "jaunes"
                    or $a == "ro" or $a == "rou" or $a == "roug" or $a == "rouge" or $a == "rouges")
                  && ($b == "or" or $b == "ora" or $b == "oran" or $b == "orang" or $b == "orange" or $b == "oranges" or $b == "ro" or $b == "ros" or $b == "rose" or $b == "roses"
                    or $b == "vi" or $b == "vio" or $b == "viol" or $b == "viole" or $b == "violet" or $b == "violett" or $b == "violette" or $b == "violettes"
                    or $b == "br" or $b == "bru" or $b == "brun" or $b == "brune" or $b == "brunes"
                    or $b == "bl" or $b == "bla" or $b == "blan" or $b == "blanc" or $b == "blancs"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "no" or $b == "noi" or $b == "noir" or $b == "noire" or $b == "noires"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "bl" or $b == "ble" or $b == "bleu" or $b == "bleue" or $b == "bleues"
                    or $b == "ja" or $b == "jau" or $b == "jaun" or $b == "jaune" or $b == "jaunes"
                    or $b == "ro" or $b == "rou" or $b == "roug" or $b == "rouge" or $b == "rouges"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE couleur LIKE '$aa' OR couleur LIKE '$bb'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre trois propriétés de couleur"//
                  elseif (($arr_length == 3)
                  && ($a == "or" or $a == "ora" or $a == "oran" or $a == "orang" or $a == "orange" or $a == "oranges" or $a == "ro" or $a == "ros" or $a == "rose" or $a == "roses"
                    or $a == "vi" or $a == "vio" or $a == "viol" or $a == "viole" or $a == "violet" or $a == "violett" or $a == "violette" or $a == "violettes"
                    or $a == "br" or $a == "bru" or $a == "brun" or $a == "brune" or $a == "brunes"
                    or $a == "bl" or $a == "bla" or $a == "blan" or $a == "blanc" or $a == "blancs"
                    or $a == "ve" or $a == "ver" or $a == "vert" or $a == "verte" or $a == "vertes"
                    or $a == "no" or $a == "noi" or $a == "noir" or $a == "noire" or $a == "noires"
                    or $a == "ve" or $a == "ver" or $a == "vert" or $a == "verte" or $a == "vertes"
                    or $a == "bl" or $a == "ble" or $a == "bleu" or $a == "bleue" or $a == "bleues"
                    or $a == "ja" or $a == "jau" or $a == "jaun" or $a == "jaune" or $a == "jaunes"
                    or $a == "ro" or $a == "rou" or $a == "roug" or $a == "rouge" or $a == "rouges")
                  && ($b == "or" or $b == "ora" or $b == "oran" or $b == "orang" or $b == "orange" or $b == "oranges" or $b == "ro" or $b == "ros" or $b == "rose" or $b == "roses"
                    or $b == "vi" or $b == "vio" or $b == "viol" or $b == "viole" or $b == "violet" or $b == "violett" or $b == "violette" or $b == "violettes"
                    or $b == "br" or $b == "bru" or $b == "brun" or $b == "brune" or $b == "brunes"
                    or $b == "bl" or $b == "bla" or $b == "blan" or $b == "blanc" or $b == "blancs"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "no" or $b == "noi" or $b == "noir" or $b == "noire" or $b == "noires"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "bl" or $b == "ble" or $b == "bleu" or $b == "bleue" or $b == "bleues"
                    or $b == "ja" or $b == "jau" or $b == "jaun" or $b == "jaune" or $b == "jaunes"
                    or $b == "ro" or $b == "rou" or $b == "roug" or $b == "rouge" or $b == "rouges")
                  && ($c == "or" or $c == "ora" or $c == "oran" or $c == "orang" or $c == "orange" or $c == "oranges" or $c == "ro" or $c == "ros" or $c == "rose" or $c == "roses"
                    or $c == "vi" or $c == "vio" or $c == "viol" or $c == "viole" or $c == "violet" or $c == "violett" or $c == "violette" or $c == "violettes"
                    or $c == "br" or $c == "bru" or $c == "brun" or $c == "brune" or $c == "brunes"
                    or $c == "bl" or $c == "bla" or $c == "blan" or $c == "blanc" or $c == "blancs"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "no" or $c == "noi" or $c == "noir" or $c == "noire" or $c == "noires"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "bl" or $c == "ble" or $c == "bleu" or $c == "bleue" or $c == "bleues"
                    or $c == "ja" or $c == "jau" or $c == "jaun" or $c == "jaune" or $c == "jaunes"
                    or $c == "ro" or $c == "rou" or $c == "roug" or $c == "rouge" or $c == "rouges"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE couleur LIKE '$aa' OR couleur LIKE '$bb' OR couleur LIKE '$cc'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriété de sexe et une de type"//
                  elseif (($arr_length == 2)
                  && ($a == "ho" or $a == "hom" or $a == "homm" or $a == "homme" or $a == "hommes" or $a == "fe" or $a == "fem" or $a == "femm" or $a == "femme" 
                    or $a == "femmes" or $a == "en" or $a == "enf" or $a == "enfa" or $a == "enfan" or $a == "enfant" or $a == "enfants") 
                  && ($b == "co" or $b == "com" or $b == "comb" or $b == "combi" or $b == "combin" or $b == "combina" or $b == "combinai" or $b == "combinais" or $b == "combinaiso" or $b == "combinaison" or $b == "combinaisons"
                    or $b == "ves" or $b == "vest" or $b == "veste" or $b == "vestes"
                    or $b == "ma" or $b == "mai" or $b == "mail" or $b == "maill" or $b == "maillo" or $b == "maillot" or $b == "maillots"
                    or $b == "ch" or $b == "cha" or $b == "chau" or $b == "chaus" or $b == "chauss" or $b == "chaussu" or $b == "chaussur" or $b == "chaussure" or $b == "chaussures"
                    or $b == "sk" or $b == "ski" or $b == "skis" or $b == "ka" or $b == "kay" or $b == "kaya" or $b == "kayak" or $b == "kayaks"
                    or $b == "pl" or $b == "pla" or $b == "plan" or $b == "planc" or $b == "planch" or $b == "planche" or $b == "planches"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE sexe LIKE '$aa' AND type LIKE '$bb'");}


                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriétés de sexe et une de type"//
                  elseif (($arr_length == 2)
                  && ($a == "ho" or $a == "hom" or $a == "homm" or $a == "homme" or $a == "hommes" or $a == "fe" or $a == "fem" or $a == "femm" or $a == "femme" 
                    or $a == "femmes" or $a == "en" or $a == "enf" or $a == "enfa" or $a == "enfan" or $a == "enfant" or $a == "enfants") 
                  && ($b != "co" or $b != "com" or $b != "comb" or $b != "combi" or $b != "combin" or $b != "combina" or $b != "combinai" or $b != "combinais" or $b != "combinaiso" or $b != "combinaison" or $b != "combinaisons"
                    or $b != "ves" or $b != "vest" or $b != "veste" or $b != "vestes"
                    or $b != "ma" or $b != "mai" or $b != "mail" or $b != "maill" or $b != "maillo" or $b != "maillot" or $b != "maillots"
                    or $b != "ch" or $b != "cha" or $b != "chau" or $b != "chaus" or $b != "chauss" or $b != "chaussu" or $b != "chaussur" or $b != "chaussure" or $b != "chaussures"
                    or $b != "sk" or $b != "ski" or $b != "skis" or $b != "ka" or $b != "kay" or $b != "kaya" or $b != "kayak" or $b != "kayaks"
                    or $b != "pl" or $b != "pla" or $b != "plan" or $b != "planc" or $b != "planch" or $b != "planche" or $b != "planches"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE sexe LIKE '$aa' AND couleur LIKE '$bb'");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriété de type et deux de couleur"//
                  elseif (($arr_length == 3)
                  && ($a == "co" or $a == "com" or $a == "comb" or $a == "combi" or $a == "combin" or $a == "combina" or $a == "combinai" or $a == "combinais" or $a == "combinaiso" or $a == "combinaison" or $a == "combinaisons"
                    or $a == "ves" or $a == "vest" or $a == "veste" or $a == "vestes"
                    or $a == "ma" or $a == "mai" or $a == "mail" or $a == "maill" or $a == "maillo" or $a == "maillot" or $a == "maillots"
                    or $a == "ch" or $a == "cha" or $a == "chau" or $a == "chaus" or $a == "chauss" or $a == "chaussu" or $a == "chaussur" or $a == "chaussure" or $a == "chaussures"
                    or $a == "sk" or $a == "ski" or $a == "skis" or $a == "ka" or $a == "kay" or $a == "kaya" or $a == "kayak" or $a == "kayaks" or $a == "pl" 
                    or $a == "pla" or $a == "plan" or $a == "planc" or $a == "planch" or $a == "planche" or $a == "planches")
                  && ($b == "or" or $b == "ora" or $b == "oran" or $b == "orang" or $b == "orange" or $b == "oranges" or $b == "ro" or $b == "ros" or $b == "rose" or $b == "roses"
                    or $b == "vi" or $b == "vio" or $b == "viol" or $b == "viole" or $b == "violet" or $b == "violett" or $b == "violette" or $b == "violettes"
                    or $b == "br" or $b == "bru" or $b == "brun" or $b == "brune" or $b == "brunes"
                    or $b == "bl" or $b == "bla" or $b == "blan" or $b == "blanc" or $b == "blancs"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "no" or $b == "noi" or $b == "noir" or $b == "noire" or $b == "noires"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "bl" or $b == "ble" or $b == "bleu" or $b == "bleue" or $b == "bleues"
                    or $b == "ja" or $b == "jau" or $b == "jaun" or $b == "jaune" or $b == "jaunes"
                    or $b == "ro" or $b == "rou" or $b == "roug" or $b == "rouge" or $b == "rouges")
                  && ($c == "or" or $c == "ora" or $c == "oran" or $c == "orang" or $c == "orange" or $c == "oranges" or $c == "ro" or $c == "ros" or $c == "rose" or $c == "roses"
                    or $c == "vi" or $c == "vio" or $c == "viol" or $c == "viole" or $c == "violet" or $c == "violett" or $c == "violette" or $c == "violettes"
                    or $c == "br" or $c == "bru" or $c == "brun" or $c == "brune" or $c == "brunes"
                    or $c == "bl" or $c == "bla" or $c == "blan" or $c == "blanc" or $c == "blancs"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "no" or $c == "noi" or $c == "noir" or $c == "noire" or $c == "noires"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "bl" or $c == "ble" or $c == "bleu" or $c == "bleue" or $c == "bleues"
                    or $c == "ja" or $c == "jau" or $c == "jaun" or $c == "jaune" or $c == "jaunes"
                    or $c == "ro" or $c == "rou" or $c == "roug" or $c == "rouge" or $c == "rouges"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE type LIKE '$aa' AND (couleur LIKE '$bb' OR couleur LIKE '$cc')");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriété de type et deux de sexe"//
                  elseif (($arr_length == 3)
                  && ($c == "co" or $c == "com" or $c == "comb" or $c == "combi" or $c == "combin" or $c == "combina" or $c == "combinai" or $c == "combinais" or $c == "combinaiso" or $c == "combinaison" or $c == "combinaisons"
                    or $c == "ves" or $c == "vest" or $c == "veste" or $c == "vestes"
                    or $c == "ma" or $c == "mai" or $c == "mail" or $c == "maill" or $c == "maillo" or $c == "maillot" or $c == "maillots"
                    or $c == "ch" or $c == "cha" or $c == "chau" or $c == "chaus" or $c == "chauss" or $c == "chaussu" or $c == "chaussur" or $c == "chaussure" or $c == "chaussures"
                    or $c == "sk" or $c == "ski" or $c == "skis" or $c == "ka" or $c == "kay" or $c == "kaya" or $c == "kayak" or $c == "kayaks" or $c == "pl" 
                    or $c == "pla" or $c == "plan" or $c == "planc" or $c == "planch" or $c == "planche" or $c == "planches")
                  && ($a == "ho" or $a == "hom" or $a == "homm" or $a == "homme" or $a == "hommes" or $a == "fe" or $a == "fem" or $a == "femm" or $a == "femme" 
                    or $a == "femmes" or $a == "en" or $a == "enf" or $a == "enfa" or $a == "enfan" or $a == "enfant" or $a == "enfants")
                  && ($b == "ho" or $b == "hom" or $b == "homm" or $b == "homme" or $b == "hommes" or $b == "fe" or $b == "fem" or $b == "femm" or $b == "femme" 
                    or $b == "femmes" or $b == "en" or $b == "enf" or $b == "enfa" or $b == "enfan" or $b == "enfant" or $b == "enfants"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE type LIKE '$cc' AND (sexe LIKE '$aa' OR sexe LIKE '$bb')");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriété de sexe et deux de type"//
                  elseif (($arr_length == 3)
                  && ($a == "ho" or $a == "hom" or $a == "homm" or $a == "homme" or $a == "hommes" or $a == "fe" or $a == "fem" or $a == "femm" or $a == "femme" 
                    or $a == "femmes" or $a == "en" or $a == "enf" or $a == "enfa" or $a == "enfan" or $a == "enfant" or $a == "enfants")
                  && ($b == "co" or $b == "com" or $b == "comb" or $b == "combi" or $b == "combin" or $b == "combina" or $b == "combinai" or $b == "combinais" or $b == "combinaiso" or $b == "combinaison" or $b == "combinaisons"
                    or $b == "ves" or $b == "vest" or $b == "veste" or $b == "vestes"
                    or $b == "ma" or $b == "mai" or $b == "mail" or $b == "maill" or $b == "maillo" or $b == "maillot" or $b == "maillots"
                    or $b == "ch" or $b == "cha" or $b == "chau" or $b == "chaus" or $b == "chauss" or $b == "chaussu" or $b == "chaussur" or $b == "chaussure" or $b == "chaussures"
                    or $b == "sk" or $b == "ski" or $b == "skis" or $b == "ka" or $b == "kay" or $b == "kaya" or $b == "kayak" or $b == "kayaks"
                    or $b == "pl" or $b == "pla" or $b == "plan" or $b == "planc" or $b == "planch" or $b == "planche" or $b == "planches")
                  && ($c == "co" or $c == "com" or $c == "comb" or $c == "combi" or $c == "combin" or $c == "combina" or $c == "combinai" or $c == "combinais" or $c == "combinaiso" or $c == "combinaison" or $c == "combinaisons"
                    or $c == "ves" or $c == "vest" or $c == "veste" or $c == "vestes"
                    or $c == "ma" or $c == "mai" or $c == "mail" or $c == "maill" or $c == "maillo" or $c == "maillot" or $c == "maillots"
                    or $c == "ch" or $c == "cha" or $c == "chau" or $c == "chaus" or $c == "chauss" or $c == "chaussu" or $c == "chaussur" or $c == "chaussure" or $c == "chaussures"
                    or $c == "sk" or $c == "ski" or $c == "skis" or $c == "ka" or $c == "kay" or $c == "kaya" or $c == "kayak" or $c == "kayaks" or $c == "pl" 
                    or $c == "pla" or $c == "plan" or $c == "planc" or $c == "planch" or $c == "planche" or $c == "planches"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE sexe LIKE '$aa' AND (type LIKE '$bb' OR type LIKE '$cc')");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriété de sexe et deux de couleur"//
                  elseif (($arr_length == 3)
                  && ($a == "ho" or $a == "hom" or $a == "homm" or $a == "homme" or $a == "hommes" or $a == "fe" or $a == "fem" or $a == "femm" or $a == "femme" 
                    or $a == "femmes" or $a == "en" or $a == "enf" or $a == "enfa" or $a == "enfan" or $a == "enfant" or $a == "enfants")
                  && ($b == "or" or $b == "ora" or $b == "oran" or $b == "orang" or $b == "orange" or $b == "oranges" or $b == "ro" or $b == "ros" or $b == "rose" or $b == "roses"
                    or $b == "vi" or $b == "vio" or $b == "viol" or $b == "viole" or $b == "violet" or $b == "violett" or $b == "violette" or $b == "violettes"
                    or $b == "br" or $b == "bru" or $b == "brun" or $b == "brune" or $b == "brunes"
                    or $b == "bl" or $b == "bla" or $b == "blan" or $b == "blanc" or $b == "blancs"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "no" or $b == "noi" or $b == "noir" or $b == "noire" or $b == "noires"
                    or $b == "ve" or $b == "ver" or $b == "vert" or $b == "verte" or $b == "vertes"
                    or $b == "bl" or $b == "ble" or $b == "bleu" or $b == "bleue" or $b == "bleues"
                    or $b == "ja" or $b == "jau" or $b == "jaun" or $b == "jaune" or $b == "jaunes"
                    or $b == "ro" or $b == "rou" or $b == "roug" or $b == "rouge" or $b == "rouges")
                  && ($c == "or" or $c == "ora" or $c == "oran" or $c == "orang" or $c == "orange" or $c == "oranges" or $c == "ro" or $c == "ros" or $c == "rose" or $c == "roses"
                    or $c == "vi" or $c == "vio" or $c == "viol" or $c == "viole" or $c == "violet" or $c == "violett" or $c == "violette" or $c == "violettes"
                    or $c == "br" or $c == "bru" or $c == "brun" or $c == "brune" or $c == "brunes"
                    or $c == "bl" or $c == "bla" or $c == "blan" or $c == "blanc" or $c == "blancs"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "no" or $c == "noi" or $c == "noir" or $c == "noire" or $c == "noires"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "bl" or $c == "ble" or $c == "bleu" or $c == "bleue" or $c == "bleues"
                    or $c == "ja" or $c == "jau" or $c == "jaun" or $c == "jaune" or $c == "jaunes"
                    or $c == "ro" or $c == "rou" or $c == "roug" or $c == "rouge" or $c == "rouges"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE sexe LIKE '$aa' AND (couleur LIKE '$bb' OR couleur LIKE '$cc')");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriété de couleur et deux de sexe"//
                  elseif (($arr_length == 3)
                  && ($c == "or" or $c == "ora" or $c == "oran" or $c == "orang" or $c == "orange" or $c == "oranges" or $c == "ro" or $c == "ros" or $c == "rose" or $c == "roses"
                    or $c == "vi" or $c == "vio" or $c == "viol" or $c == "viole" or $c == "violet" or $c == "violett" or $c == "violette" or $c == "violettes"
                    or $c == "br" or $c == "bru" or $c == "brun" or $c == "brune" or $c == "brunes"
                    or $c == "bl" or $c == "bla" or $c == "blan" or $c == "blanc" or $c == "blancs"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "no" or $c == "noi" or $c == "noir" or $c == "noire" or $c == "noires"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "bl" or $c == "ble" or $c == "bleu" or $c == "bleue" or $c == "bleues"
                    or $c == "ja" or $c == "jau" or $c == "jaun" or $c == "jaune" or $c == "jaunes"
                    or $c == "ro" or $c == "rou" or $c == "roug" or $c == "rouge" or $c == "rouges")
                  && ($a == "ho" or $a == "hom" or $a == "homm" or $a == "homme" or $a == "hommes" or $a == "fe" or $a == "fem" or $a == "femm" or $a == "femme" 
                    or $a == "femmes" or $a == "en" or $a == "enf" or $a == "enfa" or $a == "enfan" or $a == "enfant" or $a == "enfants")
                  && ($b == "ho" or $b == "hom" or $b == "homm" or $b == "homme" or $b == "hommes" or $b == "fe" or $b == "fem" or $b == "femm" or $b == "femme" 
                    or $b == "femmes" or $b == "en" or $b == "enf" or $b == "enfa" or $b == "enfan" or $b == "enfant" or $b == "enfants"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE couleur LIKE '$cc' AND (sexe LIKE '$aa' OR sexe LIKE '$bb')");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriété de couleur et deux de type"//
                  elseif (($arr_length == 3)
                  && ($c == "or" or $c == "ora" or $c == "oran" or $c == "orang" or $c == "orange" or $c == "oranges" or $c == "ro" or $c == "ros" or $c == "rose" or $c == "roses"
                    or $c == "vi" or $c == "vio" or $c == "viol" or $c == "viole" or $c == "violet" or $c == "violett" or $c == "violette" or $c == "violettes"
                    or $c == "br" or $c == "bru" or $c == "brun" or $c == "brune" or $c == "brunes"
                    or $c == "bl" or $c == "bla" or $c == "blan" or $c == "blanc" or $c == "blancs"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "no" or $c == "noi" or $c == "noir" or $c == "noire" or $c == "noires"
                    or $c == "ve" or $c == "ver" or $c == "vert" or $c == "verte" or $c == "vertes"
                    or $c == "bl" or $c == "ble" or $c == "bleu" or $c == "bleue" or $c == "bleues"
                    or $c == "ja" or $c == "jau" or $c == "jaun" or $c == "jaune" or $c == "jaunes"
                    or $c == "ro" or $c == "rou" or $c == "roug" or $c == "rouge" or $c == "rouges")
                  && ($a == "co" or $a == "com" or $a == "comb" or $a == "combi" or $a == "combin" or $a == "combina" or $a == "combinai" or $a == "combinais" or $a == "combinaiso" or $a == "combinaison" or $a == "combinaisons"
                    or $a == "ves" or $a == "vest" or $a == "veste" or $a == "vestes"
                    or $a == "ma" or $a == "mai" or $a == "mail" or $a == "maill" or $a == "maillo" or $a == "maillot" or $a == "maillots"
                    or $a == "ch" or $a == "cha" or $a == "chau" or $a == "chaus" or $a == "chauss" or $a == "chaussu" or $a == "chaussur" or $a == "chaussure" or $a == "chaussures"
                    or $a == "sk" or $a == "ski" or $a == "skis" or $a == "ka" or $a == "kay" or $a == "kaya" or $a == "kayak" or $a == "kayaks" or $a == "pl" 
                    or $a == "pla" or $a == "plan" or $a == "planc" or $a == "planch" or $a == "planche" or $a == "planches")
                  && ($b == "co" or $b == "com" or $b == "comb" or $b == "combi" or $b == "combin" or $b == "combina" or $b == "combinai" or $b == "combinais" or $b == "combinaiso" or $b == "combinaison" or $b == "combinaisons"
                  or $b == "ves" or $b == "vest" or $b == "veste" or $b == "vestes"
                  or $b == "ma" or $b == "mai" or $b == "mail" or $b == "maill" or $b == "maillo" or $b == "maillot" or $b == "maillots"
                  or $b == "ch" or $b == "cha" or $b == "chau" or $b == "chaus" or $b == "chauss" or $b == "chaussu" or $b == "chaussur" or $b == "chaussure" or $b == "chaussures"
                  or $b == "sk" or $b == "ski" or $b == "skis" or $b == "ka" or $b == "kay" or $b == "kaya" or $b == "kayak" or $b == "kayaks"
                  or $b == "pl" or $b == "pla" or $b == "plan" or $b == "planc" or $b == "planch" or $b == "planche" or $b == "planches"))
                  {$produits = $pdo->query("SELECT * FROM produits WHERE couleur LIKE '$cc' AND (type LIKE '$aa' OR type LIKE '$bb')");}

                  //Condition + requête pour obtenir les produits quand l'utilisateur rentre une propriétés de sexe, une de type et une de couleur"//
                  elseif ($arr_length == 3) {$produits = $pdo->query("SELECT * FROM produits WHERE sexe LIKE '$aa' AND type LIKE '$bb' AND couleur LIKE '$cc'");}

                  else {$produits = $pdo->query("SELECT * FROM produits");}



                  //var_dump($produits);//

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
echo"                                   </div>";
echo"                               </div>";
echo"                         </div>";



    
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
                                      <form method="post" action="../Acceuil/page_produit_inter.php">
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