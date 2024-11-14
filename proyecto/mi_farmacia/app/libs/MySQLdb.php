<?php
/**
 * Abre la base de datos de tipo MySQL
 */
class MySQLdb {
    private $host = "localhost";
    private $usuario = "root";
    private $clave = ""; // XAMPP está vacío, en MAMP root
    private $db = "farmacia"; // Cambiado de "libreria" a "farmacia"
    /*private $puerto = "";*/ // MAMP necesitamos el puerto (puedes configurarlo si es necesario)
    private $conn;
  
    function __construct() {
        $this->conn = mysqli_connect($this->host, $this->usuario, $this->clave, $this->db);
        if (mysqli_connect_errno()) {
            printf("Error en la conexión con la base de datos: %s", mysqli_connect_errno()); 
            exit();
        } 

        if (!mysqli_set_charset($this->conn, "utf8")) {
            printf("Error en la conversión de caracteres: %s", mysqli_error($this->conn)); 
            exit();
        } 
    }

    public function querySelect($sql) {
        $data = array();
        $r = $this->conn->query($sql);
        while ($row = mysqli_fetch_assoc($r)) {
            array_push($data, $row);
        }
        return $data;
    }

    public function queryNoSelect($sql) {
        // Insert, Update y Delete 
        return $this->conn->query($sql);
    }
}
?>
