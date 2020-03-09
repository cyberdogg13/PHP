<?php
$host = "localhost";
$port = "3308";
$user = "root";
$pass = "";
$db = "school";
$dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);
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
<h1>Cursisten tabel</h1>
<div id="wrapper">
    <div id="cusistnummer">
        <h3>cursistnummer</h3>
        <?php
        echo "<ul>";
        try {
            foreach ($dbh->query('SELECT cursistnr from cursist') as $cursistnr) {
                echo "<li>" . $cursistnr["cursistnr"] . "</li>";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        echo "</ul>";
        ?>
    </div>
    <div id="naam">
        <h3>Naam</h3>
        <?php
        echo "<ul>";
        try {
            foreach ($dbh->query('SELECT naam from cursist') as $naam) {
                echo "<li>" . $naam["naam"] . "</li>";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        echo "</ul>";
        ?>
    </div>
    <div id="roepnaam">
        <h3>Roepnaam</h3>
        <?php
        echo "<ul>";
        try {
            foreach ($dbh->query('SELECT roepnaam from cursist') as $roepnaam) {
                echo "<li>" . $roepnaam["roepnaam"] . "</li>";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        echo "</ul>";
        ?>
    </div>
    <div id="straat">
        <h3>Straat</h3>
        <?php
        echo "<ul>";
        try {
            foreach ($dbh->query('SELECT straat from cursist') as $straat) {
                echo "<li>" . $straat["straat"] . "</li>";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        echo "</ul>";
        ?>
    </div>
    <div id="postcode">
        <h3>Postcode</h3>
        <?php
        echo "<ul>";
        try {
            foreach ($dbh->query('SELECT postcode from cursist') as $postcode) {
                echo "<li>" . $postcode["postcode"] . "</li>";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        echo "</ul>";
        ?>
    </div>
    <div id="plaats">
        <h3>Plaats</h3>
        <?php
        echo "<ul>";
        try {
            foreach ($dbh->query('SELECT plaats from cursist') as $plaats) {
                echo "<li>" . $plaats["plaats"] . "</li>";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        echo "</ul>";
        ?>
    </div>
    <div id="geslacht">
        <h3>Geslacht</h3>
        <?php
        echo "<ul>";
        try {
            foreach ($dbh->query('SELECT geslacht from cursist') as $geslacht) {
                echo "<li>" . $geslacht["geslacht"] . "</li>";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        echo "</ul>";
        ?>
    </div>
    <div id="geboortedatum">
        <h3>Geboortedatum</h3>
        <?php
        echo "<ul>";
        try {
            foreach ($dbh->query('SELECT geb_datum from cursist') as $geboortedatum) {
                echo "<li>" . $geboortedatum["geb_datum"] . "</li>";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        echo "</ul>";
        ?>
    </div>
</div>
</body>
<style>
    h1{
        text-align: center;
        float: top;
    }
    #wrapper{
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(170px, 1fr) ) ;
    }
    #wrapper > div{
        padding: 5px;
        text-align: left;
        border: 1px solid black;
        margin:0 -1px -1px 0;
    }
    ul {
        list-style: none;
    }
    li{
        padding: 10px;
        border-bottom: solid black 1px;
        border-top: solid black 1px;
    }
</style>
</html>