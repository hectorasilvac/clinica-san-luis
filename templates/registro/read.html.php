<?php if ( isset($_POST['id']) && count($_POST) === 1 ) {
    require_once('../../crud/paciente/registers_by_pacient.php');
} else {
  require_once('../../crud/registro/read.php');
}
?>

<div class="container-sm bg-light p-3 rounded">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Registro</th>
      <th scope="col">Empresa</th>
      <th scope="col">Fecha Ingreso</th>
      <th scope="col">Fecha Egreso</th>
      <th scope="col">Diagnostico Ingreso</th>
      <th scope="col">Diagnostico Egreso</th>
      <th scope="col">Código Paciente</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($registers as $registro): ?>
    <tr>
      <th scope="row"><?= $registro->registro ?></th>
      <td><?= $registro->empresa ?></td>
      <td><?= $registro->fecha_ingreso ?></td>
      <td><?= $registro->fecha_egreso ?></td>
      <td><?= $registro->diagnostico_ingreso ?></td>
      <td><?= $registro->diagnostico_egreso ?></td>
      <td><?= $registro->cod_paciente ?></td>

      <td>
      <button onclick="editRegister(this.value)" value="<?= $registro->registro ?>"><i class="fas fa-user-edit"></i></button>
      <button onclick="deleteRegister(this.value)" value="<?= $registro->registro ?>"><i class="far fa-trash-alt"></i></td></button>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
</div>