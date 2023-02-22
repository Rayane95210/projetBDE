<?php 
$_SESSION['view'] = 'MesInformationsModer';
require 'view_header.php'
?>
    <main>
      <section>
        <h1>Mes Informations</h1>
        <div class="grandDiv">
          <h2> Informations personnelles</h2>
          <hr>
          <div class="bloc">
            <p>
              <img src="img/utilisateur.png" alt="utilisateur Nom">
            </p>
            <p> <?= $info[0]['nom'] ?> </p>
          </div>
          <hr>
          <div class="bloc2">
            <p>
              <img src="img/utilisateur.png" alt="utilisateur Prenom">
            </p>
            <p> <?= $info[0]['prenom'] ?> </p>
          </div>
          <hr>
          <div class="bloc3">
            <p>
              <img src="img/chapeau.png" alt="utilisateur Numero étudiant">
            </p>
            <p> <?= $info[0]['idEtudiant'] ?> </p>
          </div>
          <hr>
          <div class="bloc4">
            <p>
              <img src="img/Ruban.svg" alt=" Logo Ruban Formation">
            </p>
            <p> Formation </p>
          </div>
        </div>
      </section>
    </main>
    <!--Footer-->
    <?php require "view_Footer.php"?>
  </body>
</html>