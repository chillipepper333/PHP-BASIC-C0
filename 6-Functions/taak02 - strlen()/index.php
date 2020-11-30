<!DOCTYPE html>
<html>
<body>
<?php

function mijnNaamIsGroot(){
    $voornaam = "Wouter";
    $achternaam = "Baas";
    $geheleNaam = "Hallo Mijn naam is $voornaam $achternaam";
    echo strtoupper ($geheleNaam);
}

mijnNaamIsGroot();



?>
</body>
</html> 