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
        <a href="#">
          <i class='bx bx-home'></i>

          <span class="links_name">Accueil</span>
        </a>
        <span class="tooltip">Accueil</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-football'></i>
          <span class="links_name">Match rapide</span>
        </a>
        <span class="tooltip">Match rapide</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-trophy'></i>
          <span class="links_name">Tournois</span>
        </a>
        <span class="tooltip">Tournois</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-news'></i>
          <span class="links_name">Classement</span>
        </a>
        <span class="tooltip">Classement</span>
      </li>
    </ul>
  </div>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <?php
  include('../connexion.php');
  ?>

  <?php
  $personnes = array();
  $sql = 'SELECT * FROM player ';
  $resultat = mysqli_query($conn, $sql);
  //on fait un tableau avec les noms dans la bdd
  if (mysqli_num_rows($resultat) == 0) {
    echo "Ajouter des noms dans la base de données";
  } else {
    echo 'hello';
    while ($row = mysqli_fetch_assoc($resultat)) {
      array_push($personnes, $row['firstName'] . " " . $row['lastName']);
    }
  };
  if (isset($_GET['c'])) {
    switch ($_GET['c']) {
      case 'create':
        //on récupere le maxId des quickGames pour ajouter une nouvelle quickGame
        $sql = 'SELECT MAX(idQuickGame) as maxId FROM quickgame';
        $resultat = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($resultat);
        $sql = 'INSERT INTO quickgame (idQuickGame) VALUES (' . $row['maxId'] + 1 . ')';
        $resultat = mysqli_query($conn, $sql);

        //on créé la quick Game
        //pr chaque joueur
        //on recherche l'id du joueur
        //on créé une quickTeam avec id + team number + idQuickMatch

      default:
    }
  }
  ?>

  <section class="home-section">
    <h1>Match Rapide</h1>
    <div class="fmatch-form  ">
      <form class="form-fm" action="./quickGame.php" method="get">
        <div class="player ">
          <div id="from">
            <label for="name">Ajouter le joueur n°1</label>
            <input type="text" id="tags" name="user_name" placeholder="Nom Prenom">


          </div>
          <fieldset>
            <label><input type="radio" name="equipePlayer1">Equipe n°1</label>
            <label><input type="radio" name="equipePlayer1">Equipe n°2</label>
          </fieldset>
        </div>
        <div class="player  ">
          <div id="from  ">
            <label for="name">Ajouter le joueur n°2</label>
            <input type="text" id="tags2" name="user_name" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="equipePlayer2">Equipe n°1</label>
            <label><input type="radio" name="equipePlayer2">Equipe n°2</label>
          </fieldset>
        </div>
        <div class="add-player">
          <div class="player" id="player3" style="display:none">
            <div id="from  ">
              <label for="name">Ajouter le joueur n°3</label>
              <input type="text" id="tags3" name="user_name" placeholder="Nom Prenom">


            </div>
            <fieldset>
              <label><input type="radio" name="equipePlayer3">Equipe n°1</label>
              <label><input type="radio" name="equipePlayer3">Equipe n°2</label>
            </fieldset>
          </div>
          <div class="player" id="player4" style="display:none">
            <div id="from  ">
              <label for="name">Ajouter le joueur n°4</label>
              <input type="text" id="tags4" name="user_name" placeholder="Nom Prenom">
            </div>
            <fieldset>
              <label><input type="radio" name="equipePlayer4">Equipe n°1</label>
              <label><input type="radio" name="equipePlayer4">Equipe n°2</label>
            </fieldset>
          </div>
        </div>
        <div class="add-player-react" id="addPlayerButton"><span onClick="displayAddPlayer()">Ajouter un joueur +</span></div>
        <label for="end-match">Fin de match</label>
        <select name="end-match" id="">
          <option value="">Nombre de buts</option>
          <option value="">Temps</option>
        </select>
        <select name="buts" id="">
          <option value="">1</option>
          <option value="">2</option>
          <option value="">4</option>
          <option value="">5</option>
          <option value="">6</option>
          <option value="">7</option>
          <option value="">8</option>
          <option value="">9</option>
          <option value="">10</option>
          <option value="">11</option>
          <option value="">12</option>
          <option value="">13</option>
          <option value="">14</option>
          <option value="">15</option>
        </select>
        <select name="temps" id="">
          <option value="">5</option>
          <option value="">6</option>
          <option value="">7</option>
          <option value="">8</option>
          <option value="">9</option>
          <option value="">10</option>
          <option value="">11</option>
          <option value="">12</option>
          <option value="">13</option>
          <option value="">14</option>
          <option value="">15</option>
          <option value="">16</option>
          <option value="">17</option>
          <option value="">18</option>
          <option value="">19</option>
          <option value="">20</option>
        </select>

        <div>
          <label>Temps entre malus</label>
          <select name="temps" id="">
            <option value="">15s</option>
            <option value="">20s</option>
            <option value="">25s</option>
            <option value="">30s</option>
            <option value="">35s</option>
            <option value="">40s</option>
            <option value="">45s</option>
            <option value="">50s</option>
            <option value="">55s</option>
            <option value="">60s</option>
          </select>

        </div>
        <input type="hidden" name="c" value="create">
        <div><input type="submit" value="Lancer la partie"></div>


      </form>

    </div>

  </section>

  <script>
    $(function() {
      var availableTags = <?php echo json_encode($personnes) ?>;
      $("#tags").autocomplete({
        source: availableTags
      });
    });

    $(function() {
      var availableTags = <?php echo json_encode($personnes) ?>;
      $("#tags2").autocomplete({
        source: availableTags
      });
    });

    $(function() {
      var availableTags = <?php echo json_encode($personnes) ?>;
      $("#tags3").autocomplete({
        source: availableTags
      });
    });

    $(function() {
      var availableTags = <?php echo json_encode($personnes) ?>;
      $("#tags4").autocomplete({
        source: availableTags
      });
    });

    function displayAddPlayer() {
      var x = document.getElementById("player3");
      var y = document.getElementById("player4");
      var z = document.getElementById("addPlayerButton");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        y.style.display = "block";
        z.style.display = "none";

      }
    }
  </script>

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