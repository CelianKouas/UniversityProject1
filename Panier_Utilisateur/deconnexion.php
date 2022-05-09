<?php
session_start();

require "../calldb.php";


$deconnexion = $_POST['deconnexion'];

if ($deconnexion == 1) {
session_destroy();

echo <<<FOO
        <form name="myform" class="myform" action="../index.php" method="post">
        <button type="submit">Submit</button>
        </form>
FOO;

echo '<script type="text/javascript">document.myform.submit();</script>';
}


?>