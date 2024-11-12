<!-- Haz una tabla con las cinco primeras potencias de los diez primeros números -->
<?php
echo "<table border='1'>";
echo "<tr>
        <th>Número</th>
        <th>Potencia 1</th>
        <th>Potencia 2</th>
        <th>Potencia 3</th>
        <th>Potencia 4</th>
        <th>Potencia 5</th>
    </tr>";

for ($num = 1; $num <= 10; $num++) {
    echo "<tr>";
    echo "<td>$num</td>";
    for ($pot = 1; $pot <= 5; $pot++) {
        echo "<td>" . pow($num, $pot) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

