<?php
/**
 * Productos
 */
class Productos extends Controlador
{
    private $modelo;

    /* Define un objeto para acceder a los métodos definidos en ProductoModelo */
    function __construct()
    {
        $this->modelo = $this->modelo("ProductoModelo");
    }

    /* Retorna de la tabla productos un arreglo de todos los registros y renderiza en el dashboard */
    public function index()
    {
        $data = $this->modelo->getProductos();
        /* Renderiza en el dashboard los datos del recordSet */
        $this->vista("ProductosVista", $data);
    }

    /* Se realiza una petición de envío de un arreglo de datos, generada por un <submit> vía POST */
    public function modificar($id = "")
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            /* Recolecta atributos de un registro $id */
            $id = isset($_POST["id"]) ? $_POST["id"] : "";
            $nombre_producto = isset($_POST["nombre_producto"]) ? $_POST["nombre_producto"] : "";
            $formula = isset($_POST["formula"]) ? $_POST["formula"] : "";
            $caducidad = isset($_POST["caducidad"]) ? $_POST["caducidad"] : "";
            $precio = isset($_POST["precio"]) ? $_POST["precio"] : "";

            /* Asigna y actualiza los atributos de un registro id seleccionado */
            $this->modelo->modificarProducto($id, $nombre_producto, $formula, $caducidad, $precio);
        } else {
            $data = $this->modelo->getProducto($id);

            /* Verificar que el arreglo $data[0] tiene las claves necesarias */
            $datos = [
                "id" => $id,
                "nombre" => isset($data[0]["nombre_producto"]) ? $data[0]["nombre_producto"] : "",
                "formula" => isset($data[0]["formula"]) ? $data[0]["formula"] : "",
                "caducidad" => isset($data[0]["caducidad"]) ? $data[0]["caducidad"] : "",
                "precio" => isset($data[0]["precio"]) ? $data[0]["precio"] : ""
            ];
            
            $this->vista("ProductosModificar", $datos);
        }
    }
    public function borrar($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Llama al método borrarProducto con el ID desde el modelo
            $this->modelo->borrarProducto($id);
        } else {
            // Obtén los datos del producto a borrar
            $data = $this->modelo->getProducto($id);
    
            // Verifica que los datos están siendo obtenidos correctamente
            if (isset($data[0])) {
                // Pasamos solo el primer registro
                $this->vista('ProductosBorrar', $data[0]);
            } else {
                echo "Error: Producto no encontrado.";
            }
        }
    }
    
    
    public function alta()
{
    // Si el método de solicitud es POST, procesa los datos enviados
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Recolecta los datos del formulario
        $nombre_producto = isset($_POST["nombre_producto"]) ? $_POST["nombre_producto"] : "";
        $formula = isset($_POST["formula"]) ? $_POST["formula"] : "";
        $caducidad = isset($_POST["caducidad"]) ? $_POST["caducidad"] : "";
        $precio = isset($_POST["precio"]) ? $_POST["precio"] : "";

        // Llama al método del modelo para insertar el producto en la base de datos
        $this->modelo->insertarProducto($nombre_producto, $formula, $caducidad, $precio);

    } else {
        // Si no es una solicitud POST, muestra la vista del formulario para dar de alta un producto
        $this->vista("ProductosAlta");
    }
}


}
