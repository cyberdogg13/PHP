<?php

function celsciusnaarfarhenhijd ($a){
    $b = $a * 1.8 +32;
    return $b;
}

function kandelendoor3($c){
    $c = $c / 3;
    if (fmod($c,1) !== 0.0) {
        return false;
    } else {
        return true;
    }
}
function andersomtaal($string){
$string = strrev($string);
return $string;
}
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
echo celsciusnaarfarhenhijd(25);
echo "<br>";
echo kandelendoor3(12) ? 'true' : 'false';
echo "<br>";
echo andersomtaal("Pannenkoeken");

?>
</body>
</html>
