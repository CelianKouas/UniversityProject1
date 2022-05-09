<?php
session_start();

require "../calldb.php";

$nb_produits = $_POST['nb_produits'];
$id_p_u = $_POST['id_p_u'];
$prix_panier = $_POST['prix'];
$prix_base = $_POST['prix_base'];

var_dump($prix_panier);
var_dump($prix_base);


if ($prix_panier >= $prix_base) {
$prix_panier = $pdo->exec("UPDATE panier_utilisateur_$_SESSION[user]
SET prix = $prix_panier
WHERE id_panier_utilisateur = $id_p_u;

UPDATE panier_utilisateur_$_SESSION[user]
SET quantite = (quantite_base * $nb_produits)
WHERE id_panier_utilisateur = $id_p_u;");}

else {
    $prix_panier = $pdo->exec("DELETE FROM panier_utilisateur_$_SESSION[user]
    WHERE id_panier_utilisateur = $id_p_u;");}

echo <<<FOO
        <form name="myform" class="myform" action="cart.php" method="post">
        <input type="hidden" name="nombre_produits" value="$nb_produits"/>
        <input type="hidden" name="sumitem" value="$nb_produits"/>
        <button type="submit">Submit</button>
        </form>
FOO;

echo '<script type="text/javascript">document.myform.submit();</script>';



?>
