<!DOCTYPE html>
<html>
<head>
  <title>Modificar un producto</title>
  <meta charset="utf-8">
</head>
<body>
  <form action='<?php print RUTA_APP."productos/modificar/"; ?>' method="POST">
    <table>
      
        <td><label for="nombre_producto">Nombre del Producto:</label></td>
        <td><input type="text" name="nombre_producto" value="<?php print isset($data["nombre"]) ? $data["nombre"] : ''; ?>"></td>
      </tr>
      <tr>
        <td><label for="formula">Fórmula:</label></td>
        <td><input type="text" name="formula" value="<?php print isset($data["formula"]) ? $data["formula"] : ''; ?>"></td>
      </tr>
      <tr>
        <td><label for="caducidad">Caducidad:</label></td>
        <td><input type="text" name="caducidad" value="<?php print isset($data["caducidad"]) ? $data["caducidad"] : ''; ?>"></td>
      </tr>
      <tr>
        <td><label for="precio">Precio:</label></td>
        <td><input type="text" name="precio" value="<?php print isset($data["precio"]) ? $data["precio"] : ''; ?>"></td>
      </tr>
      <tr>
        <td><input type="hidden" value="<?php print isset($data["id"]) ? $data["id"] : ''; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>

  <a href='<?php print RUTA_APP."productos/"; ?>'>Regresar</a>
</body>
</html>
