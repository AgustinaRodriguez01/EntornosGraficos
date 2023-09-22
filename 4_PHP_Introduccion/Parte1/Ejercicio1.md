# Ejercitacion 1

## En el siguiente código identificar: las variables y su tipo, los operadores, las funciones y sus parámetros, las estructuras de control, cuál es la salida por pantalla

```php
<?php
function doble($i) {
 return $i*2;
}
$a = TRUE; 
$b = "xyz"; 
$c = 'xyz';
$d = 12; 
echo gettype($a);
echo gettype($b); 
echo gettype($c);
echo gettype($d); 
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3; 
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?>
```

## Variables y tipo:
`$a`: booleano.
`$b`: string.
`$c`: string.
`$d`: integer.

## Operadores:
`$a = TRUE`: asignación.
`$i*2`: multiplicación.
`$d += 4`: asignación con incremento.
`++$d`: pre-incremento.
`$d++`: post-incremento.
`$d = $a ? ++$d : $d*3`: operador ternario.

## Funciones y parámetros:
´function doble($i)´: la función 'doble' recibe como parámetro un valor $i que se multiplica por dos.
`gettype($a)`: recibe como parametro una variable, en este caso $a, y devuelve su tipo.
`is_int($d)`: recibe como parámetro una variable, en este caso $d, y devuelve un booleano.

## Estructuras de control:
`if`: condicional que permite evaluar si se cumple una condición.

## Salida por pantalla:
boolean string string integer true xyz xyz 49 96 106