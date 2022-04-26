<html>

<head>
    <link rel="stylesheet" href="header3.css">
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/menu.js"></script>
</head>

<body>
    <form method="POST" action="videos.php">
        <div class="contenedor">
            <header>
                <div class="menu_bar">
                    <a class="bt-menu" href="#"><span class="icon-list2"></span>Menu</a>
                </div>
                <nav role="navigation">
                    <ul>
                        <li>

                            <div>
                                <img src="carvajal_tys.png" width="150px" heigth="100px">
                            </div>
                        </li>
                        <li>
                            <a href="index.php">
                                <div>
                                    Inicio
                                </div>
                            </a>
                        </li>
                        <li>
                            <div>
                                <input type="submit" value="Videos" class="button2" name="list_videos">
                            </div>
                        </li>
                        <li>
                            <div>
                                <input type="submit" value="Documentación" class="button2" name="documentacion">
                            </div>
                        </li>
                        <li>
                            <div>
                                <input type="submit" value="Contactos" class="button2" name="contactos">
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>


            <?php
include 'conexion.php';
session_start();


$valor2 = $_SESSION['modelo'];
            
if ($_SESSION['valor']==1) {
        
$listar = "SELECT modelo.id_modelo, marca.nombre_marca, modelo.nombre_modelo, modelo.imagen_modelo FROM modelo INNER JOIN marca ON marca.id_marca=modelo.id_marca WHERE id_modelo = '$valor2'";

$resultado = mysqli_query($conexion, $listar);
        
$fila = mysqli_fetch_row($resultado);

?>

            <div class="pinicial" style="max-width:100%;margin: 0 auto">
                <br>
                <h2>Guía de Mantenimiento y/o Reparación de <br> Multifuncionales <?php echo $fila[1]." ".$fila[2];  ?></h2>

                <div id="img1">
                    <img src="<?php echo $fila[3];  ?>" style="max-width:100%;margin: 0 auto">
                    <input type="text" name="modelo" value="<?php echo $valor2; ?>" hidden>

                </div>

            </div>

            <?php
    $_SESSION['valor']=2;
    
}
                //Lista los videos de la  banda

                if (isset($_REQUEST['list_videos'])) {
                    $listar = "SELECT modelo.id_modelo, marca.nombre_marca, modelo.nombre_modelo, modelo.imagen_modelo FROM modelo INNER JOIN marca ON marca.id_marca=modelo.id_marca WHERE id_modelo = '$valor2'";

$resultado = mysqli_query($conexion, $listar);
        
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysqli_error($conexion,$listar);
    exit;
}
$fila = mysqli_fetch_row($resultado);
                    
$listar = "Select * from videos where id_modelo = '$valor2'";

$resultado = mysqli_query($conexion, $listar);
                        ?>


            <selection class="main">

                <h2>Guía audiovisual para el mantenimiento y/o reparación de Multifuncionales <?php echo $fila[1]." ".$fila[2];  ?></h2>

            </selection>
            <div class="toc_container">
                <p class="toc_title">VIDEOS</p><br>
                <ul class="toc_list">
                    <?php while ($row = mysqli_fetch_assoc($resultado))
{ ?>
                    <li><input type="submit" class="nombre_video" name="ver_video" value="<?php echo $row['nombre_video']; ?>"></li>
                    <input type="text" name="modelo" value="<?php echo $valor2; ?>" hidden>
                    <?php
    }
        ?>
                </ul>
            </div>
            <?php
    }
            if (isset($_REQUEST['ver_video'])) {

        $video = $_REQUEST['ver_video'];

        $buscar_lista_videos2 = "Select * from videos where id_modelo = '$valor2'";
        $resultado_lista_videos2 = mysqli_query($conexion, $buscar_lista_videos2);

        $seleccion_video = "select * from videos where nombre_video = '$video' and id_modelo = '$valor2' ";
        $resultado_seleccion_video = mysqli_query($conexion, $seleccion_video);


        //Lista los videos de la  banda junto con el video seleccionado

        while ($row3 = mysqli_fetch_array($resultado_seleccion_video)) {
        ?>

            <selection class="main">

                <h1><?php echo $row3['nombre_video']; ?></h1>

                <iframe width="560" height="315" src="<?php echo $row3['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </selection>

            <div class="toc_container">
                <p class="toc_title">VIDEOS</p>
                <ul class="toc_list">
                    <?php 
        }
            while ($row = mysqli_fetch_assoc($resultado_lista_videos2))

        { ?>
                    <li><input type="submit" class="nombre_video" name="ver_video" value="<?php echo $row['nombre_video']; ?>"></li>
                    <input type="text" name="modelo" value="<?php echo $valor2; ?>" hidden>
                    <?php
    }
        ?>
                </ul>
            </div>
            <?php
    
            } if (isset($_REQUEST['documentacion'])) {
                
        
        $listar = "SELECT modelo.id_modelo, marca.nombre_marca, modelo.nombre_modelo, modelo.imagen_modelo FROM modelo INNER JOIN marca ON marca.id_marca=modelo.id_marca WHERE id_modelo = '$valor2'";

        $resultado = mysqli_query($conexion, $listar);
        
        $fila = mysqli_fetch_row($resultado);

        $buscar_documentacion = "SELECT nombre_documentacion, url_documentacion  from documentacion where id_modelo = '$valor2'";
            
        $resultado_buscar_documentacion = mysqli_query($conexion, $buscar_documentacion);

        ?>
            <div class="pinicial" style="max-width:100%;margin: 0 auto">
                <br>
                <h2>Guía de Mantenimiento y/o Reparación de <br> Multifuncionales <?php echo $fila[1]." ".$fila[2];  ?></h2>


            </div>
            <?php 
        
            while ($row = mysqli_fetch_assoc($resultado_buscar_documentacion))

        { ?>

            <div class="caja">
                <ul>
                    <li><a href=" <?php echo $row['url_documentacion']; ?>" target="_blank"> <?php echo $row['nombre_documentacion']; ?></a></li>
                </ul>
            </div>
            <?php
    }
        ?>

            <?php
    
            }
        ?>


        </div>
    </form>
</body>
<script>
    $(document).ready(main);

    var contador = 1;

    function main() {
        $('.menu_bar').click(function() {
            // $('nav').toggle(); Forma Sencilla de aparecer y desaparecer

            if (contador == 1) {
                $('nav').animate({
                    left: '0'
                });
                contador = 0;
            } else {
                contador = 1;
                $('nav').animate({
                    left: '-100%'
                });
            };

        });
    };

</script>

<script>
    function myFunction() {
        $imgpartes = document.getElementById("url").value;
        var myWindow = window.open($imgpartes, "MsgWindow", "width=750,height=750");
    }

</script>

<script>
    function myFunction() {
        return "Write something clever here...";
        window.alert("hola");
    }

</script>

</html>