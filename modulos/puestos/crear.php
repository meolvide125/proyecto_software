<?php
include("../../db.php");
if($_POST){
    print_r($_POST);

    $nombredelpuesto=(isset($_POST["nombre_puesto"])?$_POST["nombre_puesto"]:"");

    $sentencia=$conexion->prepare("INSERT INTO tbl_puestos(id,nombre_puesto)VALUES(null, :nombre_puesto)");

    $sentencia->bindParam(":nombre_puesto",$nombredelpuesto);
    $sentencia->execute();  
    header("Location:index.php");

}


?>


<?php include("../../templates/header.php");?>

<br/>
<div class="card">
    <div class="card-header">
        Puestos
    </div>
    <div class="card-body">
        
    </div>
    <div class="card-footer text-muted">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="nombrepuesto" class="form-label">Nombre del Puesto</label>
              <input type="text"
                class="form-control" name="nombrepuesto" id="nombrepuesto" aria-describedby="helpId" placeholder="Nombre del Puesto">
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>  
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>


        </form>
    </div>
</div>

<?php include("../../templates/footer.php");?>