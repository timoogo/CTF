<?php
include "../../Components/init.php";
include "../header.php";
?>
    <main data-id="1">
        <div class="chapter-menu">
            <div class="left-menu">
                <h2>Liste des chapitres</h2>
                <div class="chapter">
                    <p class="chapter-name"><i class="fas fa-angle-right"></i>Chapitre 1</p>
                    <div class="chapter-content">
                        <a class="levels" href="level_tuto.php">Tutoriel</a>
                        <a class="levels" href="level_1.php">Niveau 1</a>
                    </div>
                    <hr>
                </div>
                <div class="chapter">
                    <p class="chapter-name"><i class="fas fa-angle-right"></i>Chapitre 2</p>
                    <div class="chapter-content">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur voluptatem, dolorum blanditiis quasi magni ab unde. Pariatur illum, possimus omnis ad eius dolorem deserunt! Laboriosam ullam nihil voluptatum sint vero.
                    </div>
                    <hr>
                </div>
                <div class="chapter">
                    <p class="chapter-name"><i class="fas fa-angle-right"></i>Chapitre 3</p>
                    <div class="chapter-content">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur voluptatem, dolorum blanditiis quasi magni ab unde. Pariatur illum, possimus omnis ad eius dolorem deserunt! Laboriosam ullam nihil voluptatum sint vero.
                    </div>
                    <hr>
                </div>
                <div class="chapter">
                    <p class="chapter-name"><i class="fas fa-angle-right"></i>Chapitre 4</p>
                    <div class="chapter-content">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur voluptatem, dolorum blanditiis quasi magni ab unde. Pariatur illum, possimus omnis ad eius dolorem deserunt! Laboriosam ullam nihil voluptatum sint vero.
                    </div>
                    <hr>
                </div>
                <div class="chapter">
                    <p class="chapter-name"><i class="fas fa-angle-right"></i>Chapitre 5</p>
                    <div class="chapter-content">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur voluptatem, dolorum blanditiis quasi magni ab unde. Pariatur illum, possimus omnis ad eius dolorem deserunt! Laboriosam ullam nihil voluptatum sint vero.
                    </div>
                    <hr>
                </div>
            </div>
            <div class="right-menu inactive">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>

        <div id="main-container">
            <div class="levelDescription">
                <p>Bienvenue sur notre site de CTF ! Le premier niveau consiste à se familiariser avec le DOS.</p>
                <p>Pour commencer vous pouvez écrire la commande help pour découvrir les différentes commandes. Votre but sera de trouver les flags pour pouvoir finir le niveau</p>
                
            </div>
            <div id="term-container">
                <div class="line answers" id="currentLine">
                    <p class="term_text answers">C:\CTF\DOS></p>
                    <input name="command" type="text" class="term answers" id="currentCmd">
                </div>
            </div>
        </div>
    </main>
    <div id="toDoList">
        <div id="upperTDL">
            <h3>To-Do List</h3>
        </div>
        <div id="lowerTDL">
                <ol>
                    <li>
                        <hr>
                        <h4>Faire ceci :</h4>
                        <pre>
                            <code>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, culpa at fuga sunt dolorem odit deserunt illum obcaecati voluptatibus laborum, vel quis quos est, repellat amet facere numquam illo iure?</code>
                        </pre>
                    </li>
                    <li>
                        <hr>
                        <h4>Faire cela :</h4>
                        <pre>
                            <code>bonjoir</code>
                        </pre>
                    </li>
                </ol>
            </div>
        </div>
    <footer style="height: 0px;">
    </footer>

    <script src="<?= ROOT ?>/script/main.js"></script>
    <script src="<?= ROOT ?>/script/termMain.js"></script>
</body>

</html>