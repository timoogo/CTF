<div class="chapter-menu">
      <div class="left-menu">
            <h2>Liste des chapitres</h2>
            <div class="chapter">
                  <p class="chapter-name"><i class="fas fa-angle-right"></i>Chapitre 1 <?php if (!empty($_SESSION) && $_SESSION['user']['progress'] >= 4) : echo "<i class='fas fa-check-circle'></i>";
                                                                                          endif; ?> </p>
                  <div class="chapter-content">
                        <a class="levels" href="level_tuto.php">Tutoriel <?php if (!empty($_SESSION) && $_SESSION['user']['progress'] >= 1) : echo "<i class='fas fa-check-circle'></i>";
                                                                              endif; ?></a>
                        <a class="levels" href="level_1.php">Niveau 1 <?php if (!empty($_SESSION) && $_SESSION['user']['progress'] >= 2) : echo "<i class='fas fa-check-circle'></i>";
                                                                        endif; ?></a>
                  </div>
                  <hr>
            </div>
            <div class="chapter">
                  <p class="chapter-name"><i class="fas fa-angle-right"></i>Chapitre 2</p>
                  <div class="chapter-content">
                  <a class="levels" href="level_2-tuto.php">Tutoriel</a>
                  <a class="levels" href="level_2-1.php">Niveau 1</a>                 
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
            <a href="../reset.php">Réinitialiser ma progression</a>
      </div>
      <div class="right-menu inactive">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
      </div>
</div>