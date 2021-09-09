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
       <a href="./leaderboard.php">
         <i class='bx bxs-news' ></i>
         <span class="links_name">Classement</span>
       </a>
       <span class="tooltip">Classement</span>
     </li>
    </ul>
  </div>
  </div>




  <section class="home-section">

    <h1>Tounois</h1>

    <div class="fmatch-form  ">
      <form class="form-fm" action="./quickGame.php" method="get">

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
          <label>Teams</label>
          <select name="" id="" onchange="">
            <option value="" selected>Normal</option>
            <option value="">Aléatoire</option>
          </select>
        </div>

        <div class="div-end-match">
          <label>Solo ou Duo</label>
          <select name="" id="" onchange="">
            <option value="" selected>SOLO</option>
            <option value="">DUO</option>
          </select>
        </div>



        <div class="Team">
        <div class="player ">
          <div class="from">
            <h3>TEAM 1</h3>
          <div class="from">
            <label for="name">Nom de Team</label>
            <input type="text" id="tags" name="name_team1" placeholder="Nom de Team">
          </div>
            <label for="name">Ajouter le joueur n°1 :</label>
            <input type="text" id="tags" name="user_name1" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer1" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer1" value=2>Défense</label>
          </fieldset>
        </div>
        <div class="player ">
          <div class="from">
            <label for="name">Ajouter le joueur n°2 :</label>
            <input type="text" id="tags" name="user_name2" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer2" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer2" value=2>Défense</label>
          </fieldset>
        </div>
        </div>

        <div class="Team">
        <div class="player ">
          <div class="from">
            <h3>TEAM 2</h3>
            
            <div class="from">
            <label for="name">Nom de Team</label>
            <input type="text" id="tags" name="name_team2" placeholder="Nom de Team">
            </div>

            <label for="name">Ajouter le joueur n°1 :</label>
            <input type="text" id="tags" name="user_name3" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer3" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer3" value=2>Défense</label>
          </fieldset>
        </div>
        <div class="player ">
          <div class="from">
            <label for="name">Ajouter le joueur n°2 :</label>
            <input type="text" id="tags" name="user_name4" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer4" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer4" value=2>Défense</label>
          </fieldset>
        </div>
        </div>

        <div class="Team">
        <div class="player ">
          <div class="from">
            <h3>TEAM 3</h3>
            <div class="from">
            <label for="name">Nom de Team</label>
            <input type="text" id="tags" name="name_team3" placeholder="Nom de Team">
          </div>
            <label for="name">Ajouter le joueur n°1 :</label>
            <input type="text" id="tags" name="user_name5" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer5" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer5" value=2>Défense</label>
          </fieldset>
        </div>
        <div class="player ">
          <div class="from">
            <label for="name">Ajouter le joueur n°2 :</label>
            <input type="text" id="tags" name="user_name6" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer6" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer6" value=2>Défense</label>
          </fieldset>
        </div>
        </div>

        <div class="Team">
        <div class="player ">
          <div class="from">
            <h3>TEAM 4</h3>
            <div class="from">
            <label for="name">Nom de Team</label>
            <input type="text" id="tags" name="name_team4" placeholder="Nom de Team">
          </div>

            <label for="name">Ajouter le joueur n°1 :</label>
            <input type="text" id="tags" name="user_name7" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer7" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer7" value=2>Défense</label>
          </fieldset>
        </div>
        <div class="player ">
          <div class="from">
            <label for="name">Ajouter le joueur n°2 :</label>
            <input type="text" id="tags" name="user_name8" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer8" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer8" value=2>Défense</label>
          </fieldset>
        </div>
        </div>

        <div class="Team">
        <div class="player ">
          <div class="from">
            <h3>TEAM 5</h3>
            <div class="from">
            <label for="name">Nom de Team</label>
            <input type="text" id="tags" name="name_team5" placeholder="Nom de Team">
          </div>
            <label for="name">Ajouter le joueur n°1 :</label>
            <input type="text" id="tags" name="user_name9" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer9" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer9" value=2>Défense</label>
          </fieldset>
        </div>
        <div class="player ">
          <div class="from">
            <label for="name">Ajouter le joueur n°2 :</label>
            <input type="text" id="tags" name="user_name10" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer10" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer10" value=2>Défense</label>
          </fieldset>
        </div>
        </div>

        <div class="Team">
        <div class="player ">
          <div class="from">
            <h3>TEAM 6</h3>
            <div class="from">
            <label for="name">Nom de Team</label>
            <input type="text" id="tags" name="name_team6" placeholder="Nom de Team">
          </div>
            <label for="name">Ajouter le joueur n°1 :</label>
            <input type="text" id="tags" name="user_name11" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer11" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer11" value=2>Défense</label>
          </fieldset>
        </div>
        <div class="player ">
          <div class="from">
            <label for="name">Ajouter le joueur n°2 :</label>
            <input type="text" id="tags" name="user_name12" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="attdefplayer12" value=1>Attaque</label>
            <label><input type="radio" name="attdefplayer12" value=2>Défense</label>
          </fieldset>
        </div>
        </div>

        <div class="add-player-react" id="addPlayerButton"><span onClick="">Ajouter une Team +</span></div>

        <input type="hidden" name="c" value="create">
        <div><input class="btn-match" type="submit" value="Lancer le Tournois"></div>


      </form>

    </div>

  </section>

    <script>
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
