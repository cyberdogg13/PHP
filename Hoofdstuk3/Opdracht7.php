<?php
$kappersagenda ["9:15"] = "Merv.pietersen";
$kappersagenda ["9:30"] = "Merv.willems";
$kappersagenda ["9:45"] = "";
$kappersagenda ["10:00"] = "paul van den broek";
$kappersagenda ["10:15"] = "karel de meeuw";
$kappersagenda ["10:30"] = "";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "De volgende momenten zijn nog beschikbaar:<ul>";
foreach ($kappersagenda as $tijd => $afspraak){
    if ($afspraak == ""){
        echo "<li>" . $tijd . "</li>";
    }
}
echo "</ul>";
?>


</body>
</html>
