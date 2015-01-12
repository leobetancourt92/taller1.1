<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/formulario.css"
  </head>
  <body>
    <h1><center>Registro de Centro de formacion</center></h1>
    <center><?php if (isset($error)): ?>
        <div class="error"><?php echo $error ?></div>
    <?php endif ?></center>

     <?php if (isset($success)): ?>
         <div class="success"><?php echo $success ?>
    <?php endif ?>
    <?php include '_formulario.php'; ?>
  </body>
</html>
