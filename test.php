<?php

$idbut = 1;
$id = 1;
$randvitesse=rand(100, 2000)/1000;
        $randx = rand(150, 550);
        $randy = rand(25, 375);
        $randx = strval($randx);
        $randy = strval($randy);
        $randpos = $randx . ", " . $randy;
$sql = 'Insert into but_from_python values ('.$idbut .',"' . $randvitesse.'", "'. $randpos .'")';
$sql2 = 'Insert into but values ('. $idbut .', '. $id .', "00:00:00", "2", "'. $randvitesse .'", "'. $randpos .'")';

echo $sql;
echo "<br><br>";
echo $sql2;
?>