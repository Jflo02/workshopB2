<?php
//script pour la team 1 (rouge)
include('../connexion.php');
?>
<?php

$idButeur = 0;
$sql = 'SELECT * FROM QuickGameStats where idQuickGame =' . $_GET['idQuickGame'] . '';
$resultat = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($resultat)) {

    $teamButs = $row['butTeam1'];
    echo $teamButs;
    echo '<br>';
    echo $_GET['scoreDisplayed'];
    if ($teamButs != $_GET['scoreDisplayed']) {
        //on cherche l'id du player attaquant
        $chrono = $_GET['chrono'];
        $sql = 'SELECT * FROM QuickTeam where idQuickGame =' . $_GET['idQuickGame'] . ' and isAttack=' . 1 . ' and teamNumber=' . 1 . '';
        $resultat = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_assoc($resultat);
        $idButeur = $row2['idPlayer'];
        $sql = 'INSERT INTO but (markedBy, timeMarked, idQuickGame) VALUES (' . $idButeur . ',"' . $chrono . ':00", ' . $_GET['idQuickGame'] . ')';
        $resultat = mysqli_query($conn, $sql);
        echo $_GET['scoreDisplayed'];



        $sql = 'SELECT * FROM Player where idPlayer =' . $idButeur . '';
        $resultat = mysqli_query($conn, $sql);
        $row3 = mysqli_fetch_assoc($resultat);

        // $idButeur = $row2['idPlayer'];

        //insert into But (idBut, markedBy(select attaquant from quickTeam where idQuickMatch=), timeMarked(arguments depuis ajax), idQuickGame) 
        //value (NULL, '2', '00:01:51', '56');
    }
}

if (isset($row3['firstName'])) {

    echo ('But pour les rouges (' . $row3['firstName'] . ') ' . $chrono . ' à 30 km/h');
};

// echo ($teamButs1);
// echo BUT pour l'équipe Rouge (Florimond), à 30 km/h (4:46)


?>