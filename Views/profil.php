<?php
include '../include/init.php';
include "header.php";

if(empty($_SESSION['user'])){
    header('location:login.php?request=login');
}

?>

<h2>Vos infos:</h2>
<p>pseudo : <?= $_SESSION["user"]["pseudo"]?></p>
<p>email: <?= $_SESSION["user"]["email"]?></p>

<a href="disconnect.php">Se déconnecter</a>