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
        <a href="#">
          <i class='bx bx-home'></i>

          <span class="links_name">Accueil</span>
        </a>
         <span class="tooltip">Accueil</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-football' ></i>
         <span class="links_name">Match rapide</span>
       </a>
       <span class="tooltip">Match rapide</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-trophy' ></i>
         <span class="links_name">Tournois</span>
       </a>
       <span class="tooltip">Tournois</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bxs-news' ></i>
         <span class="links_name">Classement</span>
       </a>
       <span class="tooltip">Classement</span>
     </li>
    </ul>
  </div>



  <section class="home-section">
    <h1>Match Rapide</h1>


      <div class="fmatch-form">
        <form class="form-fm" action="index.html" method="post">
        <div class="player">
          <div id="from">
            <label for="name">Ajouter le joueur n°1</label>
            <input type="text" id="name" name="user_name" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="radio">Equipe n°1</label>
            <label><input type="radio" name="radio">Equipe n°2</label>
          </fieldset>
        </div>
        <div class="player">
          <div id="from">
            <label for="name">Ajouter le joueur n°2</label>
            <input type="text" id="name" name="user_name" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="radio">Equipe n°1</label>
            <label><input type="radio" name="radio">Equipe n°2</label>
          </fieldset>
        </div>
        <div class="add-player">
        <div class="player">
          <div id="from">
            <label for="name">Ajouter le joueur n°3</label>
            <input type="text" id="name" name="user_name" placeholder="Nom Prenom">
          
          
        </div>
          <fieldset>
            <label><input type="radio" name="radio">Equipe n°1</label>
            <label><input type="radio" name="radio">Equipe n°2</label>
          </fieldset>
        </div>
        <div class="player">
          <div id="from">
            <label for="name">Ajouter le joueur n°4</label>
            <input type="text" id="name" name="user_name" placeholder="Nom Prenom">
          </div>
          <fieldset>
            <label><input type="radio" name="radio">Equipe n°1</label>
            <label><input type="radio" name="radio">Equipe n°2</label>
          </fieldset>
        </div>
        </div>
        <div class="add-player-react"><button>Ajouter un joueur +</button></div>
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

<div><button>Lancer la partie</button></div>

        </form>

      </div>

  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  searchBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });


  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   }
  }
  </script>
</body>
</html>
