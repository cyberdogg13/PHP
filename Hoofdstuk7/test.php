<?php
session_start();

$users = array(
    "janjaap" => "1234",
    "bert" => "1235",
    "jans" => "1236",
);


if (isset($_POST["knop"]) && (isset($_POST['wachtwoord']) && !empty($_POST['wachtwoord']))
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]] == $_POST["wachtwoord"]) {
    $_SESSION["user"] = $_POST["login"];
    $bericht = "welkom" . $_SESSION["user"];
} else {
    $bericht = "login";
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
    <a href="admin.php">de website</a>
    <br>
    <a href="test.php?loguit">uitloggen</a>
</form>
</body>
</html>
