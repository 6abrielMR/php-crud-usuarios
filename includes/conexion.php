<?php

//Conexion
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$database = 'taller';
$db = mysqli_connect($servidor, $usuario, $password, $database);

mysqli_query($db, "set names 'utf8'");