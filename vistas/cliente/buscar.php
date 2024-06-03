<?php 

include_once '../../vistas/templates/header.php'; ?>

<h1 class="text-center">FORMULARIO DE CLIENTES</h1>
<div class="row justify-content-center">
    <form action="../../controladores/clientes/buscar.php" method="GET" class="border bg-light shadow rounded p-4 col-lg-6">
        <div class="row mb-3">
            <div class="col">
                <label for="cli_nombre">NOMBRE</label>
                <input type="text" name="cli_nombre" id="cli_nombre" class="form-control" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="cli_apellido">APELLIDO</label>
                <input type="text" name="cli_apellido" id="cli_apellido" class="form-control" >
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-info w-100 bg-dark text-white"> BUSCAR</button>
            </div>
        </div>
    </form>
</div>

<?php include_once '../../vistas/templates/footer.php'; ?>

   