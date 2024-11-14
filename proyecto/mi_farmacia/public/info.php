<!-- public/info.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Proyecto</title>
    <link rel="stylesheet" href=" public/css/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Información de Implementación del Proyecto</h1>

        <h2>1. Liga de Descarga</h2>
        <p>Descarga el proyecto desde el repositorio oficial en GitHub:</p>
        <a href="https://github.com/proyecmike/CRUD-FARMACIA.git" target="_blank">Repositorio en GitHub</a><br><br>
        <a href=" " target="_blank">Descargar directo</a><br><br>
        <a href="descripcion.dm">Descargar descripción</a>
        <h2>2. Instrucciones de Instalación</h2>
        <ol>
            <li>Clona el repositorio en tu entorno local.</li>
            <li>Instala XAMPP y asegúrate de que Apache y MySQL estén activos.</li>
            <li>Crea una base de datos llamada <strong>farmacia</strong> en PHPMyAdmin.</li>
            <li>Ejecuta el siguiente script para crear la tabla en la base de datos:</li>
        </ol>

        <pre>
        CREATE TABLE productos (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre_producto VARCHAR(255) NOT NULL,
            formula VARCHAR(255),
            caducidad DATE,
            precio DECIMAL(10,2)
        );
        </pre>

        <h2>3. Descripción de la Implementación</h2>
        <p>Este sistema de gestión permite administrar productos de una farmacia mediante operaciones CRUD. Cada producto puede ser registrado, modificado, eliminado y listado. El proyecto se estructura en un modelo MVC, facilitando la organización del código y la separación de responsabilidades.</p>

        <h2>4. Datos del Desarrollador</h2>
        <table>
            <tr><th>Nombre</th><td>Hernández Guerrero Miguel Angel</td></tr>
            <tr><th>Correo</th><td>mhernandezguerrero033@gmail.com</td></tr>
            <tr><th>GitHub</th><td><a href="https://github.com/proyecmike" target="_blank">https://github.com/proyecmike</a></td></tr>
        </table>

        <p><a href="index.php">Volver a la página principal</a></p>
    </div>
</body>
</html>
