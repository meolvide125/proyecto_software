<?php include("../../templates/header.php");?>

<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Usuario</a>
    </div>
    <div class="card-body">
    <div class="table-responsive-sm">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>pepito25</td>
                <td>****</td>
                <td>pepis32@gmail.com</td>
                <td><input name="btneditar" id="btneditar" class="btn btn-primary" type="button" value="Editar">|
                <input name="btneliminar" id="btneliminar" class="btn btn-danger" type="button" value="Eliminar"></td>|
                
            </tr>
            
        </tbody>
    </table>
</div>
    </div>
    
</div>




<?php include("../../templates/footer.php");?>