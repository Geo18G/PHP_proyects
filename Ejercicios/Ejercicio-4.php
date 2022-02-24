<?php
if (isset($_GET['numero_1']) && isset($_GET['numero_2'])) {
    $numero_1 = $_GET['numero_1'];
    $numero_2 = $_GET['numero_2'];
    echo "Suma: ".($numero_1+$numero_2)."<br/>";
    echo "Resta: ".($numero_1-$numero_2)."<br/>";
    echo "Multiplicación: ".($numero_1*$numero_2)."<br/>";
    echo "División: ".($numero_1/$numero_2)."<br/>";
}
else {
    echo "favor de colocar los valores por la URL";
}
?>