# Ejercitación 2

```css
p#normal {
    font-family: arial,helvetica;
    font-size: 11px;
    font-weight: bold;
}
```
Este código se aplica a la etiqueta `<p>` con `id="normal"`, aplicandose las siguientes reglas:
- fuente del parrafo arial, y si no se le pude aplicar esa fuente se aplica helvetica
- el tamaño de letra de 11 píxeles
- texto en negrita

```cs
*#destacado {
    border-style: solid;
    border-color: blue;
    border-width: 2px;
}
```
Se aplica a todas las etiquetas que tengan `id="distinto"`, en este caso a una etiqueta `<p>` y la etiqueta `<table>`. Aplica borde solido, color azul y de tamaño de dos pixeles.

```css
#distinto {
    background-color: #9EC7EB;
    color: red;
}
```
Se aplica a cualquier elemento con `id="distinto"`. Aplica el fondo de color #9EC7EB y color de letra rojo. 

```html
<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado">
    <tr>
        <td>Esta es una tabla</td>
    </tr>
</table>
<p id="distinto">Este es el último párrafo</p>
```