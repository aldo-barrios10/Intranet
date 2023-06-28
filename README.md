# Intranet
Este es una propuesta de una intranet realizada como extensión del proyecto presentado en el repositorio https://github.com/aldo-barrios10/ProyectoRedes. En este se busca crear una intranet funcional con la cual cumplir los requisitos establecidos.
El diseño fue realizado a partir de una plantilla utilizando bootstrap, esto con el fin de dedicarse mayormente a la funcionalidad y modificando menos el apartado visual.

Por el momento este proyecto está planteado para funcionar de manera local en un solo equipo, por lo qu ese deberá de tener un servidor SQL y un serviodr apache para su funcionamiento.

## Herramientas
La aplicación esta planteada para funcionar con **PHP** y con una **base de datos** , esta ultima es la que contiene los datos para el login, por lo que de querer agregar usuarios, se deberá hacer directamente en la vase de datos.

El código PHP tiene establecida la conexión de localhost para poder ejecutarla en cualquier dispositivo, pero la conexión está establecida en el puerto 3308, por lo que si se tiene otro puerto, es necesario cambiarlo.
