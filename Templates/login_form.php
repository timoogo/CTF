<?php
if(!empty($_POST)){
    if (!empty($_POST['pseudo']) && !empty($_POST['pass'])) {
        $pseudo = trim(htmlspecialchars($_POST['pseudo'])); // supression des espaces et protections aux injections
        $pass = trim(htmlspecialchars($_POST['pass']));
    
    
        $query = $pdo->prepare("SELECT * FROM users WHERE user_username = :pseudo"); //on cherche si un user correspond
        $query->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
        $query->execute();
    
        if ($query->rowCount() > 0) { //alors on a trouvé un user
            $db_infos = $query->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pass, $db_infos['user_password'])) {
                $_SESSION['user']['pseudo'] = $db_infos['user_username'];
                $_SESSION['user']['email'] = $db_infos['user_email'];
                header('location:' . ROOT . '/Views/profil.php');
            } else {
                echo '<div class="errors">Identifiants incorrects</div>';
            }
        } else {
            echo '<div class="errors">Identifiants incorrects</div>';
        }
    } else {
        echo '<div class="errors">Veuillez compléter tous les champs</div>';
    }
}


?>


<form action="" method="POST">
    <input type="text" placeholder="Pseudo" name="pseudo">
    <input type="password" placeholder="Password" name="pass">
    <button>Se connecter</button>
    <p>Pas de compte ? <a href="login.php?request=signup">S'inscrire</a></p>
</form>