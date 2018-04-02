<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de vista</title>
    <?php require_once '../app/views/includes/estilos.php';?>
</head>
<body>
    <div class="flex-container" id="test">
        <h1 class="flex-item"  ><?php echo $parametros['Message'];?></h1>
    </div>
</body>
</html>