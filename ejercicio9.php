<table border ="1">
<?php
for($i = 0; $i < 11; $i++ ) {
    echo "<tr><td>".$_POST['numero']."</td><td>*</td><td>$i</td><td><td>".$i*$_POST['numero']."</td></tr>" ; 
}
?>
</table>
<br><br><a href="index.html">Volver a enunciados</a>
