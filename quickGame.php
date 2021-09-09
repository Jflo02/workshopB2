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
        <a href="#">
          <i class='bx bx-trophy'></i>
          <span class="links_name">Tournois</span>
        </a>
        <span class="tooltip">Tournois</span>
      </li>
      <li>
        <a href="score.php">
          <i class='bx bx-star'></i>
          <span class="links_name">Score</span>
        </a>
        <span class="tooltip">Score</span>
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
  </div>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <?php
  include('../connexion.php');
  ?>

  <?php
  $newIdQuickGame = 0;
  $personnes = array();
  $sql = 'SELECT * FROM player ';
  $resultat = mysqli_query($conn, $sql);
  //on fait un tableau avec les noms dans la bdd
  while ($row = mysqli_fetch_assoc($resultat)) {
    array_push($personnes, $row['firstName'] . " " . $row['lastName']);
  };
  if (isset($_GET['c'])) {
    switch ($_GET['c']) {
      case 'create':
        //on récupere le maxId des quickGames pour ajouter une nouvelle quickGame
        $sql = 'SELECT MAX(idQuickGame) as maxId FROM quickgame';
        $resultat = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($resultat);
        $newIdQuickGame = $row['maxId'] + 1;
        //on créé la quick Game
        // $sql = 'INSERT INTO quickgame (idQuickGame) VALUES (' . $newIdQuickGame . ')';
        if ($_GET['end-match'] == "time") {
          $DurationMaxUntilEnd =  date_create($_GET['temps']);
          $sql = 'INSERT INTO quickgame (idQuickGame, DurationMaxUntilEnd, isRumble) VALUES (' . $newIdQuickGame . ', "' . date_format($DurationMaxUntilEnd, 'H:i:s') .  '", ' . $_GET['isRumble'] . ')';
          $resultat = mysqli_query($conn, $sql);
        } else {
          $NumberOfGoalsNeeded = $_GET['buts'];
          $sql = 'INSERT INTO quickgame (idQuickGame, NumberOfGoalsNeeded, isRumble) VALUES (' . $newIdQuickGame . ', ' . $NumberOfGoalsNeeded .  ', ' . $_GET['isRumble'] . ')';
          $resultat = mysqli_query($conn, $sql);
        }
        $sql = 'INSERT INTO quickgameStats (idQuickGame) VALUES (' . $newIdQuickGame . ')';
        $resultat = mysqli_query($conn, $sql);

        // $sql = 'INSERT INTO quickgame (idQuickGame, DurationMaxUntilEnd, NumberOfGoalsNeeded, isRumble) VALUES (' . $newIdQuickGame . ', ' . $DurationMaxUntilEnd . ', ' . $NumberOfGoalsNeeded . ', 0)';
        // print_r($sql);
        // $resultat = mysqli_query($conn, $sql);




        //pr chaque joueur

        // INSERT INTO quickteam (`idPlayer`, `idQuickGame`, `teamNumber`) VALUES ('1', '4', '1');
        //on recherche l'id du joueur
        if (isset($_GET['user_name1'])) {
          $arr = explode(' ', trim($_GET['user_name1']));
          //on va chercher en bdd l'id de la personne
          $sql = 'SELECT idPlayer FROM player where firstName="' . $arr[0] . '" and lastName="' .  $arr[1] . '"';
          $resultat = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($resultat);
          $sql = 'INSERT INTO quickteam (idPlayer, idQuickGame, teamNumber) VALUES (' . $row['idPlayer'] . ', ' . $newIdQuickGame . ', ' . $_GET['equipePlayer1'] . ')';
          $resultat = mysqli_query($conn, $sql);
        };
        if (isset($_GET['user_name2'])) {
          $arr = explode(' ', trim($_GET['user_name2']));
          //on va chercher en bdd l'id de la personne
          $sql = 'SELECT idPlayer FROM player where firstName="' . $arr[0] . '" and lastName="' .  $arr[1] . '"';
          $resultat = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($resultat);
          $sql = 'INSERT INTO quickteam (idPlayer, idQuickGame, teamNumber) VALUES (' . $row['idPlayer'] . ', ' . $newIdQuickGame . ', ' . $_GET['equipePlayer2'] . ')';
          $resultat = mysqli_query($conn, $sql);
        };
        if (isset($_GET['user_name3'])) {
          if (!empty($_GET['user_name3'])) {

            $arr = explode(' ', trim($_GET['user_name3']));
            //on va chercher en bdd l'id de la personne
            $sql = 'SELECT idPlayer FROM player where firstName="' . $arr[0] . '" and lastName="' .  $arr[1] . '"';
            $resultat = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($resultat);
            $sql = 'INSERT INTO quickteam (idPlayer, idQuickGame, teamNumber) VALUES (' . $row['idPlayer'] . ', ' . $newIdQuickGame . ', ' . $_GET['equipePlayer3'] . ')';
            $resultat = mysqli_query($conn, $sql);
          }
        };
        if (isset($_GET['user_name4'])) {
          if (!empty($_GET['user_name4'])) {

            $arr = explode(' ', trim($_GET['user_name4']));
            //on va chercher en bdd l'id de la personne
            $sql = 'SELECT idPlayer FROM player where firstName="' . $arr[0] . '" and lastName="' .  $arr[1] . '"';
            $resultat = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($resultat);
            $sql = 'INSERT INTO quickteam (idPlayer, idQuickGame, teamNumber) VALUES (' . $row['idPlayer'] . ', ' . $newIdQuickGame . ', ' . $_GET['equipePlayer4'] . ')';
            $resultat = mysqli_query($conn, $sql);
          }
        };
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
          <div class="from">
            <label for="name">Ajouter le joueur n°1 :</label>
            <input type="text" id="tags" name="user_name1" placeholder="Nom Prenom">


          </div>
          <fieldset>
            <label><input type="radio" name="equipePlayer1" value=1>Equipe n°1</label>
            <label><input type="radio" name="equipePlayer1" value=2>Equipe n°2</label>
          </fieldset>
          <fieldset>
            <label><input type="radio" name="attdefplayer1" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer1" value=2>Défense</label>
          </fieldset>
        </div>
        <div class="player  ">
          <div class="from">
            <label for="name">Ajouter le joueur n°2 :</label>
            <input type="text" id="tags2" name="user_name2" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="equipePlayer2" value=1>Equipe n°1</label>
            <label><input type="radio" name="equipePlayer2" value=2>Equipe n°2</label>
          </fieldset>
          <fieldset>
            <label><input type="radio" name="attdefplayer2" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer2" value=2>Défense</label>
          </fieldset>
        </div>
        <div class="add-player">
          <div class="player" id="player3" style="display:none">
            <div class="from  ">
              <label for="name">Ajouter le joueur n°3 :</label>
              <input type="text" id="tags3" name="user_name3" placeholder="Nom Prenom">


            </div>
            <fieldset>
              <label><input type="radio" name="equipePlayer3" value=1>Equipe n°1</label>
              <label><input type="radio" name="equipePlayer3" value=2>Equipe n°2</label>
            </fieldset>
            <fieldset>
              <label><input type="radio" name="attdefplayer3" value=1>Attaque</label>
              <label><input type="radio" name="attdefplayer3" value=2>Défense</label>
            </fieldset>
          </div>
          <div class="player" id="player4" style="display:none">
            <div class="from">
              <label for="name">Ajouter le joueur n°4 :</label>
              <input type="text" id="tags4" name="user_name4" placeholder="Nom Prenom">
            </div>
            <fieldset>
              <label><input type="radio" name="equipePlayer4" value=1>Equipe n°1</label>
              <label><input type="radio" name="equipePlayer4" value=2>Equipe n°2</label>
            </fieldset>
            <fieldset>
              <label><input type="radio" name="attdefplayer4" value=1>Attaque</label>
              <label><input type="radio" name="attdefplayer4" value=2>Défense</label>
            </fieldset>
          </div>
        </div>
        <div class="add-player-react" id="addPlayerButton"><span onClick="displayAddPlayer()">Ajouter un joueur +</span></div>
        <div class="div-end-match">
          <label for="end-match">Fin de match</label>
          <select name="end-match" id="butOrTime" onchange="displayTimeChoice()">
            <option value="but">Nombre de buts</option>
            <option value="time">Temps</option>
          </select>
          <select class="sm-select" name="buts" id="chooseButs" style="display:block">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
          </select>
          <select class="sm-select" name="temps" id="chooseTime" style="display:none">
            <option value="00:05:00">5</option>
            <option value="00:06:00">6</option>
            <option value="00:07:00">7</option>
            <option value="00:08:00">8</option>
            <option value="00:09:00">9</option>
            <option value="00:10:00">10</option>
            <option value="00:11:00">11</option>
            <option value="00:12:00">12</option>
            <option value="00:13:00">13</option>
            <option value="00:14:00">14</option>
            <option value="00:15:00">15</option>
            <option value="00:16:00">16</option>
            <option value="00:17:00">17</option>
            <option value="00:18:00">18</option>
            <option value="00:19:00">19</option>
            <option value="00:20:00">20</option>
          </select>
        </div>
        <div class="div-end-match">
          <label>Mode de jeu</label>
          <select name="isRumble" id="isRumble" onchange="displayRumbleTime()">
            <option value="0" selected>Normal</option>
            <option value="1">Rumble</option>
          </select>

        </div>

        <div id="rumbleTime" style="display:none">
          <label>Temps entre malus</label>
          <select class="sm-select2" name="tempsRumble">
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
        <!-- <div><button class="btn-match" type="submit">Lancer la partie</button></div> -->

        <div><button class="btn-match" type="submit"> <a href="./score.php?idQuickGame=<?php echo json_encode($newIdQuickGame) ?>">Lancer la partie</a></button></div>


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

    function displayTimeChoice() {
      var x = document.getElementById("chooseButs");
      var y = document.getElementById("chooseTime");
      if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
      } else {
        x.style.display = "none";
        y.style.display = "block";
      }
    }

    function displayRumbleTime() {
      var x = document.getElementById("rumbleTime");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
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