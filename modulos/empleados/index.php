<?php include("../../templates/header.php");?>

<br/>
<h4>Empleados</h4>
<div class="card">
    <div class="card-header">
        
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Oscar uh</td>
                        <td>imageng.jpg</td>
                        <td>CV.pdf</td>
                        <td>Prgramador</td>
                        <td>12/12/2019</td>
                        <td><a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                        |<a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                        |<a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
                    
                </tbody>
            </table> 
        </div>
        
    </div>

</div>
<?php include("../../templates/footer.php");?>