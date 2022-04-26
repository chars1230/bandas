    
<?php 
include  ('conexion.php');


  $id = $_POST['id'];
  $query = "SELECT * FROM `videos`  WHERE id_lista = $id";
  $result = $conexion->query($query);
  $videos = '<option value="0">Elige una opción</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $videos .= "<option value='.$row[url]'>$row[nombre]</option>";

  }
  print_r ($videos);
