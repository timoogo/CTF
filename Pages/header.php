<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= ROOT ?>/style/css/import.css">
    <link rel="icon" href="<?= ROOT ?>/style/img/favicon-256x256.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!--ReactJS-->
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="<?= ROOT ?>/script/app.js"></script>

    <script src="<?= ROOT ?>/script/jquery.js"></script>
    <script src="<?= ROOT ?>/script/jquery-ui.min.js"></script>
    <script src="<?= ROOT ?>/script/notepad.js" defer></script>


    <title>Capture The Flag</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="<?= ROOT ?>/Pages">Accueil</a>
            </div>
            <div>
                <ul>
                    <li><a href="<?= ROOT ?>/Pages/profil.php" class="my-account">Mon compte</a></li>
                    <li><a href="#">A propos</a></li>
                </ul>
                <div>
                    <input type="checkbox" id="toggle-bcg">
                </div>

            </div>
        </nav>
    </header>