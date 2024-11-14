# Proyecto de Farmacia

Este proyecto es un sistema de gestión para una farmacia que permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) en productos farmacéuticos. Está desarrollado en PHP y utiliza MySQL como base de datos. Este sistema permite gestionar el inventario de productos, proporcionando funcionalidades como agregar, modificar y eliminar productos, además de visualizar información detallada de cada uno.

## Tecnologías Utilizadas

- **PHP**: Para la lógica de negocio.
- **MySQL**: Base de datos relacional para el almacenamiento de información.
- **HTML y CSS**: Para la estructura y el estilo de la interfaz de usuario.
- **XAMPP**: Servidor de desarrollo local que integra Apache y MySQL.

## Requisitos Previos

- **XAMPP**: Asegúrate de tener instalado XAMPP (o un servidor similar que incluya Apache y MySQL) en tu máquina.
- **Git** (opcional): Si deseas clonar el repositorio desde GitHub.

## Estructura de Carpetas

La estructura de carpetas de este proyecto es la siguiente:

```
proyecto/
├── descripcion.dm                 # Descripción del proyecto en formato markdown
├── mi_farmacia/                   # Carpeta principal del proyecto de la farmacia
│   ├── public/                    # Contiene archivos accesibles al público
│   │   ├── index.php              # Página de inicio de la aplicación
│   │   ├── info.php               # Página de información del proyecto
│   │   └── css/
│   │       └── estilo.css         # Archivo de estilos para la aplicación
│   ├── app/                       # Lógica principal de la aplicación
│   │   ├── modelos/               # Contiene los modelos de la aplicación
│   │   │   └── ProductoModelo.php # Modelo para manejar productos en la base de datos
│   │   ├── vistas/                # Vistas HTML/PHP para el frontend
│   │   │   └── productos/         # Vistas específicas para productos
│   │   │       ├── alta.php       # Formulario para dar de alta un producto
│   │   │       ├── modificar.php  # Formulario para modificar un producto
│   │   │       └── borrar.php     # Página para confirmar la eliminación de un producto
│   │   ├── controladores/         # Lógica de controladores de la aplicación
│   │   │   └── Productos.php      # Controlador para gestionar productos
│   │   ├── inicio.php             # Archivo de inicio y configuración de la app
│   │   └── libs/
│   │       └── MySQLdb.php        # Archivo de conexión y operaciones con MySQL
│   └── README.md                  # Instrucciones y documentación del proyecto
```

## Configuración de la Base de Datos

1. **Crear la base de datos**:
   - Inicia XAMPP y abre **phpMyAdmin**.
   - Crea una base de datos llamada `farmacia`.

2. **Crear la tabla `productos`**:
   - Dentro de la base de datos `farmacia`, ejecuta el siguiente SQL para crear la tabla:

     ```sql
     CREATE TABLE productos (
         id INT AUTO_INCREMENT PRIMARY KEY,
         nombre_producto VARCHAR(100) NOT NULL,
         formula VARCHAR(255) NOT NULL,
         caducidad DATE NOT NULL,
         precio DECIMAL(10,2) NOT NULL
     );
     ```

3. **Configurar la conexión a la base de datos**:
   - En el archivo `app/libs/MySQLdb.php`, asegúrate de que los parámetros de conexión sean correctos:

     ```php
     private $host = "localhost";
     private $usuario = "root";
     private $clave = ""; // XAMPP usa clave vacía por defecto
     private $db = "farmacia";
     ```

## Instalación del Proyecto

1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/usuario/proyecto-farmacia.git
   ```

2. **Mover el proyecto a XAMPP**:
   - Coloca la carpeta `mi_farmacia` en el directorio `htdocs` de XAMPP.

3. **Configurar el archivo de inicio**:
   - En el archivo `public/index.php`, el código de inicio debe cargar el controlador principal:
   
     ```php
     <?php
     require_once("../app/inicio.php");
     $control = new Control();
     ?>
     ```

## Páginas Disponibles

- **Página Principal**: `http://localhost/proyecto/mi_farmacia/public/`
  - Muestra la introducción y da acceso a las funcionalidades del sistema.

- **Página de Información**: `http://localhost/proyecto/mi_farmacia/public/info.php`
  - Contiene información adicional sobre la implementación del proyecto, tales como:
    - **Liga de descarga del repositorio**.
    - **Instrucciones de instalación**.
    - **Descripción detallada del proyecto**.
    - **Información del desarrollador**.

## Descripción de la Implementación

Este proyecto sigue el patrón MVC (Modelo-Vista-Controlador):

- **Modelo** (`app/modelos/ProductoModelo.php`): Interactúa con la base de datos y realiza operaciones sobre la tabla `productos`.
- **Vista** (`app/vistas/productos/`): Contiene las páginas de alta, modificación, y borrado de productos.
- **Controlador** (`app/controladores/Productos.php`): Gestiona la lógica de negocio y conecta los modelos con las vistas.

## Instrucciones de Uso

1. **Agregar un producto**:
   - Accede a la página de alta para agregar un nuevo producto con nombre, fórmula, fecha de caducidad y precio.

2. **Modificar un producto**:
   - Desde la lista de productos, selecciona la opción "Modificar" para actualizar la información de un producto.

3. **Eliminar un producto**:
   - Desde la lista de productos, selecciona "Borrar" y confirma la eliminación.

## Datos del Desarrollador

- **Nombre**: Hernández Guerrero Miguel Angel
- **Email**: mhernandezguerrero033@gmail.com
- **GitHub**: https://github.com/proyecmike

