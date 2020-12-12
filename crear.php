<?php $_SESSION['current_page'] = "crear"; ?>
<?php require_once 'includes/cabecera.php'; ?>
<div id="header">
    <h2>Crear Usuario</h2>
</div>
<div class="contenido-filas contenido-form">
    <form action="agregar_usuario.php" method="POST">
        <br>
        <label for="id">Cédula</label>
        <input type="number" name="id" required>
        <br>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" required>
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" required>
        <br>
        <br>
        <br>
        <input type="submit" value="Guardar">
    </form>
</div>
<?php require_once 'includes/pie.php' ?>