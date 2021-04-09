<?php 
if( count($_GET) == 2 ) {
   extract($_GET); 
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c094c4f2ad.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
    <title>Resultado Operación - Clínica San Luis</title>
</head>

<body>

    <div class="container-sm bg-light p-3 rounded">
        <div class="<?= $result == 'success' ? 'alert alert-success' : 'alert alert-danger' ?>" role="alert">
            <?php if ($result == 'success') : ?>
                Operación ejecutada correctamente.
            <?php else : ?>
                Ha ocurrido un error al ejecutar la operación.
            <?php endif ?>
        </div>
        <button class="btn btn-primary" onclick="goHome()">Volver al Inicio</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>