<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario get</title>
    </head>
<body>
<h1>Formulario en php</h1>
<form action="recibir.php" method="post">
    <p>
    <label for="Nombre">Nombre</label>
    <input type="text" name="nombre">
    </p>
    <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
    </p>
    <input type="submit" value="Enviar Datos">
    
</form>
</body>

</html>

<?php
