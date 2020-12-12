<?php

function mostrarError($errores, $campo) {
    $alerta = "";
    if(isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta alerta-error>".$errores[$campo]."</div>";
    }

    return $alerta;
}

function borrarErrores() {
    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
    }

    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        unset($_SESSION['completado']);
    }
}

function obtenerUsuarios($conexion) {
    $sql = "select * from usuarios";
    $usuarios = mysqli_query($conexion, $sql);

    $result = array();
    if($usuarios && mysqli_num_rows($usuarios) >= 1) {
        $result = $usuarios;
    }

    return $result;
}

function obtenerUsuario($conexion, $id) {
    $sql = "select * from usuarios where id = $id";
    $usuario = mysqli_query($conexion, $sql);

    $result = array();
    if($usuario && mysqli_num_rows($usuario) >= 1) {
        $result = mysqli_fetch_assoc($usuario);
    }

    return $result;
}