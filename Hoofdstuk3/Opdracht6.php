<?php
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
$arry ["De Spartelkuikens"] = 25;
$arry ["De Waterbuffels"] = 32;
$arry ["Plonsmderin"] = 11;
$arry ["Bommetje"] = 23;

echo "<table cellspacing='0px' cellpadding='10'>";
foreach ($arry as $zwemclub) {
    echo "<tr>";
    echo "<td>" . key($arry) . "</td>";
    echo "<td>$zwemclub</td>";
    $aantal = floor($zwemclub / 5);
    echo "<td class='plaatjes'>";
    for ($i = 0; $i < $aantal; $i++) {
        ?>
        <img src="plaatjes/Sign_-_Navigation_60-512.png" alt="">
        <?php
    }
    echo "</td>";
    echo "</tr>";
    next($arry);
}
echo "</table>";


echo key($arry);
?>
<style>
    td, tr {
        border: 1px solid black;
    }

    img {
        width: 50px;
        height: 50px;
    }

    .plaatjes {
        border: none;
    }
</style>
</body>
</html>
