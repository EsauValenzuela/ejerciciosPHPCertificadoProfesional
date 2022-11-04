<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];


$ordenados[0] = $numero1;
$ordenados[1] = $numero2;
$ordenados[2] = $numero3;
for($i = 0; $i < 2; $i++) {
    if($ordenados[$i] < $ordenados[0]) {
        $aux = $ordenados[0];
        $ordenados[0] = $ordenados[$i];
        $ordenados[$i] = $aux; 
    }
}

if($ordenados[1]>$ordenados[2]) {
    $aux = $ordenados[1];
    $ordenados[1] = $ordenados[2];
    $ordenados[2] = $aux;

}

echo $ordenados[0] . ',' . $ordenados[1] . ',' . $ordenados[2];


?>

<br><br><a href="index.html">Volver a enunciados</a>