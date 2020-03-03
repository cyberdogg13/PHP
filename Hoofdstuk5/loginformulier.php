<?php

$EMails[0] = "piet@worldonline.nl";
$EMails[1] = "klaas@carpets.nl";
$EMails[2] = "truushendriks@wegweg.nl";
$wachtwoorden[0] = "doetje123";
$wachtwoorden[1] = "snoepje777";
$wachtwoorden[2] = "arkiearkie201";


echo $_POST["E-Mail"] ;
echo "<br>";
echo $_POST["Wachtwoord"];
echo "<br>";

if ($_POST["E- Mail"] == "piet@worldonline.nl" && $_POST["Wachtwoord"] == "doetje123"){
    echo "welkom";
}
else echo "niet welkom:" . $_POST["E-Mail"];

?>