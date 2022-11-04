<?php
$numero = $_POST['numero'];
$anterior = 0;
$posterior = 1;
echo $anterior . ",";
for($i = 1; $i <= $numero - 1; $i++) {
    if($i == $numero -1 ) {
        echo $posterior;
    } else {
        echo $posterior.",";
    }
    $aux = $anterior;
    $anterior = $posterior;
    $posterior = $aux + $posterior;
    
}
?>