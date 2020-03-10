<?php
session_start();

if (isset($_SESSION["E-Mail"])){
    echo "<h1>welkom ".$_SESSION["E-Mail"] ." op deze website</h1>";
} else{
  Header('location:loginformulier.php');
}
echo "<p><a href='loginformulier.php'>terug naar de loginpagina</a></p>";
?>