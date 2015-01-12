<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">

        <tr>
            <th>codigo de programa</th><td><input type="text"  id="txtcod" name="txtcod" maxlength="10" value="<?php echo ((isset($txtcod)) ? $txtcod : '') ?>" placeholder="cod de el departamento" readonly style="background:grey; color:green;"></td>
        </tr>

        <tr>
            <th>Nombre de el programa</th><td><input type="text" value="<?php echo ((isset($txtdesc)) ? $txtdesc : '') ?>" id="txtdesc" name="txtdesc" max="30" min="" placeholder="nombre de el depratmento"></td>
        </tr>

        <tr>
            <th>Estado</th><td><input type="text" value="<?php echo ((isset($txtestd)) ? $txtestd : '') ?>" id="txtestd" name="txtestd" max="30" min="" placeholder="nombre de el depratmento"></td>
        </tr>

       
      </table>
    <center><button type="submit">Registrar</button></center>
    <center><a href="index.php">Volver</a></center>

</form>