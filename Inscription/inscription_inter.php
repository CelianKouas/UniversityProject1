<?php
$username = null;
$rimuru = null;
$age = null;
$sexe = null;
$email = null;


require "../calldb.php";

    
        if ((!empty($_POST['username'])) && (!empty($_POST['rimuru'])) && (!empty($_POST['email'])) 
            && (!empty($_POST['age'])) && (!empty($_POST['sexe'])))
            {
            $username = $_POST['username'];
            $rimuru = $_POST['rimuru'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $sexe = $_POST['sexe'];

            if ($age < 0 || $age > 150) {
                header('Location: inscription2.php');
                die();}
            
            
            $ins = $pdo->prepare("insert into utilisateurs (username, rimuru, email, age, sexe) values(?,?,?,?,?)");
            $ins->execute(array(
                "$username",
                "$rimuru",
                "$email",
                "$age",
                "$sexe"));

                header('Location: connexion.php');
                die();}

            else {
                header('Location: inscription3.php');
                die();
            }
        
 
?>