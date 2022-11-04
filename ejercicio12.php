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
$altura = $_POST['altura'];
$numerosDeEspacios = $altura -1;
$numeroLadrillos = 1;

for($i = 0; $i < $altura; $i++) {
    for($j = 0; $j < $numerosDeEspacios; $j++) {
        echo '&nbsp &nbsp &nbsp &nbsp';

    }
    for($j=0; $j < $numeroLadrillos; $j++) {
        echo '<img src="ladrillo.png"/>';
    }

    echo '<br>';
    $numeroLadrillos++;
    $numerosDeEspacios--;



}
?>    
  <a href="ejercicio12.php">Volver a ejercicio</a>
</body>
</html>





