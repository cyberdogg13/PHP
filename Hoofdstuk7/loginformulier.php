<?php
session_start();


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
try {
    foreach ($dbh->query('SELECT email from admins') as $adminemail) {
        $adminEMails[$j] = $adminemail["email"];
        $j++;
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

try {
    foreach ($dbh->query('SELECT wachtwoord from admins') as $adminwachtwoord) {
        $adminwachtwoorden[$k] = $adminwachtwoord["wachtwoord"];
        $k++;
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if (isset($_GET["loguit"])){
    $_SESSION =array();
    session_destroy();
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
<h1>login formulier</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    E-Mail <input type= "email" name="E-Mail" value= "">
    Wachtwoord <input type= "password" name="Wachtwoord" value= "">
    <input type= submit name="knop" value= verstuur >
    <br>
    <a href="admin.php">de website</a>
    <br>
    <a href="loginformulier.php?loguit">uitloggen</a>
</form>
</body>
</html>

<?php
if (isset($_POST["E-Mail"])) {
    echo "<h1>welkom " . $_POST["E-Mail"] . " op deze website</h1>";
}
?>