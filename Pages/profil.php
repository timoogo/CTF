<?php
include "../Components/init.php";
include "header.php";

if (empty($_SESSION['user'])) {
    header('location:login.php?request=login');
}

// var_dump($_SESSION);

?>
<section class="profil-info">
    <h2>Vos infos:</h2>
    <p>pseudo : <?= $_SESSION["user"]["pseudo"] ?></p>
    <p>email: <?= $_SESSION["user"]["email"] ?></p>

    <a href="disconnect.php">Se déconnecter</a>
</section>