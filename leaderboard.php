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
    <h1>Classement</h1>
    <div class="container_classement">
      <table class="classement">
        <thead>
          <tr>
            <th colspan="2">Classement Lille</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // select * from player
          $sql = 'SELECT * FROM Player where campus =1 ORDER BY  Player.totalScore DESC Limit 10';
          $resultatLocal = mysqli_query($conn, $sql);

          $i = 0;
          while ($rowLocal = mysqli_fetch_assoc($resultatLocal)) {
          ?>
            <tr>
              <td class="classement_sep title_table classement_td"><a href=<?php echo "./profile.php?idPlayer=" . $rowLocal['idPlayer']  ?>><?php echo $rowLocal['firstName'] .  ' ' . $rowLocal['lastName'] ?></a></td>
              <td class="classement_sep2 title_table classement_td"><?php echo $rowLocal['totalScore'] ?></td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
      <table class="classement">
        <thead>
          <tr>
            <th colspan="2">Classement Intercampus</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // select * from player
          $sql = 'SELECT * FROM Player ORDER BY  Player.totalScore DESC Limit 10';
          $resultatLocal = mysqli_query($conn, $sql);

          $i = 0;
          while ($rowLocal = mysqli_fetch_assoc($resultatLocal)) {
          ?>
            <tr>
              <td class="classement_sep title_table classement_td"><a href=<?php echo "./profile.php?idPlayer=" . $rowLocal['idPlayer']  ?>><?php echo $rowLocal['firstName'] .  ' ' . $rowLocal['lastName'] ?></a></td>
              <td class="classement_sep2 title_table classement_td"><?php echo $rowLocal['totalScore'] ?></td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>

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