<?php
session_start();

$users = array(
    "tim" => array("wachtwoord" => "pop", "rol" => "admin"),
    "janjaap" => array("wachtwoord" => "1234", "rol" => "admin"),
    "bert" => array("wachtwoord" => "1235", "rol" => "gebruiker"),
    "jans" => array("wachtwoord" => "1236", "rol" => "gerbruiker"),
);
if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST["knop"])
    && (isset($_POST['wachtwoord']) && !empty($_POST['wachtwoord']))
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]]["wachtwoord"] == $_POST["wachtwoord"]) {
    $_SESSION["user"] = array(
        "naam" => $_POST["login"],
        "wachtwoord" => $users[$_POST["login"]]["wachtwoord"],
        "rol" => $users[$_POST["login"]]["rol"]);
//    $bericht = "welkom " . $_SESSION["user"]["naam"]. " de " . $_SESSION["user"]["rol"];
} else {
    $bericht = "eerst inloggen";
}

if (isset($_SESSION["user"]["naam"])) {
    $bericht = "welkom " . $_SESSION["user"]["naam"] . " de " . $_SESSION["user"]["rol"];
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
<h2><?php echo $bericht; ?></h2>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    Login <input type="text" name="login" value="">
    Wachtwoord <input type="password" name="wachtwoord" value="">
    <input type=submit name="knop" value=verstuur>
    <br>
    <P><a href="admin.php">de website<br> (Alleen voor admins!)</a></p>
    <br>
    <a href="loginformulier.php?loguit">uitloggen</a>
</form>
</body>
</html>
