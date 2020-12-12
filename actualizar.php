<?php $_SESSION['current_page'] = "actualizar"; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
    if(isset($_GET['id'])) {
        $current_user = obtenerUsuario($db, $_GET['id']);
        $current_id = $_GET['id'];
    } else {
        header("Location: index.php");
        exit();
    }
?>
<div id="header">
    <h2>Actualizar Usuario</h2>
</div>
<div class="contenido-filas contenido-form">
    <?php if(isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito"><?= $_SESSION['completado']; ?></div>
    <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error"><?= $_SESSION['errores']['general']; ?></div>
    <?php endif; ?>
    <form action="actualizar_usuario.php" method="POST">
        <br>
        <label for="id">Cédula</label>
        <input type="number" name="id" value="<?=$current_user['id']?>" required>
        <br>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" value="<?=$current_user['nombres']?>" required>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], "nombres") : ""; ?>
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?=$current_user['apellidos']?>" required>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], "apellidos") : ""; ?>
        <br>
        <br>
        <br>
        <input type="submit" value="Guardar">
    </form>
    <?php borrarErrores(); ?>
</div>
<?php require_once 'includes/pie.php' ?>