


<?php
    include "./clases/Conexion.php";
    include "./clases/Crud.php";
    include "./header.php"; 

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
?>

<div class="container">
        <div class="row">
            <div class="col">
              <div class="card mt-4 fondoDelete" style="border-radius:15px; background-color:#c1f0f6; box-shadow: 0 8px 20px rgba(0,0,0,0.15);">
                <div class="card-body">

                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Eliminar registro de Mascota</h2>
                    
                    <table class="table table-bordered">
                        <thead>
                            <th>Nombre de la mascota</th>
                            <th>Edad</th>
                            <th>Especie</th>
                            <th>Raza</th>
                            <th>Nombre del dueño</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $datos->nom_mascota; ?></td>
                                <td><?php echo $datos->edad; ?></td>
                                <td><?php echo $datos->especie; ?></td>
                                <td><?php echo $datos->raza; ?></td>
							    <td><?php echo $datos->nombre_dueño; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="alert alert-danger" role="alert">
                        <p>¿Esta seguro de eliminar este registro de la Mascota?</p>
                        <p>
                            Una vez eliminado no podra ser recuperado!!
                        </p>
                    </div>
                    <form action="./procesos/eliminar.php" method="POST">
                        <input type="text" name="id" value="<?php echo $datos->_id; ?>" hidden>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                        </button>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>

<?php include "./scripts.php"; ?>