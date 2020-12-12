<?php

if(isset($_GET['id'])) {
    //Conexion a la base de datos
    require_once 'includes/conexion.php';

    $id = isset($_GET['id']) ? (int) $_GET['id'] : false;

    $sql = "delete from usuarios where id = $id";
    $borrar = mysqli_query($db, $sql);
}

header("Location: index.php");