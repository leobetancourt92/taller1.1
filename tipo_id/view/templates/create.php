<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/formulario.css"
  </head>
  <body>
    <h1><center>Registro de Tipo ID</center></h1>
    <center><?php if (isset($error)): ?>
        <div class="error"><?php echo $error ?></div>
   
<center><a href="../index.php">Directorio principal</a></center>
 <?php endif ?></center>

     <?php if (isset($success)): ?>
         <div class="success"><?php echo $success ?>
    <?php endif ?>
    <?php include '_formulario.php'; ?>
  </body>
</html>
