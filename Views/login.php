<?php
include '../include/init.php';
include "header.php";

if (isset($_GET['request'])){
    switch ($_GET['request']) {
        case 'login':
            require '../Templates/login_form.php';
            break;
        case 'signup':
            require '../Templates/signup_form.php';
            break;
        default:
            require '../Templates/login_form.php';
            break;
    }
}else{
    header('location:login.php?request=login');
}

?>
