<?php
$horasTrabajadas = $_POST['horasTrabajadas'];

if($horasTrabajadas - 40 > 0) {
   $horasExtras =  $horasTrabajadas-40;
   $valorHorasExtras = $horasExtras * 16;
   echo (40 * 12) + $valorHorasExtras;
} else {

    echo $horasTrabajadas * 12;
}
?>

<br><br><a href="index.html">Volver a enunciados</a>