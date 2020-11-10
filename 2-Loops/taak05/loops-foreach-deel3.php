<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
$student = array("voornaam"=>"Bilal","achternaam"=>"Kiloul","klas"=>"9C","Leeftijd"=>17,"Woonplaats"=>"Amsterdam");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="width:100%">
  <tr>
<?php
foreach($student as $value => $waarde){
    echo "<th>".$value. "</th>";
}

?>
  </tr>
  <tr>
  <?php
foreach($student as $value => $waarde){
    echo "<th>".$waarde. "</th>";
}

?>
  </tr>

</table>

</body>
</html>
