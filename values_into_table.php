<?php

require "calldb.php";


$ins = $pdo->prepare("INSERT INTO produits (nom_complet, sexe, type, couleur, couleur_affichée, prix, image, description ) values(?,?,?,?,?,?,?,?)");
    $ins->execute(array(
       "Kayak", //nom complet// 
       "", //sexe//
       "kayak", //type//
       "bleu",    //couleur//
       "bleue",    //couleur affichée//
       "750",   //prix//
       "KAYB.jpg", //image/
       "Un incroyable kayak au performances inégalés"    //description//
    ));

?>