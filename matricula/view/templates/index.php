<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Gestión de matricula</title>
    <link rel="stylesheet" media="screen" href="css/main.css">
  </head>
  <body>
  <center><h1>Gestión de matricula</h1></center>
    <div id="lnkNuevo">
        <center><a href="index.php?action=create">Nuevo</a></center>
    </div><br>
    <?php if (isset($error)): ?>
      <center><div class="error"><?php echo $error ?></div></center>
    <?php endif ?>

    <?php if (isset($success)): ?>
      <center><div class="success"><?php echo $success ?></div></center>
    <?php endif ?>
      <center> <table id="tblContenido">
      <thead>
        <tr>
          <th>No de ficha</th>
          <th>ID aprendiz</th>
          <th>Estado</th>
          
          
           <th>Accion</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datos as $row): ?>
          <tr>                                 
            <td><?php echo $row['num_ficha'] ?></td>
            <td><?php echo $row['id_aprendiz'] ?></td>
            <td><?php echo $row['estado'] ?></td>
            

            <td><a href="index.php?action=update&amp;id=<?php echo $row['id_aprendiz'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['id_aprendiz'] ?>">Eliminar</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
      </center>
      </body>
</html>