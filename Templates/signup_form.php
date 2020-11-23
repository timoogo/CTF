<?php
if (!empty($_POST)) {
    $pseudo = trim(htmlspecialchars($_POST['pseudo']));
    $email = trim(htmlspecialchars($_POST['email']));
    $pass = trim(htmlspecialchars($_POST['pass']));

    $errors = array();
    if (empty($pseudo)) {
        $errors[] = "veuillez entrer un pseudo";
    }
    if (empty($email)) {
        $errors[] = "veuillez entrez un email";
    }
    if (empty($pass)) {
        $errors[] = "veuillez entrer un mot de passe";
    }

    if (empty($errors)) {
        $verif_email = $pdo->prepare("SELECT * FROM users WHERE user_email = :email"); //check si mail déjà utilisé => éviter erreur
        $verif_email->bindParam(':email', $email, PDO::PARAM_STR);
        $verif_email->execute();

        if ($verif_email->rowCount() > 0) {
            $errors[] = "Cet email est déjà utilisé";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //verif si email a le bon format
            $errors[] = "Format d'email invalide";
        }

        if (empty($errors)) { //totu bon, on insert dans la db
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $insert_db = $pdo->prepare("INSERT INTO users (user_username, user_email, user_password) VALUES (:pseudo, :email, :pass)");
            $insert_db->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $insert_db->bindParam(':email', $email, PDO::PARAM_STR);
            $insert_db->bindParam(':pass', $pass, PDO::PARAM_STR);
            $insert_db->execute();


            header('location:' . ROOT . '/Views/profil.php');
        } else {
            echo '<div class="errors">' . implode('<br>', $errors) . '</div>';
        }
    } else {
        echo '<div class="errors">' . implode('<br>', $errors) . '</div>';
    }
}
?>



<form action="" method="POST">
    <input type="text" placeholder="Pseudo" name="pseudo">
    <input type="email" placeholder="email" name="email">
    <input type="password" placeholder="Password" name="pass">
    <button>S'inscrire</button>
    <p>Déjà inscrit ? <a href="login.php?request=login">Se connecter</a></p>
</form>