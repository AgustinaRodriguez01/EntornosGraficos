# Ejercitación 2

## En cada caso, indicar las salidas correspondientes.

a-
```php
<?php
$matriz = array("x" => "bar", 12 => true);
echo $matriz["x"];
echo $matriz[12]; 
?>
```
La salida producida es:
bar1

b-
```php
<?php
$matriz = array("unamatriz" => array(6 => 5, 13 => 9, "a" => 42));
echo $matriz["unamatriz"][6]; 
echo $matriz["unamatriz"][13]; 
echo $matriz["unamatriz"]["a"];
?>
```
La salida producida es:
5942

c-
```php
<?php
$matriz = array(5 => 1, 12 => 2);
$matriz[] = 56; 
$matriz["x"] = 42; unset($matriz[5]); unset($matriz);
?>
```

No hay uso de la palabra reservada `echo`, entonces no se produce ninguna salida.