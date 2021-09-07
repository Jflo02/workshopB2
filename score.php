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
       <a href="#">
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
       <a href="#">
         <i class='bx bxs-news' ></i>
         <span class="links_name">Classement</span>
       </a>
       <span class="tooltip">Classement</span>
     </li>
    </ul>
  </div>



<section class="home-section">

<h1>Score</h1>
<div class="container3">
    <div class="container-score">
        <h2 class="E-Rouge">1</h2> <!-- Equipe bleu ou rouge -->
        <h2>-</h2>
        <h2 class="E-Bleu">0</h2> <!-- Equipe bleu ou rouge -->
    </div>
<div>   
<div class="container4">
    <div class="container-mins">
        <h3> 5 : 58 </h3>
            <hr class="sm-blue-line">
            <div class="histo-qmatch">
                <p>But pour les rouges 1-0 (5 : 20) à 30 km/h</p>
            </div> 
    </div>

</div>

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


