<?php
session_start();

if (isset($_SESSION["user"])){
    echo "<h1>welkom ".$_SESSION["user"] ." op deze website</h1>";
} else{
  Header('location:loginformulier.php');
}
echo "<p><a href='loginformulier.php'>terug naar de loginpagina</a></p>";
?>