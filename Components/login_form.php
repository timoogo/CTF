<?php

if(isset($_SESSION['user'])){ //empeche de venir sur cette page si compte déjà créé
    header('location:' . ROOT . '/Views/profil.php');
}

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
                $_SESSION['user']['id'] = $db_infos['user_id'];
                $_SESSION['user']['pseudo'] = $db_infos['user_username'];
                $_SESSION['user']['email'] = $db_infos['user_email'];
                $progress = $pdo->query("SELECT level_id FROM completion INNER JOIN users WHERE completion.user_id = users.user_id AND users.user_id = $db_infos[user_id]");
                $progress_n = $progress->fetch();
                $_SESSION['user']['progress'] = $progress_n['level_id'];
                header('location:' . ROOT . '/Pages/profil.php');
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