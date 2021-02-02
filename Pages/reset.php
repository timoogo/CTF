<?php
    include "../Components/init.php";
    $id = $_SESSION['user']['id'];
    var_dump($id);
    $pdo->query("UPDATE completion SET level_id = 0 WHERE user_id = $id");
    $_SESSION['user']['progress'] = 0;

    header('location:'.ROOT. '/Pages');
