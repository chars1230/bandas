<?php 

require_once "conexion.php";
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$num_doc = $_POST['num_doc'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$usuario = $_POST['usuario'];
$clave =($_POST['clave']);


echo "los campos son : <br> ";
echo "$nombres,$apellidos,$num_doc,$correo,$celular,$direccion,$usuario,$clave";


    
    $sql="INSERT INTO `usuarios`(`nombres`, `apellidos`, `num_doc`, `correo`, `celular`, `direccion`, `usuario`, `clave`) 
    VALUES ('$nombres','$apellidos','$num_doc','$correo','$celular','$direccion','$usuario','$clave')";
   
    $result = mysqli_query($conexion,$sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conexion), E_USER_ERROR);
    

// consulta sql

echo "<script>alert('bienvenido $_POST[nombres]');window.location='index.php'</script>";

?>