# Ejercitación 3

```css
p.quitar {
color: red;
}
```
Se aplica a los elementos de etiqueta `<p>` y que a su vez tengan `class="quitar"`. Aplica letra de color rojo.

```css
*.desarrollo {
font-size: 8px;
}
```
Aplica a todos las etiquetas con `class="desarrollo"`, que esten dentro de cualquier otra etiqueta. Se aplica tamaño de letra de ocho pixeles.

```css
.importante {
font-size: 20px;
}
```
Se aplica a todos los elementos con `class="importante"` un tamaño de letra de 20 pixeles.

Vale aclara que para la ultima etiqueta `<p>` se aplicaron dos clases, tanto "importante" como "quitar".

```html
<p class="desarrollo"> 
En este primer párrafo trataremos lo siguiente:
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
Este párrafo debe ser quitado de la obra…
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p >
En este otro párrafo trataremos otro tema:<br />
xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
Y este es el párrafo más importante de la obra…
<br />xxxxxxxxxxxxxxxxxxxxxxxxx
</ p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```