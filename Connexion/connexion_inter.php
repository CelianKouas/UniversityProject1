<?php
session_start();

require "../calldb.php";

    if ((!empty($_POST['username'])) && (!empty($_POST['rimuru'])))
        {
        $username = $_POST['username'];
        $rimuru = $_POST['rimuru'];

        $check = $pdo->prepare('SELECT username, email, rimuru FROM utilisateurs WHERE username = ? AND rimuru = ?');
        $check->execute(array($username, $rimuru));
        $data = $check->fetch();
        $row = $check->rowCount();


        if($row == 1)
    
                {
                    $_SESSION['user'] = $data['username'];
                    header('Location: https://togetbetter.fr/Bewet/ShoppingCart/cart.php');
                    die();
                }
                else {
                    header('Location: connexion3.php');
                    die();
                }
            }
        else {
            header('Location: connexion4.php');
            die();
        }
    
?>