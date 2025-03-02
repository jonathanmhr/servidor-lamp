<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi página PHP</title>
</head>
<body>
    <h1>¡Bienvenido a mi página genérica en PHP!</h1>
    <p>Prueba este formulario interactivo:</p>

    <form method="POST">
        <label for="nombre">¿Cuál es tu nombre?</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST["nombre"]);
        echo "<p>¡Hola, $nombre! Gracias por visitar esta página.</p>";
    }
    ?>
</body>
</html>
