<?php
echo"<h1>Tablas del 1 al 10</h1>";

echo "<table border='1'>";
    echo "<tr>";
        for ($i=1; $i <= 10; $i++) {
            echo"<td>";
            for ($x = 1; $x <= 10; $x++){
                echo "$i x $x = ".($i*$x)."<br>";
            }
            echo"<td/>";
        }
    echo"</tr>";
echo "</table>";

?>