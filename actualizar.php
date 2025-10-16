
<?php 
	include "./clases/Conexion.php";
	include "./clases/Crud.php";

	$crud = new Crud();
	$id = $_POST['id'];
	$datos = $crud->obtenerDocumento($id);
	$idMongo = $datos->_id;
?>


<?php include "./header.php"; ?>

<div class="container">
	<div class="row">
		<div class="col">
			<div class="card mt-4" style="border-radius:15px; background-color:#c1f0f6; box-shadow: 0 8px 20px rgba(0,0,0,0.15);">
				<div class="card-body">

					<a href="index.php" class="btn btn-outline-info">
						<i class="fa-solid fa-angles-left"></i> Regresar
					</a>
					<h2>Actualizar registro</h2>

					<form action="./procesos/actualizar.php" method="POST">
						<input type="text" hidden value="<?php echo $idMongo ?>" name="id">
						<label for="nom_mascota">Nombre de la mascota</label>
						<input type="text" class="form-control" id="nom_mascota" name="nom_mascota" value="<?php echo $datos->nom_mascota ?>">
						<label for="edad">edad</label>
						<input type="text" class="form-control" id="edad" name="edad" value="<?php echo $datos->edad ?>">
						<label for="especie">Especie</label>
						<input type="text" class="form-control" id="especie" name="especie" value="<?php echo $datos->especie ?>">
						<label for="raza">Raza</label>
						<input type="text" name="raza" id="raza" class="form-control" 
						value="<?php echo $datos->raza ?>">
						<label for="nombre_dueño">Nombre del dueño</label>
						<input type="text" name="nombre_dueño" id="nombre_dueño" class="form-control" 
						value="<?php echo $datos->nombre_dueño ?>">
						<button class="btn btn-warning mt-3">
							<i class="fa-solid fa-floppy-disk"></i> Actualizar
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "./scripts.php"; ?>