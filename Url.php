<?php 


    require_once 'conexion.php';

 # $mysqli = getConn();
  $id = $_POST['id'];
  $query = "SELECT * FROM `videos`  WHERE id = $_POST[url]";
  $result = $mysqli->query($query);
  $url = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $url .= "<option value='.$row[nombre]'>$row[url]</option>";

  } echo $url;
