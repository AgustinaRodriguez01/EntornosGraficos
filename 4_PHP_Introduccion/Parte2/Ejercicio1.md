# Ejercitación 1

## Indicar si los siguientes códigos son equivalentes.
```php
<?php
$a = array( 'color' => 'rojo',
 'sabor' => 'dulce',
 'forma' => 'redonda',
 'nombre' => 'manzana',
 4 
 );
?> 
```
```php
<?php
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre'] = 'manzana';
$a[] = 4;
?>
```

Ambos códigos son equivalentes. Son dos formas distintas de asignar dentro de un array, características y sus respectivos valores. Ambos generan el mismo array $a.