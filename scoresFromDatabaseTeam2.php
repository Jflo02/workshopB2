<?php
include('../connexion.php');
?>
<?php
$sql = 'SELECT * FROM QuickGameStats where idQuickGame =' . $_GET['idQuickGame'] . '';
$resultat = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($resultat)) {
    $teamButs = $row['butTeam2'];
}
echo ($teamButs);


?>
