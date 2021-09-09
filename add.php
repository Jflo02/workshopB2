<?php
include('../connexion.php');

$idbut=196;
for ($id = 1; $id <= 8; $id++){
    $randtir = rand(2, 10);
    for ($i = 1; $i <= $randtir; $i++){

        $randvitesse=rand(100, 2000)/1000;
        $randx = rand(150, 550);
        $randy = rand(25, 375);
        $randx = strval($randx);
        $randy = strval($randy);
        $randpos = $randx . ", " . $randy;
        $sql = 'Insert into but_from_python values ('.$idbut .',"' . $randvitesse.'", "'. $randpos .'")';
        $resultat = mysqli_query($conn, $sql);
        $sql2 = 'Insert into but values ('. $idbut .', '. $id .', "00:00:00", "2", "'. $randvitesse .'", "'. $randpos .'")';
        $resultat = mysqli_query($conn, $sql2);
        $idbut = $idbut + 1;
        echo "C EST DE LA TRICHE !!! <br>";
    }
}
?>