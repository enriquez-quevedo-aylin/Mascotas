
<?php /*
require_once $_SERVER['DOCUMENT_ROOT'] . "/crud_php/vendor/autoload.php";
//require_once __DIR__ . "/../vendor/autoload.php";

    class Conexion {
        public static function conectar() {
           try {
                $servidor = "127.0.0.1";
                $puerto = "27017";
                $usuario = "mongoadmin";
                $password = "123456";
                $BD = "crud";
                $cadenaConexion = "mongodb://" . 
                                    $usuario . ":" . 
                                    $password . "@". 
                                    $servidor .":". 
                                    $puerto ."/". 
                                    $BD;
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($BD);
           } catch (\Throwable $th) {
               return $th->getMessage();
           }
        }
    }
*/

require_once __DIR__ . "/../vendor/autoload.php"; // ruta al autoload de Composer

class Conexion {
    public static function conectar() {
        try {
            $servidor = "172.25.202.231"; // IP de Ubuntu/WSL
            $puerto = "27017";
            $usuario = "mongoadmin";
            $password = "123456";
            $BD = "mascotas";

            $cadenaConexion = "mongodb://$usuario:$password@$servidor:$puerto/$BD";
            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($BD);

        } catch (\Throwable $th) {
            die("Error de conexión: " . $th->getMessage());
        }
    }
}

?>