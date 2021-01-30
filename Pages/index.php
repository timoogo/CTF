<?php
include "../Components/init.php";
include "./header.php";
?>

<main>
    <div class="main-container">
        <h1> Bienvenue sur notre CTF !</h1>
        <div class="title-container">L'invite de commande</div>
        <div class="sections-container">
            <section>
                <article>
                    <div class="chapter titre-accueil">
                        <p class="chapter-name">
                            <i class="fas fa-angle-right" style="transform: rotate(0deg);"></i>
                            Chapitre 1
                        </p>
                        <div class="chapter-content accueil">
                            <a href="<?= ROOT ?>/Pages/levels/level_tuto.php">Niveau tutoriel</a>
                            <a href="<?= ROOT ?>/Pages/levels/level_1.php">Niveau 1</a>
                            <a href="">Niveau 2</a>
                            <a href="">Niveau 3</a>
                        </div>
                    </div>
                </article>
            </section>
            <section>
                <article>
                    <div class="chapter titre-accueil">
                        <p class="chapter-name">
                            <i class="fas fa-angle-right" style="transform: rotate(0deg);"></i>
                            Chapitre 2
                        </p>
                        <div class="chapter-content accueil">
                            <a href="<?= ROOT ?>/Pages/levels/level_tuto.php">Niveau tutoriel</a>
                            <a href="<?= ROOT ?>/Pages/levels/level_1.php">Niveau 1</a>
                            <a href="">Niveau 2</a>
                            <a href="">Niveau 3</a>
                        </div>
                    </div>
                </article>
            </section>
            <section>
                <article>
                    <div class="chapter titre-accueil">
                        <p class="chapter-name">
                            <i class="fas fa-angle-right" style="transform: rotate(0deg);"></i>
                            Chapitre 3
                        </p>
                        <div class="chapter-content accueil">
                            <a href="<?= ROOT ?>/Pages/levels/level_tuto.php">Niveau tutoriel</a>
                            <a href="<?= ROOT ?>/Pages/levels/level_1.php">Niveau 1</a>
                            <a href="">Niveau 2</a>
                            <a href="">Niveau 3</a>
                        </div>
                    </div>
                </article>
            </section>
            <section>
                <article>
                    <div class="chapter titre-accueil">
                        <p class="chapter-name">
                            <i class="fas fa-angle-right" style="transform: rotate(0deg);"></i>
                            Chapitre 4
                        </p>
                        <div class="chapter-content accueil">
                            <a href="<?= ROOT ?>/Pages/levels/level_tuto.php">Niveau tutoriel</a>
                            <a href="<?= ROOT ?>/Pages/levels/level_1.php">Niveau 1</a>
                            <a href="">Niveau 2</a>
                            <a href="">Niveau 3</a>
                        </div>
                    </div>
                </article>
            </section>
        </div>

    </div>
</main>

<footer>
    <p> &copy CTF, 2020 - Tous droits réservés </p>
</footer>

<script src="../script/main.js"></script>
</body>

</html>