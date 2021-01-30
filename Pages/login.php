<?php
include "../Components/init.php";
include "header.php";

if (isset($_GET['request'])){
    switch ($_GET['request']) {
        case 'login':
            require '../Components/login_form.php';
            break;
        case 'signup':
            require '../Components/signup_form.php';
            break;
        default:
            require '../Components/login_form.php';
            break;
    }
}else{
    header('location:login.php?request=login');
}

?>
