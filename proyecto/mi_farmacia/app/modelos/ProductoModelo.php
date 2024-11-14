<?php
/**
 * ProductosModelo.php     
 * Capa modelo que contiene a la interfaz <$db> para gestionar 
 * las operaciones de lectura/escritura/eliminación de un recordSet
 * de una tabla en la base de datos.
 * ProductosModelo.php contiene:
 *  i) Define una interfaz para gestionar consultas a una base de datos.
 *  ii) getProductos() retorna un arreglo de una colección de recordSet
 *      y retorna todos los elementos de la tabla.
 *  iii) getProducto() retorna un arreglo de UN recorSet.
 *  iv) insertarProducto() inserta un recorSet y de ser verdadero muestra el dashboard.
 *  v) modificarProducto() actualiza un recordSet y de ser verdadero muestra el dashboard.
 *  vi) borrarProducto() elimina un recorSet y de ser verdadero muestra el dashboard.  
 */
class ProductoModelo
{
    private $db;
  
    /* Retorna una interfaz para gestionar operaciones de 
       directivas con bases de datos */
    function __construct()
    {
        $this->db = new MySQLdb(); // Define interfaz para gestionar php-base de datos
    }

    /* Retorna un arreglo de todos los elementos tipo recordSet 
       de la tabla productos */
    public function getProductos()
    {
        $data = $this->db->querySelect("SELECT * FROM productos");
        return $data;
    }

    /* Retorna UN recordSet de la tabla producto */
    public function getProducto($id)
    {
        $data = $this->db->querySelect("SELECT * FROM productos WHERE id=" . $id);
        return $data;
    }

    /* Inserta un recorSet a la tabla productos */
    public function insertarProducto($nombre_producto, $formula, $caducidad, $precio)
    { 
        /* Confecciona una consulta de inserción de un recorSet */
        $sql = "INSERT INTO productos (id, nombre_producto, formula, caducidad, precio) VALUES (0, "; // 0: autoincrementa ID
        $sql .= "'" . $nombre_producto . "', ";
        $sql .= "'" . $formula . "', ";
        $sql .= "'" . $caducidad . "', ";
        $sql .= "'" . $precio . "')";

        /* Ejecuta una sentencia de inserción */
        if ($this->db->queryNoSelect($sql)) {
            /* Muestra dashboard */
            header("location:" . RUTA_APP . "productos");
            exit();
        } else {
            exit("Error al insertar los datos del producto");
        }
    }

    /* Realiza una actualización de un recorSet a 
       una tabla de productos, mediante una consulta */
    public function modificarProducto($id, $nombre_producto, $formula, $caducidad, $precio)
    {
        /* Confecciona la sentencia de actualización */
        $sql = "UPDATE productos SET ";
        $sql .= "nombre_producto='" . $nombre_producto . "', ";
        $sql .= "formula='" . $formula . "', ";
        $sql .= "caducidad='" . $caducidad . "', ";
        $sql .= "precio='" . $precio . "' ";
        $sql .= "WHERE id=" . $id;

        /* Ejecuta una sentencia de actualización */
        if ($this->db->queryNoSelect($sql)) {
            /* Muestra el dashboard */
            header("location:" . RUTA_APP . "productos");
            exit();
        } else {
            exit("Error al modificar los datos del producto");
        }
    }

    /* Borra un registro seleccionado $id mediante una
       consulta no selectiva */
    public function borrarProducto($id)
    {
       

        /* Confecciona una sentencia para borrar un registro
           y ejecuta la sentencia */
        $sql = "DELETE FROM productos ";
        $sql .= "WHERE id=" . $id;
    
        /* Ejecuta la sentencia de eliminación de registro */
        if ($this->db->queryNoSelect($sql)) { 
            /* Muestra dashboard */
            header("location:" . RUTA_APP . "productos");
            exit();
        } else {
            exit("Error al borrar el producto");
        }
    }
}
?>
