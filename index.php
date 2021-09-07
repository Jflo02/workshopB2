<?php
include('../connexion.php');
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
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index.html">
          <i class='bx bx-home'></i>

          <span class="links_name">Accueil</span>
        </a>
         <span class="tooltip">Accueil</span>
      </li>
      <li>
       <a href="fmatch.html">
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

<div class="container">
    <a href="#"><div class="home-but">
        <h2>Match Rapide</h2>
        <img src="https://resize.programme-television.ladmedia.fr/r/670,670/img/var/premiere/storage/images/tele-7-jours/news-tv/clermont-foot-auxerre-ligue-2-sur-quelle-chaine-et-a-quelle-heure-match-du-samedi-23-janvier-2021-4668366/99371060-1-fre-FR/Clermont-Foot-Auxerre-Ligue-2-sur-quelle-chaine-et-a-quelle-heure-match-du-samedi-23-janvier-2021.jpg" alt="#">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsum nostrum iste magni eveniet, sequi accusantium veritatis ducimus impedit vitae voluptates! Quia eum sit exercitationem voluptatibus aliquid, perferendis provident ipsa?</p>
    </div></a>
    <a href="#"><div class="home-but">
        <h2>Tournois</h2>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMwRsjvSbIbhgZPqSs12LbLxQIx76E3nkf5Q&usqp=CAU" alt="#">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsum nostrum iste magni eveniet, sequi accusantium veritatis ducimus impedit vitae voluptates! Quia eum sit exercitationem voluptatibus aliquid, perferendis provident ipsa?</p>
    </div></a>
</div>
</div>

<hr class="blue-line">
<div class="container2">
<a href="#"><div class="home-stream">
    <h2>Streaming</h2>
    <img src="https://dkofva0t6jnyn.cloudfront.net/sites/default/files/styles/amp_blog_image_large/public/consumer/blog/csm-blog/twitch-logo-1138x658.jpg" alt="#">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsum nostrum iste magni eveniet, sequi accusantium veritatis ducimus impedit vitae voluptates! Quia eum sit exercitationem voluptatibus aliquid, perferendis provident ipsa?</p>
</div></a>
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


