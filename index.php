<?php
$db = new mysqli("localhost", "root", "", "prueba");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $u = $_POST['usuario'];
    $p = $_POST['password'];
    $db->query("INSERT INTO usuarios VALUES ('$u', '$p')");
    
    // Redirige a tu pantalla de bienvenida tras guardar
    header("Location: inicio.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simple</title>
    <link rel="stylesheet" href="estilos_login.css">
</head>
<body>

    <div class="login-container">
        <h2>Inicie Sesión</h2>
        <form method="POST">
            <div class="input-group">
                <input type="text" name="usuario" placeholder="Ingrese su usuario" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Ingrese su contraseña" required>
            </div>
            <button type="submit">Iniciar Sesioń</button>
        </form>
    </div>

</body>
</html>
