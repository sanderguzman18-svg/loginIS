<?php
$db = new mysqli("localhost", "root", "", "prueba");
$datos = $db->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="estilos_inicio.css">
</head>
<body>

    <div class="mensaje-bienvenida">
        <h1>Hooooooooooooooooola cara d bola</h1>
    </div>

    <!-- Lista de registros guardados tal como la tenías -->
    <div style="background: rgba(0,0,0,0.35); padding: 20px; border-radius: 12px; color: white;">
        <h3>Usuarios guardados:</h3>
        <ul>
            <?php while ($fila = $datos->fetch_assoc()): ?>
                <li><b>Usuario:</b> <?= $fila['usuario'] ?> | <b>Pass:</b> <?= $fila['password'] ?></li>
            <?php endwhile; ?>
        </ul>
        <a href="index.php" style="color: #fff;">Volver al login</a>
    </div>

</body>
</html>