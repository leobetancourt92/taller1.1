<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">

        <tr>
            <th>identificacion </th><td><input type="text"  id="txtid" name="txtid" maxlength="10" value="<?php echo ((isset($txtid)) ? $txtid : '') ?>" placeholder="numero de identificacion"></td>
        </tr>

        <tr>
            <th>Usuario ID</th><td><input type="text" value="<?php echo ((isset($txtusid)) ? $txtusid : '') ?>" id="txtusid" name="txtusid" max="30" min="" placeholder=""></td>
        </tr>


        <tr>
            <th>Nombre</th><td><input type="text" value="<?php echo ((isset($txtnom)) ? $txtnom : '') ?>" id="txtnom" name="txtnom" placeholder=""></td>
        </tr>

        <tr>
            <th>Apellido</th><td><input type="text" value="<?php echo ((isset($txtape)) ? $txtape : '') ?>" id="txtape" name="txtape" placeholder=""></td>
        </tr>

        <tr>
            <th>Direccion</th><td><input type="text" value="<?php echo ((isset($txtdir)) ? $txtdir : '') ?>" id="txtdir" name="txtdir" placeholder=""></td>
        </tr>

        <tr>
            <th>telefono</th><td><input type="text" value="<?php echo ((isset($txttel)) ? $txttel : '') ?>" id="txttel" name="txttel" placeholder=""></td>
        </tr>

        <tr>
            <th>localidad_ID</th><td><input type="text" value="<?php echo ((isset($txtlid)) ? $txtlid : '') ?>" id="txtlid" name="txtlid" placeholder=""></td>
        </tr>
        

       


    </table>
    <center><button type="submit">Registrar</button></center>
    <center><a href="index.php">Volver</a></center>
<center><a href="../index.php">Directorio principal</a></center>
</form>