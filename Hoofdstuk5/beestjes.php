<?php
//print_r($_POST["Vogelbekdieren"]);

foreach ($_POST["Vogelbekdieren"] as $vogelbekdier){
    echo "<img src='../Hoofdstuk3/plaatjes/" . $vogelbekdier . ".jpg'>";}
?>