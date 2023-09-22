# Ejercitacion 3

## Explicar para qué se utiliza los siguientes códigos.

a-
```html
<html>
<head><title>Documento 1</title></head>
<body>
<?php
 echo "<table width = 90% border = '1' >";
 $row = 5;
 $col = 2;
 for ($r = 1; $r <= $row; $r++) {
 echo "<tr>"; 
 for ($c = 1; $c <= $col;$c++) {
 echo "<td>&nbsp;</td>\n";
 } echo "</tr>\n";
 }
 echo "</table>\n";
?>
</body></html>
```

Este código generaría un HTML que a su vez, genera una tabla de 5 filas, con 2 columnas cada una, todas las celdas vacías.

b-
```html
<html>
<head><title>Documento 2</title></head>
<body>
<?php
if (!isset($_POST['submit'])) {
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Edad: <input name="age" size="2">
 <input type="submit" name="submit" value="Ir">
 </form>
<?php
 }
else {
 $age = $_POST['age'];
 if ($age >= 21) {
 echo 'Mayor de edad';
 }
 else {
 echo 'Menor de edad';
 }
}
?>
</body></html>
```

El código muestra dos pantallas dependiendo del valor de `!isset($_POST['submit'])`. Si es la primera vez que se navega, la condición será true y mostrará un formulario en el cual se puede ingresar la edad. En caso de haber ya estado en esa página, mostrará otra, en el cual, segun el valor de la edad, mostrará un cartel el cual dirá si es mayor o menor de edad.