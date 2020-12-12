<?php

if(isset($_POST)) {
    //Conexion a la base de datos
    require_once 'includes/conexion.php';
    //Recoger valores
    $id = isset($_POST['id']) ? $_POST['id'] : false;
    $nombres = isset($_POST['nombres']) ? mysqli_real_escape_string($db, $_POST['nombres']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;

    $errores = array();

    //Validar nombres
    if(!empty($nombres) && !is_numeric($nombres) && !preg_match("/[0-9]/", $nombres)) {
        $nombres_validate = true;
    } else {
        $nombres_validate = false;
        $errores['nombres'] = "Los nombres no son válidos";
    }

    //Validar apellidos
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validate = true;
    } else {
        $apellidos_validate = false;
        $errores['apellidos'] = "Los apellidos no son válidos";
    }

    if(count($errores) == 0) {
        //Actualizar usuario
        $sql = "update usuarios set ".
            "id = $id, ".
            "nombres = '$nombres', ".
            "apellidos = '$apellidos' ".
            "where id = $id";
        $guardar = mysqli_query($db, $sql);
        
        if($guardar){
            $_SESSION['completado'] = "Los datos se actualizaron correctamente";
            header("Location: actualizar.php");
        } else {
            $_SESSION['errores']['general'] = "Hubo un error al actualizar";
            header("Location: actualizar.php");
        }
    } else {
        $_SESSION['errores'] = $errores;
        header("Location: actualizar.php?id=$id");
    }
}