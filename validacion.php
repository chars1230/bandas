<?php

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
session_start();
$_SESSION['usuario'] = $usuario;

$conexion = mysqli_connect('localhost', 'root', '', 'bandas');
$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
$result = mysqli_query($conexion,$query);

$fila = mysqli_num_rows($result);

if ($fila){
    header("Location: inicio2.php");
   
}else{
    
    
    include('index.php');
    
    echo '<script> alert("Error en la autenticacion" )</script>';
    
}
mysqli_free_result($result);
mysqli_close($conexion);