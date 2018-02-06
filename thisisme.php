<?php
$Voornaam = "Jiri";
$Achternaam = "Grootte Bromhaar";
$naam = $Voornaam . " " . $Achternaam;
$Adres = "Coba Kellingstraat";
$Huisnummer = "22";
$Plaats = "Hengelo";
$adres = $Adres . " " . $Huisnummer . " " . $Plaats;
$Leeftijd = "23";

echo '<img src="fetchlogo.png" alt="logo" width="100" />';
echo "<h1>Naam: $naam</h1>
<h2>Adres: $adres</h2>
<h3>Leeftijd: $Leeftijd</h3>"
?>