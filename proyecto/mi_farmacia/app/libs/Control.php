<?php
/**
 * Clase que controla todo el flujo
 */
class Control {
    protected $controlador = "Productos"; // Cambiado de "Libros" a "Productos"
    protected $metodo = "index";
    protected $parametros = [];
  
    function __construct() {
        $url = $this->separarURL();

        if ($url != "" && file_exists("../app/controladores/" . ucwords($url[0]) . ".php")) {
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }
        require_once("../app/controladores/" . ucwords($this->controlador) . ".php");
        $this->controlador = new $this->controlador;

        /*** Iniciamos el método ***/
        if (isset($url[1])) {
            if (method_exists($this->controlador, $url[1])) {
                $this->metodo = $url[1];
                unset($url[1]);
            }
        }
        
        $this->parametros = $url ? array_values($url) : [];

        call_user_func_array(
            [$this->controlador, $this->metodo], 
            $this->parametros
        );
    }

    private function separarURL() {
        $url = "";
        if (isset($_GET["url"])) {
            // Eliminamos la última diagonal
            $url = rtrim($_GET["url"], "/");
            // Limpiamos caracteres ajenos a una URL
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // Separamos
            $url = explode("/", $url);
        }
        // Regresamos el arreglo
        return $url;
    }
}
?>
