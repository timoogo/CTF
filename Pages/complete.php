<?php
    include "../Components/init.php";
    var_dump($_POST);
    $id = $_SESSION['user']['id'];
    $level = $_POST['level'];

    if ($_SESSION['user']['progress'] <= $level){
        $pdo->query("UPDATE completion SET level_id = $level WHERE user_id = $id");
        $_SESSION['user']['progress'] = $level;
    }