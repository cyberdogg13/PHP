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
$arry [1] = 25;
$arry [2] = 32;
$arry [3] = 11;
$arry [4] = 23;
$arry [5] = "De Spartelkuikens";
$arry [6] = "De Waterbuffels";
$arry [7] = "Plonsmderin";
$arry [8] = "Bommetje";

echo "<table>";
echo "<tr>";
echo "<td>" . $arry[5] . "</td>";
echo "<td>" . $arry[1] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $arry[6] . "</td>";
echo "<td>" . $arry[2] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $arry[7] . "</td>";
echo "<td>" . $arry[3] . "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $arry[8] . "</td>";
echo "<td>" . $arry[4] . "</td>";
echo "<img src='plaatjes\Sign_-_Navigation_60-512.png'>";
echo "</tr>";
echo "</table>";

?>
<style>
    table, td, tr {
        border: 1px solid black;
    }
</style>
</body>
</html>
