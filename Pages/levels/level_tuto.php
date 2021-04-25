<?php
include "../../Components/init.php";
include "../header.php";
include "../../Components/left_menu.php";
?>
    <main data-id="1">
        <div id="main-container">
            <div class="levelDescription">
                <p data-tooltip-container data-tooltip-label="Try help command if you are lost">Bienvenue sur notre site de CTF ! Le premier niveau consiste à se familiariser avec le DOS.</p>
                <p data-tooltip-container data-tooltip-label="Try help command if you are lost">Pour commencer vous pouvez écrire la commande help pour découvrir les différentes commandes. Votre but sera de trouver les flags pour pouvoir finir le niveau</p>
                
            </div>
            <div id="term-container">
                <div class="line answers" id="currentLine">
                    <p class="term_text answers">C:\CTF\DOS></p>
                    <input name="command" type="text" class="term answers" id="currentCmd">
                </div>
            </div>

            <div class="dragNote">
                <textarea wrap="hard" name="notepad" id="notepad" class="notepad" cols="30" rows="10" style="display: none;"></textarea>
            </div>

            <div class="notepad-btn">
                <span style="font-size: 40px; color: #eeeeee;">
                    <i class="far fa-sticky-note" ></i>
                </span>
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

    <script src="<?= ROOT ?>/script/toolTip.js"></script>
    <script src="<?= ROOT ?>/script/main.js"></script>
    <script src="<?= ROOT ?>/script/termMain.js"></script>
</body>

</html>