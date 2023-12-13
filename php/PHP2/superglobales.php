<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales</title>
</head>
<body>
    <?php
        $ip = $_SERVER["SERVER_ADDR"];
        $nombre = $_SERVER["SERVER_SOFTWARE"];
        $pagina = $_SERVER["REMOTE_HOST"];

        echo "IP: " . $ip . "<br>" . "Nombre: " . $nombre . "<br>" . "Pagina anterior: " . $pagina . "<br>";
    ?>
</body>
</html>