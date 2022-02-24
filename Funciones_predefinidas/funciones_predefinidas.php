<?php
// Debuggear
$nombre="geo";
var_dump($nombre);
// Imprimir fechas
// Diferentes formatos dentro de los parentesis para formas de impresión
echo date("D-M-Y");
echo "<br/>";
// Tiempo que pasa en tiempo real
echo time();

//Math
echo "<br/>";
echo "Raíz de 10: ".round(sqrt(10), 5);
echo "<br/>";
echo "numeros aleatorios ingresar parametros: ".rand(10,40);
echo "<br/>";
echo "numero pi: ".pi();
echo "<br/>";
echo "redondear: ".round(1.5546513, 2);

// Más funciones
echo "<br/>";
gettype($nombre);
// IMPORANTE
echo "<br/>";
if (is_string($nombre)){
    echo "La variable es una string.";
}
else {
    echo "La variable NO es una string.";
}
echo "<br/>";
if (isset($nombre)){
    echo "La variable existe";
}
else {
    echo "La variable no existe";
}
// Eliminar Variables
$year = 2020;
unset($year);

echo "<br/>";
// Comprobar varible vacía
$text = "perro";
if (empty($text)){
    echo "la variable se encuentra vacía ";
}
else {
    echo "la variable tiene contenido ";
}
// Conteo de caracteres en una cadena
echo strlen($text);
//encontrar caracter
echo "<br/>";
$frase = "Vale Verga la Vida";
echo strpos($frase, "vida");
// reemplazar palabras en un string
echo "<br/>";
echo str_replace("vida", "escuela", $frase);
// mayus y minus
echo "<br/>";
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);
?>