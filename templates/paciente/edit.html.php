<?php require_once('../../crud/paciente/edit.php'); ?>
<div class="container-sm bg-light">
<?php if( isset($paciente) ): ?>
  <form action="./crud/paciente/update.php" method="POST">
  <div class="form-group">
      <label for="cod_paciente">Código</label>
      <input type="number" class="form-control" id="cod_paciente" name="cod_paciente" value="<?= isset($paciente) ? $paciente->cod_paciente : '' ?>">
    </div>
<?php else: ?>
  <form action="./crud/paciente/create.php" method="POST">
<?php endif ?>
    <div class="form-group">
      <label for="cedula">Cédula</label>
      <input type="number" class="form-control" id="cedula" name="cedula" value="<?= isset($paciente) ? $paciente->cedula : '' ?>">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="<?= isset($paciente) ? $paciente->nombre : '' ?>">
    </div>
    <div class="form-group">
      <label for="apellidos">Apellidos</label>
      <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= isset($paciente) ? $paciente->apellidos : '' ?>">
    </div>
    <div class="form-group">
      <label for="direccion">Dirección</label>
      <input type="text" class="form-control" id="direccion" name="direccion" value="<?= isset($paciente) ? $paciente->direccion : '' ?>">
    </div>
    <div class="form-group">
      <label for="telefono">Teléfono</label>
      <input type="tel" class="form-control" id="telefono" name="telefono" value="<?= isset($paciente) ? $paciente->telefono : '' ?>">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>