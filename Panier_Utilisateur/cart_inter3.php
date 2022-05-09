<?php
session_start();

require "../calldb.php";


$id_p_u = $_POST['id_p_u'];




$delete_panier = $pdo->exec("DELETE FROM  panier_utilisateur_$_SESSION[user]
WHERE id_panier_utilisateur = $id_p_u;");

echo <<<FOO
        <form name="myform" class="myform" action="cart.php" method="post">
        <button type="submit">Submit</button>
        </form>
FOO;

echo '<script type="text/javascript">document.myform.submit();</script>';



?>