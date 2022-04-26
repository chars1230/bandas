<?php
function conn(){
$server="localhost";
$user= "root";
$password= "";
$database= "bandas";
$conexion = mysqli_connect("$server","$user","$password","$database");

if(!$conexion){
    echo ("error en la conexion");
}
else{
 print("connectado a MySQL");  
   
}

}