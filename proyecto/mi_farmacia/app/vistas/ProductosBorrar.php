<!DOCTYPE html>
<html>
<head>
  <title>Dar de baja un producto</title>
  <meta charset="utf-8">
</head>
<body>
<form action='<?php print RUTA_APP."productos/borrar/".$data["id"]; ?>' method="POST">
  <table>
    <tr>
      <td><label for="nombre_producto">Nombre del Producto:</label></td>
      <td><input type="text" name="nombre_producto" disabled="disabled" value="<?php echo $data["nombre_producto"]; ?>"></td>
    </tr>
    <tr>
      <td><label for="formula">Fórmula:</label></td>
      <td><input type="text" name="formula" disabled="disabled" value="<?php echo $data["formula"]; ?>"></td>
    </tr>
    <tr>
      <td><label for="caducidad">Caducidad:</label></td>
      <td><input type="text" name="caducidad" disabled="disabled" value="<?php echo $data["caducidad"]; ?>"></td>
    </tr>
    <tr>
      <td><label for="precio">Precio:</label></td>
      <td><input type="text" name="precio" disabled="disabled" value="<?php echo $data["precio"]; ?>"></td>
    </tr>
    <tr>
      <td><input type="hidden" name="id" value="<?php echo $data["id"]; ?>"></td>
      <td><input type="submit" value="Eliminar"></td>
    </tr>
  </table>
  <p>ADVERTENCIA: Una vez borrado el registro NO se podrá recuperar.</p>
</form>


  <a href='<?php print RUTA_APP."productos/"; ?>'>Regresar</a>
</body>
</html>
