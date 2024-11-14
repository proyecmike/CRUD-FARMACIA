<!DOCTYPE html>
<html>
<head>
  <title>Dar de alta un Producto</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
   <h1>Dar de alta un Producto</h1>
  <fieldset>
   
  <form action='<?php print RUTA_APP."productos/alta/"; ?>' method="POST">
    <table>
      <tr><td ><label for="nombre_producto">Nombre:</label></td>
        <td class="cien"><input type="text" name="nombre_producto"></td>
      </tr>
      <tr><td><label for="formula">Formula:</label></td>
        <td class="cien"><input type="text" name="formula"></td>
      </tr>
      <tr><td><label for="caducidad">Caducidad:</label></td>
        <td class="cien"><input type="text" name="caducidad" placeholder="AAAA/MM/DD"></td>
      </tr>
      <tr><td><label for="precio">Precio:</label></td>
        <td class="cien"><input type="text" name="precio" ></td>
      </tr>
      <tr><td>&nbsp;</td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>
  </fieldset>

  <a href='<?php print RUTA_APP."productos/"; ?>'>Regresar</a>
</body>
</html>