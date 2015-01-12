<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">

        <tr>
            <th>codigo de centro</th><td><input type="text"  id="txtcod" name="txtcod" maxlength="10" value="<?php echo ((isset($txtcod)) ? $txtcod : '') ?>" placeholder="cod de la causa"></td>
        </tr>

        <tr>
            <th>Nombre del Centro</th><td><input type="text" value="<?php echo ((isset($txtdesc)) ? $txtdesc : '') ?>" id="txtdesc" name="txtdesc" max="30" min="" placeholder="desc de el centro"></td>
        </tr>


        <tr>
            <th>Telefono</th><td><input type="text" value="<?php echo ((isset($txttel)) ? $txttel : '') ?>" id="txttel" name="txttel" placeholder="telefono"></td>
        </tr>

        <tr>
            <th>Direccion</th><td><input type="text" value="<?php echo ((isset($txtdir)) ? $txtdir : '') ?>" id="txtdir" name="txtdir" placeholder="direccion"></td>
        </tr>

        <tr>
            <th>Codigo de ciudad</th><td><input type="text" value="<?php echo ((isset($txtciu)) ? $txtciu : '') ?>" id="txtciu" name="txtciu" placeholder="ciudad"></td>
        </tr>





    </table>
    <center><button type="submit">Registrar</button></center>
    <center><a href="index.php">Volver</a></center>
    <center><a href="../index.php">Directorio principal</a></center>
</form>