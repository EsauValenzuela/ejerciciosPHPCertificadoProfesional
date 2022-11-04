<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        td {
            text-align: center;
        }

        td.blanco {
            background-color: gray;

        }

        td.negro {
            background-color: black;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['cordenadas'])) { 
        $cordenadas = $_POST['cordenadas'];
        $columna = substr($cordenadas, 0, 1);
        $fila = substr($cordenadas, 1, 1);
        if($fila == "a") {
            $columna = 1;
        } elseif ($columna == "b") {
            $columna = 2;
        } elseif ($columna== "c") {
            $columna = 3;
        } elseif ($columna == "d") {
            $columna = 4;
        } elseif ($columna == "e") {
            $columna= 5;
        } elseif ($columna == "f") {
            $columna = 6;
        } elseif ($columna == "g") {
            $columna = 7;
        } elseif ($columna == "h") {
            $columna = 8;
        }

        
        ?>
    

        <table>
            <tr>
                <td></td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
                <td>f</td>
                <td>g</td>
                <td>h</td>
            </tr>
            <?php
            $color = "blanco";
            for ($i = 8; $i >= 1; $i--) {

                echo '<tr><td>' . $i . '</td>';
                for ($j = 1; $j <=8; $j++) {
                    if($fila == $i && $columna == $j) {
                        echo '<td class="' . $color . '"><img src="alfil.png"<td/>';
                    } elseif($fila + $columna == $i + $j || $columna - $fila == $j - $i){
                        echo '<td class="' . $color . '"><img src="alfilsemitransparente.png"<td/>';
                    } else {
                    echo '<td class="' . $color . '"><img src="vacio.png"<td/>';
                    }
                    if ($color == "blanco") {
                        $color = "negro";
                    } else {
                        $color = "blanco";
                    }
                }
                echo '</tr>';
            }


            ?>
       

        </table>
        <a href="ejercicio15.php">volver a inicio</a>
    <?php    } else { ?>

        <table>
            <tr>
                <td></td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
                <td>f</td>
                <td>g</td>
                <td>h</td>
            </tr>
            <?php
            $color = "blanco";
            for ($i = 8; $i >= 1; $i--) {

                echo '<tr><td>' . $i . '</td>';
                for ($j = 8; $j >= 1; $j--) {
                    echo '<td class="' . $color . '"><img src="vacio.png"<td/>';
                    if ($color == "blanco") {
                        $color = "negro";
                    } else {
                        $color = "blanco";
                    }
                }
                echo '</tr>';
            }


            ?>


        </table>

        <form action="ejercicio15.php" method="post">
            <p> introduce cordenada por ejemplo: e6 </p>
            <input type="text" name="cordenadas">
            <input type="submit" value="comprobar">

        </form>

        <a href="index.html">volver a indice</a>
    <?php } ?>




</body>

</html>