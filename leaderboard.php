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
        <i class='bx bx-menu' id="btn" ></i>
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
         <i class='bx bx-football' ></i>
         <span class="links_name">Match rapide</span>
       </a>
       <span class="tooltip">Match rapide</span>
     </li>
     <li>
       <a href="tournament.php">
         <i class='bx bx-trophy' ></i>
         <span class="links_name">Tournois</span>
       </a>
       <span class="tooltip">Tournois</span>
     </li>
     <li>
       <a href="score.php">
         <i class='bx bx-star' ></i>
         <span class="links_name">Score</span>
       </a>
       <span class="tooltip">Score</span>
     </li>
     <li>
       <a href="leaderboard.php">
         <i class='bx bxs-news' ></i>
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
            <th colspan="2">Classement</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="classement_sep title_table classement_td">Lille</td>
            <td class="classement_sep2 title_table classement_td">Intercampus</td>
        </tr>
        <tr> <!--Ligne-->
            <td class="classement_sep">
              <table class="classement2">
                <tr>
                  <td class="classement_td">Nom Prenom</td> <!--Lille-->
                  <td class="classement_td">Score</td>
                </tr>
            </table>
            </td>
            <td class="classement_sep2">
              <table class="classement2">
                <tr>
                  <td class="classement_td">Nom Prenom</td> <!--Intercampus-->
                  <td class="classement_td">Score</td>
                </tr>
              </table>
            </td>
        </tr> <!--Ligne-->
        <tr> <!--Ligne-->
            <td class="classement_sep">
              <table class="classement2">
                <tr>
                  <td class="classement_td">Nom Prenom</td> <!--Lille-->
                  <td class="classement_td">Score</td>
                </tr>
            </table>
            </td>
            <td class="classement_sep2">
              <table class="classement2">
                <tr>
                  <td class="classement_td">Nom Prenom</td> <!--Intercampus-->
                  <td class="classement_td">Score</td>
                </tr>
              </table>
            </td>
        </tr> <!--Ligne-->
        <tr> <!--Ligne-->
            <td class="classement_sep">
              <table class="classement2">
                <tr>
                  <td class="classement_td">Nom Prenom</td> <!--Lille-->
                  <td class="classement_td">Score</td>
                </tr>
            </table>
            </td>
            <td class="classement_sep2">
              <table class="classement2">
                <tr>
                  <td class="classement_td">Nom Prenom</td> <!--Intercampus-->
                  <td class="classement_td">Score</td>
                </tr>
              </table>
            </td>
        </tr> <!--Ligne-->
        <tr> <!--Ligne-->
            <td class="classement_sep">
              <table class="classement2">
                <tr>
                  <td class="classement_td">Nom Prenom</td> <!--Lille-->
                  <td class="classement_td">Score</td>
                </tr>
            </table>
            </td>
            <td class="classement_sep2">
              <table class="classement2">
                <tr>
                  <td class="classement_td">Nom Prenom</td> <!--Intercampus-->
                  <td class="classement_td">Score</td>
                </tr>
              </table>
            </td>
        </tr> <!--Ligne-->

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