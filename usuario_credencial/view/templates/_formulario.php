<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">



        <tr>
            <th>credencial ID</th><td>
                <select name="txtusid">
                    <option value="<?php echo ((isset($txtusid)) ? $txtusid : '') ?>">Seleccione el credencial ID</option>
                    <?php foreach ($cred as $dato): ?> 
                        <option value="<?php echo $dato['id'] ?>"><?php echo $dato['nombre'] ?></option>

                    <?php endforeach ?>
                </select>
        </tr>

        <tr>
            <th>Usuario ID</th><td>
                <select name="txtcid">
                    <option value="<?php echo ((isset($txtcid)) ? $txtcid : '') ?>">Seleccione el usuario ID</option>
                    <?php foreach ($usu as $dato): ?> 
                        <option value="<?php echo $dato['id'] ?>"><?php echo $dato['usuario'] ?></option>

                    <?php endforeach ?>
                </select>
        </tr>  


    </table>
    <center><button type="submit">Registrar</button></center>
    <center><a href="index.php">Volver</a></center>
    <center><a href="../index.php">Directorio principal</a></center>
</form>