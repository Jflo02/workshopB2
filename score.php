<?php
include('../connexion.php');
?>

<?php
$sql = 'SELECT * FROM QuickGameStats where idQuickGame =' . $_GET['idQuickGame'] . '';
$resultat = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($resultat)) {
  $gameStats = $row;
}



//on regarde si la partie est en fonction du temps
$sql = 'SELECT * FROM QuickGame where idQuickGame =' . $_GET['idQuickGame'] . '';
$resultat = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($resultat)) {
  $game = $row;
}

//si oui on met un décompte de temps

//si non on met un timer tout simple

?>

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
        <a href="./index.php">
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



  <section class="home-section">

    <h1>Score</h1>
    <div class="Rumble-timer">
      <h4>
        <!-- insérer un timer --> Florimond vs Matéo !
      </h4><!-- Gage-->
    </div>

    <div class="container3">

      <div class="container-score">
        <h2 class="E-Rouge" id="E-Rouge"></h2> <!-- Equipe bleu ou rouge -->
        <h2>-</h2>
        <h2 class="E-Bleu" id="E-Bleu"></h2> <!-- Equipe bleu ou rouge -->
      </div>
      <div>
        <div class="container4">
          <div class="container-mins">
            <h3 id="countDown"></h3> <!-- Timer ou Chrono selon mode de jeu-->
            <hr class="sm-blue-line">
            <div class="histo-qmatch" id="histo-qmatch">

            </div>
          </div>

        </div>

      </div>





  </section>

  <script>
    var min = 00;
    var sec = 00;
    <?php if ($game['DurationMaxUntilEnd'] == NULL) { ?>


      window.onload = function() {
        var myTime = <?php echo '"' . $game['DurationMaxUntilEnd'] . '"' ?>;
        var countDownFinish = false;

        setInterval(function() {
          var a = new Date();
          if (!countDownFinish) {
            document.getElementById("countDown").innerHTML = min + " : " + sec;
          }

          if (sec == 59) {
            min++;
            sec = -1;
          }
          sec++;
          if (countDownFinish) {
            document.getElementById("countDown").innerHTML = "Fin du match !";
          }
        }, 1000);
      }




    <?php  } else { ?>
      window.onload = function() {
        var myTime = <?php echo '"' . $game['DurationMaxUntilEnd'] . '"' ?>;
        var countDownFinish = false;
        min = myTime.split(":")[1];
        sec = myTime.split(":")[2];
        setInterval(function() {
          var a = new Date();
          if (!countDownFinish) {
            document.getElementById("countDown").innerHTML = min + " : " + sec;
          }

          if (sec == 00) {
            sec = 60;
            if (min == 0) {

              countDownFinish = true;
              console.log("j'ai fini le count");
              document.getElementById("countDown").innerHTML = "Fin du match !";

            } else {
              min--;
            }
          }
          sec--;
        }, 1000);
      }

      function resetTimer() {

      }
    <?php  } ?>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    //on regarde en bdd quand le score de la team 1 (rouge) augmente
    $(function() {
      var url_string = window.location.href;
      var url = new URL(url_string);

      function loadNum() {
        $('#E-Rouge').load('./scoresFromDatabaseTeam1.php?idQuickGame=' + url.searchParams.get("idQuickGame"));
        $('#histo-qmatch').load('./scriptAddButTeam1.php?idQuickGame=' + url.searchParams.get("idQuickGame") + '&chrono=00:' + min + ":" + sec + '&scoreDisplayed=' + document.getElementById("E-Rouge").innerHTML);
        setTimeout(loadNum, 2000); // makes it reload every 5 sec
      }
      loadNum(); // start the process...
    });
  </script>
  <script>
    //on regarde en bdd quand le score de la team 2 (bleue) augmente
    $(function() {
      var url_string = window.location.href;
      var url = new URL(url_string);

      function loadNum() {
        $('#E-Bleu').load('./scoresFromDatabaseTeam2.php?idQuickGame=' + url.searchParams.get("idQuickGame"));
        $('#histo-qmatch').load('./scriptAddButTeam2.php?idQuickGame=' + url.searchParams.get("idQuickGame") + '&chrono=00:' + min + ":" + sec + '&scoreDisplayed=' + document.getElementById("E-Bleu").innerHTML);
        setTimeout(loadNum, 2000); // makes it reload every 5 sec
      }
      loadNum(); // start the process...
    });
  </script>
</body>

</html>