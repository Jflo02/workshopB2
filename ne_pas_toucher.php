<?php
include('../connexion.php');
?>

<?php
$personnes = array();
$sql = 'SELECT * FROM player ';
$resultat = mysqli_query($conn, $sql);
//on fait un tableau avec les noms dans la bdd
if (mysqli_num_rows($resultat) == 0) {
    echo "Ajouter des noms dans la base de données";
} else {
    echo 'hello';
    while ($row = mysqli_fetch_assoc($resultat)) {
        array_push($personnes, $row['firstName'] . " " . $row['lastName']);
    }
};
?>
<link rel="stylesheet" href="./javascript//autocomplete-0.3.0/autocomplete-0.3.0.css">
<div id="search_bar"></div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- <script src="./javascript/autocomplete-0.3.0/autocomplete-0.3.0.js"></script> -->
<!-- <script>
    //autocomplete avec les noms de l'epsi
    var widget = new AutoComplete('search_bar', <?php echo json_encode($personnes) ?>);
</script> -->

<form name="form1" method="post" action="searchresults.php">
    <input id="hero-demo" autofocus type="search" name="search" placeholder="City">
    <input type="submit" name="submit" value="Search">
</form>

<script>
    $(function() {
        var availableTags = <?php echo json_encode($personnes) ?>;
        $("#tags").autocomplete({
            source: availableTags
        });
    });
</script>

<div class="ui-widget">
    <label for="tags">Tags: </label>
    <input id="tags">
</div>