<?php
session_start();
$_SESSION['u_nombre']='text';
$_SESSION['n_usuario'] = '';

session_destroy();
        
header('location: ./login.php');
exit();
?>