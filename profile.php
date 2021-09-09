<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-football icon'></i>
      <div class="logo_name">BABY-FOOT</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index.php">
          <i class='bx bx-home'></i>

          <span class="links_name">Accueil</span>
        </a>
        <span class="tooltip">Accueil</span>
      </li>
      <li>
        <a href="quickGame.php">
          <i class='bx bx-football'></i>
          <span class="links_name">Match rapide</span>
        </a>
        <span class="tooltip">Match rapide</span>
      </li>
      <li>
        <a href="tournament.php">
          <i class='bx bx-trophy'></i>
          <span class="links_name">Tournois</span>
        </a>
        <span class="tooltip">Tournois</span>
      </li>
      <li>
        <a href="leaderboard.php">
          <i class='bx bxs-news'></i>
          <span class="links_name">Classement</span>
        </a>
        <span class="tooltip">Classement</span>
      </li>
      <li>
        <a href="profile.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
    <!-- fin de la liste -->
    </ul>
  </div>
  </div>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <?php
  include('../connexion.php');
  ?>

  <section class="home-section">

    <h1>Profile</h1>

    <div class="profile_container">
      <?php
      $sql = "SELECT firstName, lastName FROM player where idPlayer='" . $_GET['idPlayer'] . "'";
      $resultat = mysqli_query($conn, $sql);
      if ($resultat == FALSE) {
        die("<br>Echec d'execution de la requete : " . $sql);
      } elseif (mysqli_num_rows($resultat) == 1) {
        $row = mysqli_fetch_assoc($resultat);
      }
      ?>
      <h2><?php echo $row['firstName'] . " " . $row['lastName'] ?></h2>

      <h3 class="stats_tir_h3">Stats de tir</h3>

      <div class="profile_flex_center">
        <?php

        $command = escapeshellcmd('python ./playerstat.py ' . $_GET['idPlayer'] . '');
        $output = shell_exec($command);

        ?>

        <img src=<?php echo './image/ballebaby' . $_GET['idPlayer'] . '.png'?> alt="#">
      </div>
      <?php
      $sql = "SELECT round(AVG(vitesse),3) as moyvitesse FROM `but` WHERE markedBy='" . $_GET['idPlayer'] . "'";
      $resultat = mysqli_query($conn, $sql);
      if ($resultat == FALSE) {
        die("<br>Echec d'execution de la requete : " . $sql);
      } elseif (mysqli_num_rows($resultat) == 1) {
        $row = mysqli_fetch_assoc($resultat);
      }
      ?>
      <div class="profile_flex_center margin_but">
        <h3>Vitesse moyenne de but :</h3>
        <h3 class="vit_but"> <?php echo $row['moyvitesse'].' m/s' ?></h3>
      </div>
    </div>
  </section>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange();
    });

    searchBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange();
    });


    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    }
  </script>
</body>

</html>