<?php 
include ('conexion.php');


  $query = 'SELECT * FROM listas_reproduccion';
  $result = $conexion->query($query);
  $listas = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
      
   $listas .= "<option value='$row[id]'>$row[nombre]</option>";
  }echo $listas;
