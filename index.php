<?php 
session_start();
include "./clases/Conexion.php";
include "./clases/Crud.php";

$crud = new Crud();
$datos = $crud->mostrarDatos();

$mensaje = '';
if (isset($_SESSION['mensaje_crud'])) {
    $mensaje = $crud->mensajesCrud($_SESSION['mensaje_crud']);
    unset($_SESSION['mensaje_crud']);
}

// Array de colores suaves para las tarjetas
$colores = ['#ffadad','#ffd6a5','#fdffb6','#caffbf','#9bf6ff','#a0c4ff','#bdb2ff','#ffc6ff'];
?>

<?php include "./header.php"; ?>

<div class="container">
    <h2>Mis Mascotas</h2>
    <a href="./agregar.php" class="btn btn-primary add-btn">
        <i class="fa-solid fa-plus"></i> Agregar Mascota
    </a>

    <div class="mascota-grid">
        <?php 
        $i = 0;
        foreach ($datos as $item) { 
            $color_fondo = $colores[$i % count($colores)];
            $i++;
        ?>
            <div class="card card-mascota" style="background-color: <?= $color_fondo ?>;">
                <div class="card-header" style="background-color: rgba(0,0,0,0.2);">
                    <?= $item->nom_mascota ?>
                </div>
                <div class="card-body text-center">
                    <p><strong>Edad:</strong> <?= $item->edad ?></p>
                    <p><strong>Especie:</strong> <?= $item->especie ?></p>
                    <p><strong>Raza:</strong> <?= $item->raza ?></p>
                    <p><strong>Dueño:</strong> <?= $item->nombre_dueño ?></p>

                    <div class="d-flex justify-content-center mt-3">
                        <form action="./actualizar.php" method="POST">
                            <input type="hidden" name="id" value="<?= $item->_id ?>">
                            <button class="btn btn-warning btn-card">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </form>
                        <form action="./eliminar.php" method="POST">
                            <input type="hidden" name="id" value="<?= $item->_id ?>">
                            <button class="btn btn-danger btn-card">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include "./scripts.php"; ?>

<script>
<?php
if($mensaje != '') {
    echo $mensaje . ';';
}
?>
</script>
