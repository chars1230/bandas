<?php
include "conexion.php";
        session_start();
        session_destroy($_SESSION["login"]);
        header("location:index.php");
        unset($_SESSION["login"]);
        ?>