<?php 
$puntuacion = array (
      'as' => 11, 'dos' => 0, 'tres' => 10, 'cuatro' => 0, 'cinco' => 0,
      'seis' => 0, 'siete' => 0, 'sota' => 2, 'caballo' => 3, 'rey' => 4);
    
    $palo = array ('oros', 'copas', 'bastos', 'espadas');
    
    $figura = array ('as', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'sota', 'caballo', 'rey');


$contador = 0;
$sumador = 0;
$cartasSalidas = [];
$esRepetido = false;
while($contador < 10) {
   $aleatorioFigura = rand(0,9);
   $aleatorioPalo = rand(0,3);
    
    
    $cartaNueva = $figura[$aleatorioFigura]." de ".$palo[$aleatorioPalo];
    for($i = 0; $i < count($cartasSalidas); $i++) {
        
        if($cartasSalidas[$i]==$cartaNueva) {
            $esRepetido = True;
        
           
           
        } else {
            $esRepetido = false;

        }

    }

    if($esRepetido == false) {
        echo $cartaNueva ." = ".$puntuacion[$figura[$aleatorioFigura]]."<br>";
        $sumador = $puntuacion[$figura[$aleatorioFigura]] + $sumador;
        array_push($cartasSalidas,$cartaNueva );
        $contador++;
    }
    
    
}

echo "total de puntos " . $sumador;
?>

<a href="index.html">ir a ejercicios</a>
