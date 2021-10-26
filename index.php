<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Título del documento HTML</title>
</head>
<body>

<H1 align="center">  numero divisible entre 3 </H1>
<center>
<form action="index.php" method="post" align="center">
 <p>numero: <input type="number" name="numero"   class="redondeado"/></p>
 <p><input type="submit" value="Calcular" /></p>
</form>
</center>


<?php

require __DIR__ . '/vendor/autoload.php';

// Llamando a una funcion para calcular si el numero es divisible entre 3

if( (isset($_POST['numero']) && !empty($_POST['numero'])) ) {
    echo "<center>";
    $numero = $_POST['numero'];
    echo div($numero);
    echo "</center>";
}

?>
</body>
</html>


