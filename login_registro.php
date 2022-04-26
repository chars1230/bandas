<?php
/*if ($_POST){
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";
    $query = mysqli_query($conexion,$sql);
    #$result =mysqli_real_escape_string($conexion,$_POST['usuario']);
    if(mysqli_num_rows($query)>0){
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['usuario']= $row['usuario'];
        echo'<script><div class="alert alert-sucess" role="alert">alert(login con exito!)</div></script>';
        header('location: index.php');
    } else{
        
        echo '<script><div  class="alert alert-danger" role="alert">alert(login no exito!)</div></script>';
        header('location: login.php');
        
    }
    
}
*/




include_once("conexion.php");

 $usuario = $_POST['usuario'];
 $clave = $_POST['clave'];

 
 $query = "SELECT `usuario`, `clave` FROM `usuarios` WHERE `usuario`= $usuario AND `clave`= $clave";
 $result = mysqli_query($conexion,$query)or die(mysqli_error($conexion));
 if(mysqli_num_rows($result)>1){
    $result = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['usuario']= $row['usuario'];

     echo "<script>
     aler('logueado con exito bienvenido $usuario')
     windows.location= index.php;
     </script>";
 }
 else {
     
     echo "<script>
     aler('error al ingresar')
     </script>";
 }
 






/*
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
#login


    $query ="SELECT * FROM `usuarios` WHERE usuario ='$usuario'and clave= '$clave'";


    if ($query == $usuario && $clave) {
        echo "<script>alert('bienvenido : $usuario');window.location='index.php'</script>";

    }else {
        echo "<script>alert('usuario no existe'); window.location='login.php'</script>";
    }


#Register

if(isset($_POST['btnregistrar'])){
    $sqlgrabar ="INSERT INTO `usuarios`(`nombres`, `apellidos`, `num_doc`, `correo`, `celular`, `direccion`, `usuario`, `clave`) VALUES ('$nombres','$apellidos','$num_doc','$correo','$celular','$direccion','$usuario','$clave')";
    

    if(mysqli_query($conexion,$sqlgrabar)){
        echo "<script>alert('usuario registrado con exito: $nombre'); window.location='index.php'</script>";

    }else {
        echo "Error<br>".mysqli_error($conexion);
    }

} */