<?php
session_start();



require "../calldb.php";


$id_panier = $_POST['id_p'];

$check = $pdo->prepare("SELECT id_panier_utilisateur FROM panier_utilisateur_$_SESSION[user] WHERE id_panier_utilisateur = ?");
$check->execute(array($id_panier));
$data = $check->fetch();
$row = $check->rowCount();

/*var_dump($id_panier); echo "</br></br>";
var_dump($check); echo "</br></br>";
var_dump($data); echo "</br></br></br></br>";
var_dump($row);*/

if($row == 1)
    
                {
                    $quantite_panier = $pdo->exec("UPDATE panier_utilisateur_$_SESSION[user]
                                                   SET quantite = (quantite + 1)
                                                   WHERE id_panier_utilisateur = $id_panier;");
                    echo <<<FOO
                    <form name="myform" class="myform" action="page_produit.php" method="post">
                    <input type="hidden" name="recherche" value="$_SESSION[produits]" />
                    <button type="submit">Submit</button>
                    </form>
            FOO;
            
            echo '<script type="text/javascript">document.myform.submit();</script>';
            
                }
                else {
        
if(isset($_SESSION['user']))
        {$produits_panier = $pdo->exec("CREATE TABLE IF NOT EXISTS panier_utilisateur_$_SESSION[user] (
            id_panier_utilisateur int(20) unsigned NOT NULL auto_increment,
            nom_complet varchar(40) NOT NULL,
            sexe varchar(40),
            type varchar(40) NOT NULL,
            couleur varchar(40) NOT NULL,   
            prix int(20) NOT NULL,
            image varchar(200) NOT NULL,
            descrption varchar(1000) NOT NULL,
            couleur_affichée varchar(40) NOT NULL,
            prix_base int(20),
            quantite int(10),
            quantite_base int(10),
            PRIMARY KEY (id_panier_utilisateur));
            INSERT INTO panier_utilisateur_$_SESSION[user]
            SELECT * FROM produits
            WHERE id = $id_panier;");


echo <<<FOO
        <form name="myform" class="myform" action="page_produit.php" method="post">
        <input type="hidden" name="recherche" value="$_SESSION[produits]" />
        <button type="submit">Submit</button>
      </form>
FOO;

echo '<script type="text/javascript">document.myform.submit();</script>';


        //header('Location: page_produit.php'); die();//
}

else {header('Location: ../Connexion/connexion2.php');
    die();}

}





   


?>