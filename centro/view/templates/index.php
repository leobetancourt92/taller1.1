<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Centros de formacion</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
    <center><h1>Gestión de Centros de formacion</h1></center>
    <div id="lnkNuevo">
        <center><a href="index.php?action=create">Nuevo</a></center>
    </div><br>
    <?php if (isset($error)): ?>
        <center><div class="error"><?php echo $error ?></div></center>
    <?php endif ?>

    <?php if (isset($success)): ?>
        <center><div class="succsess"><?php echo $success ?></div></center>
    <?php endif ?>
    <center> <table id="tblContenido">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>desc</th>
                    <th>telefono</th>
                    <th>direccion</th>
                    <th>ciudad</th>

                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
                    <tr>                                 
                        <td><?php echo $row['cod_centro'] ?></td>
                        <td><?php echo $row['desc_centro'] ?></td>
                        <td><?php echo $row['telefono'] ?></td>
                        <td><?php echo $row['dir'] ?></td>
                        <td><?php echo $row['nom_ciudad'] ?></td>

                        <td><a href="index.php?action=update&amp;id=<?php echo $row['cod_centro'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['cod_centro'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </center>
</body>
</html>