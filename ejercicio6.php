<?php
$dia = $_POST['dia'];
$mes = $_POST['mes'];

$horoscopo = [
 1 => ["dia"=>19, "signo"=>["capricornio", "acuario"]],
 2 => ["dia"=>18, "signo"=>["acuario", "picis"]], 
 3 => ["dia"=>20, "signo"=>["picis", "aries"]],
 4 => ["dia"=> 19, "signo"=>["picis", "aries"]],
 5 => ["dia"=> 20, "signo"=>["aries", "tauro"]],
 6 => ["dia"=> 20, "signo"=>["tauro", "geminis"]],
 7 => ["dia"=> 22, "signo"=>["geminis", "cancer"]],
 8  => ["dia"=> 22, "signo"=>["cancer", "leo"]],
 9 => ["dia"=> 22, "signo"=>["leo", "virgo"]],
 10 => ["dia"=> 22, "signo"=>["virgo", "libra"]],
 11 => ["dia"=> 21, "signo"=>["libra", "escorpión"]],
 12 => ["dia"=> 21, "signo"=>["escorio", "sagitario"]]

];
$resultado =  ($horoscopo[$mes]['dia']>=$dia) ? $horoscopo[$mes]['signo'][0] : $horoscopo[$mes]['signo'][1];
 

  echo $resultado;

?>

<br><br><a href="index.html">Volver a enunciados</a>