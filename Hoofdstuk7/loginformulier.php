<?php
session_start();

$users = array(
    "janjaap" => array("wachtwoord" => "1234", "rol" => "admin"),
    "bert" => array("wachtwoord" => "1235", "rol" => "gebruiker"),
    "jans" => array("wachtwoord" => "123", "rol" => "admin")
);


if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
};

if (isset($_POST["knop"])
&& isset($users[$_POST["login"]])
&& $users[$_POST["login"]]["wachtwoord"] == $_POST["wachtwoord"]){
    $_SESSION["user"] = $_POST["login"];
    $bericht = "Welkom" . $_SESSION["user"];
} else{
    $bericht = "inloggen";
};
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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Login <input type="text" name="login" value="">
        Wachtwoord <input type="password" name="Wachtwoord" value="">
        <input type=submit name="knop" value=verstuur>
        <br>
        <a href="admin.php">de website</a>
        <br>
        <a href="loginformulier.php?loguit">uitloggen</a>
    </form>
    </body>
    </html>

<?php
//if (isset($_POST["E-Mail"])) {
//    echo "<h1>welkom " . $_POST["E-Mail"] . " op deze website</h1>";
//}
?>