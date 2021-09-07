<?php
include('../connexion.php');
?>

<?php
$personnes = array();
$sql = 'SELECT * FROM player ';
$resultat = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultat) == 0) {
    echo "Ajouter des noms dans la base de données";
} else {
    echo 'hello';
    while ($row = mysqli_fetch_assoc($resultat)) {
        echo "<p>" . $row['firstName'] . "</p>";
        array_push($personnes, $row['firstName'] . " " . $row['lastName']);
    }
   
};
?>
<link rel="stylesheet" href="./javascript//autocomplete-0.3.0/autocomplete-0.3.0.css">
<div id="search_bar"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./javascript/autocomplete-0.3.0/autocomplete-0.3.0.js"></script>
<script>
    var passedArray = <?php echo json_encode($personnes) ?>;
    console.log(passedArray)
    var widget = new AutoComplete('search_bar', <?php echo json_encode($personnes) ?>);
    // var widget = new AutoComplete('search_bar', ['Apple', 'Banana', 'Orange']);
</script>

