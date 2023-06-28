<?php
session_start();
include "conexion.php";
 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="styles.css">
    
    
    <title>Login</title>
</head>
<script>
    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>

<body>
<header>
<div class="div1">
          <h1 style="color: white;">Login</h1>
          <form action="./validar_login.php" method="POST">
          <label style="color: white;">Nombre del Usuario</label>
    <input type="text"  placeholder="Nombre del Usuario" name="nombre_usuario" requiredclass="form-control" id="exampleInputEmail1" >
            <label for="exampleInputPassword1" style="color: white;">Password</label>
    <input type="password" placeholder="Contraseña" name="password" requiredclass="form-control" id="exampleInputPassword1" placeholder="Password" >
            <input type="submit" value="Ingresar" style="color: black;"/>
          </form>
        </div>
<!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script>   

</body>
</html>