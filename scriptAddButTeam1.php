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
    if ($teamButs != $_GET['scoreDisplayed']) {
        //on cherche l'id du player attaquant
        $chrono = $_GET['chrono'];
        $sql = 'SELECT * FROM QuickTeam where idQuickGame =' . $_GET['idQuickGame'] . ' and isAttack=' . 1 . ' and teamNumber=' . 1 . '';
        $resultat = mysqli_query($conn, $sql);
        $row2 = mysqli_fetch_assoc($resultat);
        $idButeur = $row2['idPlayer'];
        //select le max ID des buts python + vitesse + position et envoyer la grosse requete
        $sql = 'SELECT * FROM but_from_python where idQuickGame =' . $_GET['idQuickGame'] . ' and isAttack=' . 1 . ' and teamNumber=' . 1 . '';
        $resultat = mysqli_query($conn, $sql);
        $sql = 'SELECT * FROM but_from_python WHERE id=(SELECT max(id) from but_from_python)';
        $resultat = mysqli_query($conn, $sql);
        $butFromPython = mysqli_fetch_assoc($resultat);
        $sql = 'INSERT INTO but (idBut, markedBy, timeMarked, idQuickGame, vitesse, position) VALUES ('  . $butFromPython['id'] . ',' . $idButeur . ',"' . $chrono . '", ' . $_GET['idQuickGame'] . ',' . $butFromPython['vitesse'] . ',"' . $butFromPython['position'] . '")';
        print_r($sql);
        $resultat = mysqli_query($conn, $sql);



        $sql = 'SELECT * FROM Player where idPlayer =' . $idButeur . '';
        $resultat = mysqli_query($conn, $sql);
        $row3 = mysqli_fetch_assoc($resultat);

        // $idButeur = $row2['idPlayer'];

        //insert into But (idBut, markedBy(select attaquant from quickTeam where idQuickMatch=), timeMarked(arguments depuis ajax), idQuickGame) 
        //value (NULL, '2', '00:01:51', '56');
    }
}


// echo ($teamButs1);
// echo BUT pour l'équipe Rouge (Florimond), à 30 km/h (4:46)


?>