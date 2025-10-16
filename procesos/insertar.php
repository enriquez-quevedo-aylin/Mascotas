<?php
session_start();
require_once "../clases/Crud.php";

$Crud = new Crud();

$datos = [
    "nom_mascota" => $_POST['nom_mascota'] ?? '',
    "edad" => $_POST['edad'] ?? '',
    "especie" => $_POST['especie'] ?? '',
    "raza" => $_POST['raza'] ?? '',
    "nombre_dueño" => $_POST['nombre_dueño'] ?? ''
];

// Validar campos obligatorios
if ($datos['nom_mascota'] && $datos['especie'] && $datos['raza'] && $datos['nombre_dueño']) {
    $respuesta = $Crud->insertarDatos($datos);

    if (is_object($respuesta) && method_exists($respuesta, 'getInsertedId')) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("Location: ../index.php");
        exit();
    } else {
        die("Error al insertar: " . $respuesta);
    }
} else {
    die("Faltan campos obligatorios.");
}
?>
