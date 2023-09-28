<?php include("../../templates/header.php");?>

<br/>
<div class="card">
    <div class="card-header">
        Usuarios
    </div>
    <div class="card-body">
        
    </div>
    <div class="card-footer text-muted">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre del Usuario</label>
              <input type="text"
                class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Nombre del Usuario">
            </div>
            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <input type="password"
                class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="Escriba su contraseña">
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email"
                class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Escriba su correo">
              
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>  
            <a name="" id="" class="btn btn-danger" href="index.php" role="button">Cancelar</a>


        </form>
    </div>
</div>

<?php include("../../templates/footer.php");?>