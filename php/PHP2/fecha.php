<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" http-equiv="refresh" content="60">
    <title>Fecha español</title>
</head>
<body>
    <?php
     date_default_timezone_set('Spain/Madrid');
     setlocale(LC_ALL,"es_ES.UTF8");
        echo ucwords(strftime("%A %d %B %Y %H:%M"));
    ?>
</body>
</html>