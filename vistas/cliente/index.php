<?php 

include_once '../../vistas/templates/header.php'; ?>

<h1 class="text-center">FORMULARIO DE CLIENTES</h1>
<div class="row justify-content-center">
    <form action="../../controladores/cliente/guardar.php" method="POST" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nombre">NOMBRE</label>
                <input type="text" name="cli_nombre" id="cli_nombre" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_apellido">APELLIDO</label>
                <input type="text" name="cli_apellido" id="cli_apellido" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nit">NIT</label>
                <input type="number" name="cli_nit" id="cli_nit" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_telefono">TELEFONO</label>
                <input type="number" name="cli_telefono" id="cli_telefono" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" class="btn btn-secondary w-100">GUARDAR</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../../controladores/cliente/buscar.php" class="btn btn-secondary w-100">BUSCAR</a>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>

   