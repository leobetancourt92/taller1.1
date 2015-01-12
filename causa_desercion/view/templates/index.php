<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Causa Desercion</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
    <center><h1>Gestión de Causa Desercion</h1></center>
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
                    <th>Codigo</th>
                    <th>desc</th>
                    <th>estado</th>



                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>                                 
                        <td><?php echo $row['cod_causa'] ?></td>
                        <td><?php echo $row['desc_causa'] ?></td>
                        <td><?php echo $row['estdo'] ?></td>


                        <td><a href="index.php?action=update&amp;id=<?php echo $row['cod_causa'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['cod_causa'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </center>
</body>
</html>