
<?php
$radekJmenoPrijmeni=6;
$sloupecJmenoPrijmeni=18;
echo "<table border='1>'";
for ($i=1;$i<=$radekJmenoPrijmeni;$i++){
    echo "<tr>";
    for ($j=1;$j<=$sloupecJmenoPrijmeni;$j++){
        
        echo "<td> $j-$i  </td>";
    }
    echo "</tr>";
  echo "<br>";
}
echo "</table>";
?>