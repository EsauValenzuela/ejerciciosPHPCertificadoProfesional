<?php
 if($_POST['hora'] >=6 && $_POST['hora']<=12) {
    echo 'Buenos días';
} elseif ($_POST['hora'] >=13 && $_POST['hora']<= 20) {
    echo 'Buenas tardes';
} elseif ($_POST['hora'] >=21 ||  $_POST['hora']<= 5) {
    echo 'Buenas noches';
}
?>
<br><br><a href="index.html">Volver a enunciados</a>