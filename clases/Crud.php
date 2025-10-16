<?php
require_once "Conexion.php";

class Crud {
    // Mostrar todas las mascotas
    public function mostrarDatos() {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            return $coleccion->find(); // Cursor iterable
        } catch (\Throwable $th) {
            return []; // Retorna array vacío si falla
        }
    }

    // Obtener una mascota por ID
    public function obtenerDocumento($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            return $coleccion->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
        } catch (\Throwable $th) {
            return null;
        }
    }

    // Insertar una mascota
    public function insertarDatos($datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            return $coleccion->insertOne($datos);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    // Actualizar una mascota
    public function actualizar($id, $datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            return $coleccion->updateOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)],
                ['$set' => $datos]
            );
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    // Eliminar una mascota
    public function eliminar($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->mascotas;
            return $coleccion->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    // Mensajes tipo SweetAlert
    public function mensajesCrud($mensaje) {
        $msg = '';
        if ($mensaje == 'insert') $msg = 'swal("Excelente!", "Agregado con éxito!", "success")';
        else if ($mensaje == 'update') $msg = 'swal("Excelente!", "Actualizado con éxito!", "info")';
        else if ($mensaje == 'delete') $msg = 'swal("Excelente!", "Eliminado con éxito!", "warning")';
        return $msg;
    }
}
?>
