<?php
$host = "localhost";
$port = "3308";
$user = "root";
$pass = "";
$db = "school";
$i = 0;
try {
    $dbh = new PDO('mysql:host=localhost;port='.$port.';dbname=school', $user, $pass);
    foreach($dbh->query("SELECT curs_code from cursus") as $row) {
        foreach ($row as $ding){
   $curscode[$i] = $ding;
      $resultaat = array_unique($curscode, SORT_LOCALE_STRING);
   print_r($resultaat);
   echo "<br>";
            $i++;
        }
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>