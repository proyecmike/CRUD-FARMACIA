<!DOCTYPE html>
<html>
<head>
  <title>Lista de Productos</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
</head>
<body>
  <h1>Productos</h1>
  <table>
    <thead>
      <th>ID</th>
      <th>Nombre del Producto</th>
      <th>Fórmula</th>
      <th>Caducidad</th>
      <th>Precio</th>
      <th>Modificar</th>
      <th>Borrar</th>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($data); $i++) {
        print "<tr>";
        print "<td>" . (isset($data[$i]["id"]) ? $data[$i]["id"] : 'No disponible') . "</td>";
        print "<td>" . (isset($data[$i]["nombre_producto"]) ? $data[$i]["nombre_producto"] : 'No disponible') . "</td>";
        print "<td>" . (isset($data[$i]["formula"]) ? $data[$i]["formula"] : 'No disponible') . "</td>";
        print "<td>" . (isset($data[$i]["caducidad"]) ? $data[$i]["caducidad"] : 'No disponible') . "</td>";
        print "<td>" . (isset($data[$i]["precio"]) ? $data[$i]["precio"] : 'No disponible') . "</td>";
        print "<td><a href='" . RUTA_APP . "productos/modificar/" . $data[$i]["id"] . "'>Modificar</a></td>";
        print "<td><a href='" . RUTA_APP . "productos/borrar/" . $data[$i]["id"] . "'>Borrar</a></td>";
        print "</tr>";
      }
      ?>
    </tbody>
  </table>
  <br>
  <a href='<?php print RUTA_APP . "productos/alta/"; ?>'>Dar de alta un producto</a>
</body>
</html>
