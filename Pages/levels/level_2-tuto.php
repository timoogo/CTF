<?php

include "../../Components/init.php";
include "../header.php";


if(!empty($_POST)){

      // var_dump($_POST);
      // echo "<br>";

      $user = $_POST["user"];
      $pass = $_POST["password"];

      $query = $pdo->prepare("SELECT * FROM administrators WHERE admin_name = '$user' AND admin_password = '$pass'");
      $execute = $query->execute();

      // var_dump($pass);
      // echo "<br>";
      // var_dump($query);
      // echo "<br>";
      // var_dump($execute);
      // echo "<br>";
      // var_dump($query->rowCount());

      if ($query->rowCount() >0){
            header('location:' . ROOT . '/Pages/levels/level_2-1.php');
      }
}

include "../../Components/left_menu.php";
?>

<div id="main-container">

      <div class="levelDescription">
            <p data-tooltip-container>Pour ce deuxième chapitre, vous allez découvrir les failles de sécurité SQL</p>
            <p data-tooltip-container>Votre but pour ce premier niveau sera de réaliser une injection SQL, chose réalisable lorsque les valeurs des champs ne sont pas vérifiés et sécurisés. Essayez de passer au prochain niveau sans pour autant connaitre le nom d'utilisateur ou le mot de passe</p>
            
      </div>

      <form method="POST">

            <Label for="user" style="color: white;">Username</Label>  
            <input id="user" type="text" name="user" placeholder="Username">


            <Label for="pass" style="color: white;">Password</Label>
            <input id="pass" type="text" name="password" placeholder="Password">

            <button>Submit</button>
      </form>

</div>


<script src="<?= ROOT ?>/script/main.js"></script>