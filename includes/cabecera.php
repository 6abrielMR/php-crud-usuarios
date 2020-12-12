<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Cédulas</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="nav">
            <h1>Crud Cédulas</h1>
            <?php if(!isset($_SESSION['current_page']) || $_SESSION['current_page'] != "crear"):?>
                <a href="crear.php" id="btn-agregar">Agregar Usuario</a>
            <?php endif;?>
        </div>
        <div class="main">
            <div id="principal">