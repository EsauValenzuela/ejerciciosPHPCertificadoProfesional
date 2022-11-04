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
if(isset($_POST['numero'])) {
   if($_POST['numero']>=0) {
        $suma = $_POST['suma'] + $_POST['numero'];
        $_POST['contador']++;
        $contador = $_POST['contador'];
      
   } else {
        echo "La media de los numeros introducidos es : ". $_POST['suma'] / $_POST['contador'];
        $suma = 0;
        $contador = 0;
    }
    ?>
<form method="POST" action="ejercicio10.php">
        introducir numero <input type="number" name="numero">
     <input type="hidden" name="suma" value="<?php echo $suma?>">
     <input type="hidden" name="contador" value="<?php echo $contador?>">
        <input type="submit" value="enviar">

        <?php 
} else {
        ?>

<form method="POST" action="ejercicio10.php">
        introducir numero <input type="number" name="numero">
        <input type="submit" value="enviar">
        <input type="hidden" name="suma" value="0">
        <input type="hidden" name="contador" value="0">

        <?php 
            }
        ?>
</body>
</html>