<?php
session_start();

require "../calldb.php";

/*
$nb_produits = $_POST['nb_produits'];
$id_p_u = $_POST['id_p_u'];
$prix_panier = $_POST['prix'];
$prix_base = $_POST['prix_base'];
*/

if(isset($_SESSION['user']))
        {$produits_panier = $pdo->exec("CREATE TABLE IF NOT EXISTS commande_effectuee_$_SESSION[user] (
            id_commande int(20) unsigned NOT NULL auto_increment,
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
        <form name="myform" class="myform" action="cart.php" method="post">
        <button type="submit">Submit</button>
        </form>
FOO;

echo '<script type="text/javascript">document.myform.submit();</script>';



?>