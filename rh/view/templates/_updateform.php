<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">

        <tr>
            <th>codigo de RH</th><td><input type="text"  id="txtcod" name="txtcod" maxlength="10" value="<?php echo ((isset($txtcod)) ? $txtcod : '') ?>" placeholder="" readonly style="background:grey; color:green;"></td>
        </tr>

        <tr>
            <th>Descripcion de RH</th><td><input type="text" value="<?php echo ((isset($txtdesc)) ? $txtdesc : '') ?>" id="txtdesc" name="txtdesc" max="30" min="" placeholder=""></td>
        </tr>


       
      </table>
    <center><button type="submit">Registrar</button></center>
    <center><a href="index.php">Volver</a></center>
<center><a href="../index.php">Directorio principal</a></center>
</form>