<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c094c4f2ad.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
    <title>Gestión de Pacientes - Clínica San Luis</title>
  </head>
  <body>

  <img src="./assets/images/clinica-materno-infantil-san-luis-8CAD5EAD21371FB5thumbnail.jpeg" class="rounded mx-auto d-block" alt="Logo de la Clinica San Luis" width="200"/>
  <div class="container-sm p-3">
  <button class="btn btn-primary" onclick="showPatients()">Ver Pacientes</button>
  <button class="btn btn-primary" onclick="showRegisters()">Ver Registros</button>
  <button class="btn btn-primary" onclick="addPatient()">Agregar Paciente</button>
  <button class="btn btn-primary" onclick="addRegister()">Agregar Registro</button>
  </div>

  <div id="content-page"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>

</html>