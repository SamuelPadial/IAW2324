<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" id="name">
        <input type="button" onclick="">
    </form>
    <?php echo htmlspecialchars($_POST['name']); ?>
</body>
</html>