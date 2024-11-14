<?php
/**
 * Clase base controladora para la gestión de productos en la farmacia
 */
class Controlador
{
    // Método para cargar un modelo
    public function modelo($modelo)
    {
        // Ruta del archivo del modelo
        $rutaModelo = "../app/modelos/" . $modelo . ".php";
        
        // Verifica si el archivo del modelo existe
        if (file_exists($rutaModelo)) {
            require_once($rutaModelo);
            return new $modelo(); // Instancia y retorna el modelo
        } else {
            die("Error: El modelo '" . $modelo . "' no se encuentra.");
        }
    }

    // Método para cargar una vista
    public function vista($vista, $data = [])
    {
        // Ruta del archivo de la vista
        $rutaVista = "../app/vistas/" . $vista . ".php";
        
        // Verifica si el archivo de la vista existe
        if (file_exists($rutaVista)) {
            require_once($rutaVista);
        } else {
            die("Error: La vista '" . $vista . "' no existe.");
        }
    }
}
?>
