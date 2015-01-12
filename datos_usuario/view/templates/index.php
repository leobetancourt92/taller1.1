<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Gestión de Datos del Usuario</title>
    <link rel="stylesheet" media="screen" href="css/main.css">
  </head>
  <body>
  <center><h1>Gestión de datos del Ussuario</h1></center>
    <div id="lnkNuevo">
        <center><a href="index.php?action=create">Nuevo</a></center>
    </div><br>
<center><a href="../index.php">Directorio principal</a></center>   
 <?php if (isset($error)): ?>
      <center><div class="error"><?php echo $error ?></div></center>
    <?php endif ?>

    <?php if (isset($success)): ?>
      <center><div class="success"><?php echo $success ?></div></center>
    <?php endif ?>
      <center> <table id="tblContenido">
      <thead>
        <tr>
          <th>ID</th>
          <th>Usuario ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Direccion</th>
          <th>Telefono</th>
          <th>localidad ID</th>
          
          
           <th>Accion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos as $row): ?>
          <tr>                                 
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['usuario_id'] ?></td>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['apellido'] ?></td>
            <td><?php echo $row['direccion'] ?></td>
            <td><?php echo $row['telefono'] ?></td>
            <td><?php echo $row['localidad_id'] ?></td>
            

            <td><a href="index.php?action=update&amp;id=<?php echo $row['id'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['id'] ?>">Eliminar</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
      </center>
      </body>
</html>