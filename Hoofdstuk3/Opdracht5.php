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
$leeftijd = 2;
$prijs = 10;

if ($leeftijd > 65){
    $prijs = $prijs * 0.5;
}


if ($leeftijd <= 12){
    $prijs = $prijs * 0.5;
}


if ($leeftijd <= 2){
    $prijs = 0;
}
echo $prijs;
?>

</body>
</html>