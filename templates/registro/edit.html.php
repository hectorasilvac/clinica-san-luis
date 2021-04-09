<?php require_once('../../crud/registro/edit.php'); ?>
<div class="container-sm bg-light">
<?php if( isset($registro) ): ?>
  <form action="./crud/registro/update.php" method="POST">
  <div class="form-group">
      <label for="registro">Código</label>
      <input type="number" class="form-control" id="registro" name="registro" value="<?= isset($registro) ? $registro->registro : '' ?>">
    </div>
<?php else: ?>
  <form action="./crud/registro/create.php" method="POST">
<?php endif ?>
<div class="form-group">
      <label for="empresa">Empresa</label>
      <input type="text" class="form-control" id="empresa" name="empresa" value="<?= isset($registro) ? $registro->empresa : '' ?>">
    </div>
    <div class="form-group">
      <label for="fecha_ingreso">Fecha Ingreso</label>
      <input type="datetime-local" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?= isset($registro) ? date("Y-m-d\TH:i:s", strtotime($registro->fecha_ingreso)) : '' ?>">
    </div>
    <div class="form-group">
      <label for="fecha_egreso">Fecha Egreso</label>
      <input type="datetime-local" class="form-control" id="fecha_egreso" name="fecha_egreso" value="<?= isset($registro) ? date("Y-m-d\TH:i:s", strtotime($registro->fecha_egreso)) : '' ?>">
    </div>
    <div class="form-group">
      <label for="diagnostico_ingreso">Diagnostico Ingreso</label>
      <input type="text" class="form-control" id="diagnostico_ingreso" name="diagnostico_ingreso" value="<?= isset($registro) ? $registro->diagnostico_ingreso : '' ?>">
    </div>
    <div class="form-group">
      <label for="diagnostico_egreso">Diagnostico Egreso</label>
      <input type="text" class="form-control" id="diagnostico_egreso" name="diagnostico_egreso" value="<?= isset($registro) ? $registro->diagnostico_egreso : '' ?>">
    </div>
    <div class="form-group">
      <label for="cod_paciente">Código Paciente</label>
      <input type="number" class="form-control" id="cod_paciente" name="cod_paciente" value="<?= isset($registro) ? $registro->cod_paciente : '' ?>">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>