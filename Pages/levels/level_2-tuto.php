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
?>

<div class="main-container">

      <form method="POST">

            <Label for="user">Username</Label>  
            <input id="user" type="text" name="user" placeholder="Username">


            <Label for="pass">Password</Label>
            <input id="pass" type="text" name="password" placeholder="Password">

            <button>Submit</button>
      </form>

</div>