<?php 
$voornaam = array("Bilal"=>"Bilal" , "Muhammad"=>"Muhammad" , "Piet"=>"Piet");
$achternaam = array("Bilal"=>"K" , "Muhammad"=>"Onbekend" , "Piet"=>"Onbekend");
$Leeftijd = array("Bilal"=>"17" , "Muhammad"=>"16" , "Piet"=>"16");
$klas = array("Bilal"=>"9C" , "Muhammad"=>"Onbekend" , "Piet"=>"Onbekend");
echo "Gegevens Bilal:" . "<br>" . "Voornaam:" . $voornaam['Bilal'] . "<br>"
. "Achternaam:" . $achternaam['Bilal'] . "<br>" . "Leeftijd:" . $Leeftijd['Bilal']
. "<br>" . "Klas:" . $klas['Bilal'];
?>