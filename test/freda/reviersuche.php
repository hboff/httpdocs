<html>
<body>
<?php 
$username = "d03ab5c2"; 
$password = "asdf1234ASDF"; 
$database = "d03ab5c2"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
//Hier wird das Gebiet eingegrenzt
$query = "SELECT * FROM villes_france WHERE ville_latitude_deg BETWEEN 45 AND 46 AND ville_longitude_deg BETWEEN 4 AND 5 ORDER BY ville_population_2012 DESC";

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">stadt_umlaute</font> </td> 
          <td> <font face="Arial">stadt_lang</font> </td> 
          <td> <font face="Arial">stadt</font> </td> 
          <td> <font face="Arial">einwohner</font> </td> 
          <td> <font face="Arial">laenge</font> </td> 
          <td> <font face="Arial">breite</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field_name = $row["ville_id"];
        $field1name = $row["ville_departement"];
        $field2name = $row["ville_slug"];
        $field3name = $row["ville_nom"];
        $field4name = $row["ville_longitude_deg"];
        $field5name = $row["ville_latitude_deg"]; 
 
        echo '<tr> 
                  <td>'.$field_name.'</td> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
              </tr>';
        echo "case: \"'.$field1name.'\";<br>";

    }
    $result->free();
} 
?>
</body>
</html>