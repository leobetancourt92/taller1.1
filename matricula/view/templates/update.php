<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/formulario.css">
  </head>
  <body>
  <center><h1>Modificar Registro de matricula</h1></center>
      <?php if (isset($error)): ?>
  <center> <div class="error"><?php echo $error ?></div></center>>
      <?php endif ?>

    <?php if (isset($success)): ?>
  <center><div class="success"><?php echo $success ?></div></center>>
    <?php endif ?>
    <?php include '_updateform.php'; ?>
 
</body>
</html>
