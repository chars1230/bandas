<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="icon" href="img/favicon.png"> -->
    <link rel="icon" href="img/carvajal_tys.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information seleccionada</title>
    <!-- Latest compiled and minified CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" type ="text/css" href="css/.css">
  <link href="https://vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
  <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
    
    
</head>
<body>

<?php


//$valor = $_POST['valor'];
$lista_reproduccion = $_POST['lista_reproduccion'];
$video = $_POST['video'];   
//echo $valor;
     $video;
    substr($video, 1);
    $lista_reproduccion;
    
    

?>

    
   <div class="container">
     <?php include "menu.php";?>
     <div class="col-12 text-center">  
           
              <div  class="alert alert-success" role="alert"><h3><strong><small>CARVAJAL TECNOLOGIA Y SERVICIOS (PHP, Mysql y Jquery Ajax)</small></strong></h3>
            </div>
          
          
      <!--<p>vídeo elegido según la lista de reproducción:</p>-->
  </div>
  
    <div class="row">
    <b>El resultado es: </b></p><p id="resultado2">
      <div class="col-md-8" >
     
      
     <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php  echo substr($video, 1);
      ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen></iframe>
       </div>

    <div class="col-md-4">
      <form name="form" action="" method="post" enctype="multipart/form-data">
        <div class="playlist">
             <?php      
             
             
        
            include  ('conexion.php');
        
            $query = "SELECT * FROM `videos`  WHERE id_lista  = $lista_reproduccion";
          $result = $conexion->query($query);
          $playlis = '<div value=".$row[url]"></div>';
          while($row = $result->fetch_array(MYSQLI_ASSOC)){
          $playlis .= "<div id='lista' onClick='process' class='lis'value='$row[url]'><a href='$row[url]'> $row[nombre]</a></div>";
            ?>
           
           
            <?php
           } print($playlis); ?> 
           </div>
           
        <!--<input type="text" name="nombre" autocomplete="off"requiered value="">-->
   
        </div>


<?php        
     if (!isset($_REQUEST['$playlis'])) {
              
              $video = $_REQUEST['video'];
              

              echo $lista_reproduccion;

          }

include "conexion.php"; 
$query = "SELECT * FROM `listas_reproduccion` WHERE id = '$lista_reproduccion' ";
$execute = mysqli_query($conexion, $query) or die(mysqli_error($conexion));
while($fila=mysqli_fetch_array($execute)){
 $fila['id'].$fila['imagenes'];
  


?>

    
  <style>
    .img{
      width: 100px;
      height: 100px;
    }
    figure{
      border-radius: 100%;
      width:120px;
      height:120px;
      overflow:hidden;
    }
    
  </style>
  <br><br><br>
  <div id="img" class="col-md-" class="img" <?php echo $fila['id'];?>>
  <figure>
  <img  src='<?php echo substr($fila['imagenes'],0.1);?>' width="120" height="120" id="imagenes" name="logo">
 </figure>
</p>




</div>
</div>
    <?php  } ?> <br>

      
      <style>
    div.lis{
      display:block;
      cursor:pointer;
    }

    div.lis{
        list-style:none;
        margin: 0;
        padding: 0;
    }
    
     .lis{
        display:inline-block;
    }
    .lis{
    color:black;
    display:block;
    padding: 15px 60px;
    text-decoration:none;
    }
    
    div.lis:hover{
        background-color: #42B881;
        transition:all 0.5s;
        transition-duration: 0.2s;;
        background-image: linear-gradient(rgba(0, 132, 255, 0.788),
        rgba(0, 232, 255, 0.788),
        rgb(248, 242, 242,0.788));
        }

    </style>
            
          <!-- <script type="text/javascript" src="js/index.js"></script> -->
          <?php
      include "footer.php";
      
      ?>
      <script src="js/main.js"></script>
      <script src="js/app.js"></script>
</body>
</html>

