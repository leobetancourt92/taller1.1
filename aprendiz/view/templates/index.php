<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de Aprendices</title>
        <link rel="stylesheet" media="screen" href="css/main.css">
    </head>
    <body>
    <center><h1>Gestión de Aprendiz</h1></center>
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
                    <th>N° Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Ciudad</th>
                    <th>Tipo Sanguineo</th>
                    <th>Tipo ID</th>
                    <th>Genero</th>
                    <th>Edad</th>

                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $row): ?>
             
                <tr>                                 
                        <td><?php echo $row['id_aprendiz'] ?></td>
                        <td><?php echo $row['nom_pre'] ?></td>
                        <td><?php echo $row['apell_apre'] ?></td>
                        <td><?php echo $row['tel'] ?></td>
                        <td><?php echo $row['nom_ciudad'] ?></td>
                        <td><?php echo $row['desc_rh'] ?></td>
                        <td><?php echo $row['desc_tipo_id'] ?></td>
                        <td><?php echo $row['genero'] ?></td>
                        <td><?php echo $row['edad'] ?></td>

                        <td><a href="index.php?action=update&amp;id=<?php echo $row['id_aprendiz'] ?>">Modificar</a> - <a href="index.php?action=delete&amp;id=<?php echo $row['id_aprendiz'] ?>">Eliminar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </center>
</body>
</html>