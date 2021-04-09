<?php require_once('../../crud/paciente/read.php'); ?>
<div class="container-sm bg-light p-3 rounded">
<h2>Pacientes</h2>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Cédula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($patients as $paciente): ?>
    <tr>
      <th scope="row"><?= $paciente->cod_paciente ?></th>
      <td><?= $paciente->cedula ?></td>
      <td><?= $paciente->nombre ?></td>
      <td><?= $paciente->apellidos ?></td>
      <td><?= $paciente->direccion ?></td>
      <td><?= $paciente->telefono ?></td>
      <td>
      <button onclick="editPatient(this.value)" value="<?= $paciente->cod_paciente ?>"><i class="fas fa-user-edit"></i></button>
      <button onclick="viewRegisters(this.value)" value="<?= $paciente->cod_paciente ?>"><i class="far fa-file-alt"></i></button>
      <button onclick="deletePatient(this.value)" value="<?= $paciente->cod_paciente ?>"><i class="far fa-trash-alt"></i></td></button>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
</div>