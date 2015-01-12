<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">


        <tr>
            <th>codigo de causa</th><td><input type="text"  id="txtcod" name="txtcod" maxlength="10" value="<?php echo ((isset($txtcod)) ? $txtcod : '') ?>" placeholder="cod de la causa" readonly style="background:grey; color:green;"></td>
        </tr>

        <tr>
            <th>descripcion de la causa</th><td><input type="text" value="<?php echo ((isset($txtdesc)) ? $txtdesc : '') ?>" id="txtdesc" name="txtdesc" max="30" min="" placeholder="desc de la causa"></td>
        </tr>


        <tr>
            <th>Estado</th><td><input type="text" value="<?php echo ((isset($txtest)) ? $txtest : '') ?>" id="txtest" name="txtest" placeholder="estado"></td>
        </tr>

    </table>
    <center><button type="submit">Actualizar Informacion</button></center>
    <center><a href="index.php">Volver</a></center>
    <center><a href="../index.php">Directorio principal</a></center>
</form>
