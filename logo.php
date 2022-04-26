<?php 
 require_once 'conexion.php';


 $query = "SELECT * FROM`listas_reproduccion` ";
 $result = $conexion->query($query);
 $fila = '<option value="0">Elige una opción</option>';
 while($fila =mysqli_fetch_array($result)){
     
    echo '<img src="'.$fila["imagenes"].'" height="200" width="200"><br>';
 }echo $fila;


?> 