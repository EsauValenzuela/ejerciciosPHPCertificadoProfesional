<?php
$hora = $_POST['hora'];
$minuto = $_POST['minuto'];

$segundosIntroducidos = (($hora*60) + $minuto)*60;
$segundosTotalDelDia = 24*60*60;
$segundosRestantes = $segundosTotalDelDia - $segundosIntroducidos;

echo $segundosRestantes;

?>

<br><br><a href="index.html">Volver a enunciados</a>