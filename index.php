<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<div id="header">
    <h2>Todos los usuarios</h2>
</div>
<div id="titulo">
    <div id="cedula">
        <h4>Cédula</h4>
    </div>
    <div id="nombres">
        <h4>Nombres</h4>
    </div>
    <div id="apellidos">
        <h4>Apellidos</h4>
    </div>
    <div id="actions">
        <h4>Acciones</h4>
    </div>
</div>
<div class="contenido-filas">
    <?php
        $lista_usuarios = obtenerUsuarios($db);
        if(!empty($lista_usuarios)):
            while($usuario = mysqli_fetch_assoc($lista_usuarios)):
    ?>
        <div class="fila">
            <p><?=$usuario['id']?></p>
            <p><?=$usuario['nombres']?></p>
            <p><?=$usuario['apellidos']?></p>
            <div class="actions">
                <a href="actualizar.php?id=<?=$usuario['id']?>" id="btn-actualizar">Actualizar</a>
                <a href="eliminar_usuario.php?id=<?=$usuario['id']?>" id="btn-eliminar">Eliminar</a>
            </div>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php require_once 'includes/pie.php' ?>