Pirmero hemos decidido si ibamos a usar tablas div o canvar para pintar el universo, al final nos decidimos usar tablas.
Tenemos un archivo principanl index.html donde creamos un div con un id llamado contenedor-tablero donde vamos a crear nuestro universo.
Tenemos un archivo javascript externo donde crearemos todo el juego desde ahi.

Funcion generar tablero

-creamos una variable con id tablero que contendra toda nuestra tabla(universo) con dos ciclos for, donde el primero creara una fila y el segundo con para fila nos creara una cierta cantidad de columnas, cada una tendra un id y un eveto(onmouseup), que indiquemos.
-luego luego añadimos todo el contenido de la variable en el div llamado contenedor-tablero.
-definimos los tamaños de la celda con accediendo a su propiedad style.
-ejectumos la funcion una vez creada.

Funcion cambiar estado

-Previamente habiamos creado cada celda con un id(numero de fila y numero de columna) y un evento(mouseup)
-creamos una variable celula que sera la llamaremos con el id creado en la generacion de la tablea.
-evaluamos su propiedad style y vemos si tiene un fondo un fondo negro si no lo tiene lo asignamos y si lo tiens lo pintamos en blanco.


