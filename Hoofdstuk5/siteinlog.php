<?php
if($_POST["Voornaam"] == ""){
    echo "Er moet nog een Voornaam worden ingevult!";
    echo "<a href = 'websiteinlog.html'> terug naar het Hoofdformunlier</a>";
    echo "<br>";
};
if($_POST["Adres"] == ""){
    echo "Er moet nog een Adres worden ingevult!";
    echo "<a href = 'websiteinlog.html'> terug naar het Hoofdformunlier</a>";
    echo "<br>";

};
if($_POST["E-mail"] == ""){
    echo "Er moet nog een E-mail worden ingevult!";
    echo "<a href = 'websiteinlog.html'> terug naar het Hoofdformunlier</a>";
    echo "<br>";

};
if($_POST["Wachtwoord"] == ""){
    echo "Er moet nog een Wachtwoord worden ingevult!";
    echo "<a href = 'websiteinlog.html'> terug naar het Hoofdformunlier</a>";
    echo "<br>";
};

print_r($_POST);
?>