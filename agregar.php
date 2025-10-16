	<?php include "./header.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card mt-4" style="border-radius:15px; background-color:#c1f0f6; box-shadow: 0 8px 20px rgba(0,0,0,0.15);">
					<div class="card-body">
						<a href="index.php" class="btn btn-outline-info">
							<i class="fa-solid fa-angles-left"></i> Regresar
						</a>
						<h2>Agregar nueva mascota</h2>
						<form action="./procesos/insertar.php" method="post">
							<label for="nom_mascota">Nombre de la mascota</label>
							<input type="text" class="form-control" id="nom_mascota" name="nom_mascota" required>
							<label for="edad">Edad</label>
							<input type="text" class="form-control" id="edad" name="edad">
							<label for="especie">Especie</label>
							<input type="text" class="form-control" id="especie" name="especie" required>
							<label for="raza">Raza</label>
							<input type="text" name="raza" id="raza" class="form-control" required>
							<label for="nombre_dueño">Nombre del dueño</label>
							<input type="text" name="nombre_dueño" id="nombre_dueño" class="form-control" required>
							<button class="btn btn-primary mt-3">
								<i class="fa-solid fa-floppy-disk"></i> Agregar
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<style>
	  .btn:hover {
        background-color: #ff6347;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
</style>
</style>
	<?php include "./scripts.php"; ?>