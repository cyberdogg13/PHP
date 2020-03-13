<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "admin"){
    echo "<h1>welkom ".$_SESSION["user"]["naam"] . " de " . $_SESSION["user"]["rol"]. " op deze website</h1>";
} else{
  Header('location:loginformulier.php');
}
echo "<p><a href='loginformulier.php'>terug naar de loginpagina</a></p>";
?>