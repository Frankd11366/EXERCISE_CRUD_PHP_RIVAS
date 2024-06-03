<?php

require '../../modelos/Cliente.php';

$_GET['cli_id'] = filter_var(base64_decode($_GET['cli_id']), FILTER_SANITIZE_NUMBER_INT);
$cliente = new Cliente();

$ClienteRegistrado = $cliente->buscarId($_GET['cli_id']);

include_once '../../vistas/templates/header.php'; ?>
<h1 class="text-center">MODIFICAR DE CLIENTE</h1>
<div class="row justify-content-center">
    <form action="../../controladores/cliente/modificar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <input type="hidden" name="cli_id" id="cli_id" class="form-control" required value="<?= $ClienteRegistrado['cli_id'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nombre">NOMBRE</label>
                <input type="text" name="cli_nombre" id="cli_nombre" class="form-control" required value="<?= $ClienteRegistrado['cli_nombre'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_apellido">APELLIDO</label>
                <input type="text" name="cli_apellido" id="cli_apellido" class="form-control" required value="<?= $ClienteRegistrado['cli_apellido'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nit">NIT</label>
                <input type="text" name="cli_nit" id="cli_nit" class="form-control" required value="<?= $ClienteRegistrado['cli_nit'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_telefono">TELEFONO</label>
                <input type="text" name="cli_telefono" id="cli_telefono" class="form-control" required value="<?= $ClienteRegistrado['cli_telefono'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-warning w-100">Modificar</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/cliente/buscar.php" class="btn btn-secondary w-100">Cancelar</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>