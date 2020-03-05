<?php
$host = "localhost";
$port = "3308";
$user = "root";
$pass = "";
$db = "school";

try {
    $dbh = new PDO('mysql:host=localhost;port=3308;dbname=school', $user, $pass);
    foreach($dbh->query("SELECT * from cursus") as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>