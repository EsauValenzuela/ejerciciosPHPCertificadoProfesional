<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numero = $_POST['numero'];
$resultado = 1;
$numeroDecrementar = $_POST['numero'] - 1;

for($i = 1; $i <= $numero; $i++) {

    $resultado = $i * $resultado;
    
}   

echo "El factorial de ". $numero . " es: " . $resultado;
        

?>

<a href="ejercicio13.html">volver a ejericcio</a>
    
</body>
</html>
