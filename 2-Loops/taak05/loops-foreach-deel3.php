<table>
<tr>
<th>Voornaam</th>
<th>Achternaam</th>
<th>Klas</th>
<th>Leeftijd</th>
<th>Woonplaats</th>
</tr>
<tr>
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
$student = array("voornaam"=>"Bilal","achternaam"=>"Kiloul","klas"=>"9C","Leeftijd"=>17,"Woonplaats"=>"Amsterdam");

foreach($student as $value){
echo "<td>" . $value . "</td>";
}
?>
</tr>
</table> 