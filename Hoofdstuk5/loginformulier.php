<?php
$correct = false;
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

for ($i = 0; $i < count($EMails);$i++){
    if ($_POST["E-Mail"] == $EMails[$i] && $_POST["Wachtwoord"] == $wachtwoorden[$i]){
        echo "welkom";
        $correct = true;
        return true;
    }
}
if ($correct == false){
    echo "Geen toegang";
    return false;
}


?>