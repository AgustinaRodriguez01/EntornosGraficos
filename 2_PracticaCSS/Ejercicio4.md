# Ejercitación 4

Dado el siguiente código de CSS:
```css
* {
    color:green; }

a:link {
    color:gray }

a:visited{
    color:blue }

a:hover {
    color:fuchsia }

a:active {
    color:red }

p {
    font-family: arial,helvetica;
    font-size: 10px;
    color:black; }

.contenido{
    font-size: 14px;
    font-weight: bold; }
```

- `*{color:green;}` Le da a todo el texto del documento un color verde.
- `a:link {color:gray}` Hace que todoas las etiquetas `<a>`, cuando NO haya sido visitado el enlace, tengan un color de letra gris.
- `a:visited{color:blue}` Hace que todoas las etiquetas `<a>`, cuando SI haya sido visitado el enlace, tengan un color de letra azul.
- `a:hover{color:fuchsia}` Hace que cuando se pasa el cursor por arriba de una etiqueta `<a>`, el color del texto del enlace cambie a fucsia.
- `a:active {color:red }` Hace que cuando un enlace se active, se cambie el color de letra de este a rojo
- `p {font-family: arial,helvetica;font-size: 10px;color:black;}` Aplicaria una fuente de letra arial y en su defecto helvetica, tamaño de letra de 10 pixeles y da un color negro a todas las etiquetas `<p>`
- `.contenido{font-size: 14px;font-weight: bold;}` Asigna a todas las etiquetas con la clase "contenido" un tamaño de letra de 14 pixeles y letra negrita.

Con el primer código de HTML:
```html
<body>
    <p class="contenido" style="font-weight: normal;">Este es un texto ...............</p>
    <table>
        <tr>
            <td>Y esta es una tabla.......</td>
        </tr>
        <tr>
            <td><a href="http://www.google.com.ar">con un enlace</a></td>
        </tr>
    </table>
</body>
```

Con el segundo código de HTML:
```html
<body class="contenido">
    <p> Este es un texto................</p>
    <table>
        <tr>
            <td>Y esta es una tabla.......</td>
        </tr>
        <tr>
            <td><a href="http://www.google.com.ar">con un enlace</a></td>
        </tr>
    </table>
</body>
```

## Análisis del primer código
Lo que ocurre en el primer código es que para comenzar se le asigna un color de letra verde a todos los textos del documento. Luego, nos encontramos con una etiqueta `<p>` con la clase "contenido", que a su vez tiene un atributo style="font-weight: normal;". En este caso primero se le aplicarían los estilos especificados en *, después los especificados a nivel de etiqueta 'p', luego los especificados a nivel de clase '.contenido' y por útlimo los especificados con el atributo style. Es decir que se vería de color negro, tamaño de letra de 14 pixeles, una fuente de letra arial o helvetica y tipo de letra normal.

## Análisis del segundo código
Para comenzar, como la clase "contenido" esta declarada en el `<body>`, se aplica color de letra verde, tamaño de letra de 14 pixeles, en negrita. Pero a su vez, `<p>` se ve afectada por los estilos aplicados a ese elemento, entonces se vera con color de letra negro, tamaño de letra de 10 pixeles y una fuente de letra arial o helvetica.