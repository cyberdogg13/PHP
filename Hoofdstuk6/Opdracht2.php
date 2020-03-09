<?php
$host = "localhost";
$port = "3308";
$user = "root";
$pass = "";
$db = "school";
$dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);
$correct = false;
$j = 0;
$k = 0;
try {
    foreach ($dbh->query('SELECT email from loginformulier') as $email) {
        $EMails[$j] = $email["email"];
        $j++;
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

try {
    foreach ($dbh->query('SELECT wachtwoord from loginformulier') as $wachtwoord) {
        $wachtwoorden[$k] = $wachtwoord["wachtwoord"];
        $k++;
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}



//$EMails[0] = "piet@worldonline.nl";
//$EMails[1] = "klaas@carpets.nl";
//$EMails[2] = "truushendriks@wegweg.nl";
//$wachtwoorden[0] = "doetje123";
//$wachtwoorden[1] = "snoepje777";
//$wachtwoorden[2] = "arkiearkie201";


echo $_POST["E-Mail"] . " = ingevult e-mail";
echo "<br>";
echo $_POST["Wachtwoord"] . " = ingevult wachtwoord";
echo "<br>";
print_r($wachtwoorden);
echo " = geregistreede wachtwoorden";
echo "<br>";
print_r($EMails);
echo " = geregistreede e-mail adressen";
echo "<br>";

for ($i = 0; $i < count($EMails);$i++){
    if ($_POST["E-Mail"] == $EMails[$i] && $_POST["Wachtwoord"] == $wachtwoorden[$i]){
        echo "welkom";
        $correct = true;
        return true;
    }
}
if ($correct == false){
    echo "Sorry, geen toegang!";
    return false;
}
?>