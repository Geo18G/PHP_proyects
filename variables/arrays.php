<?php
echo "<ul>";
$peliculas = array('batman', 'spyderman', 'superman');
for ($i=0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "</ul>";

// Recorrer con foreach
echo "<ul>";
foreach ($peliculas as $pelicula) {
    echo "<li>".$pelicula."</li>";
}
echo "</ul>";
// Arrays asociativos
$personas = array(
  'nombre' => 'Edgar',
  'apellidos' => 'Guerrero',
  'edad' => '18'
);
echo "<br>";
echo $personas['nombre'];
echo $personas['apellidos'];
echo $personas['edad'];
// Arrays multidimensionales
echo "<br>";
$contactos = array(
    array(
        'nombre' => 'Luis',
        'numero' => '1234567890'
    ),
    array(
        'nombre' => 'Jose',
        'numero' => '0123456789'
    )
);
echo $contactos[1]['nombre'];
foreach ($contactos as $key => $contacto){
    echo $key;
}
//Funciones con arrays
$cantantes = ['2pac', 'Dr. Dre', 'SoopDog', '2', '1', '3'];
// Añadir elementos
$cantantes[]= "50 Cent";
array_push($cantantes, "Eminem");
//array_pop($cantantes); // quita el último elemento
sort($cantantes);
unset($cantantes[0]); // quita elementos del array
unset($cantantes[1]);
unset($cantantes[3]);
var_dump($cantantes);
echo "<br>";
$indice = array_rand($cantantes);
echo $cantantes[$indice];
// dar vuelta
var_dump (array_reverse($cantantes));
array_search('Eminem', $cantantes); // busca el indice del needle devuelve int
echo "<br>".count($cantantes);


