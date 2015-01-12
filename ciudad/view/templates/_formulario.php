<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">

        <tr>
            <th>codigo de ciudad</th><td><input type="text"  id="txtcod" name="txtcod" maxlength="10" value="<?php echo ((isset($txtcod)) ? $txtcod : '') ?>" placeholder="cod de la ciudad"></td>
        </tr>

        <tr>
            <th>Nombre de la ciudad</th><td><input type="text" value="<?php echo ((isset($txtdesc)) ? $txtdesc : '') ?>" id="txtdesc" name="txtdesc" max="30" min="" placeholder="nombre de la ciudad"></td>
        </tr>


        <tr>
            <th>Departamento</th><td>
                <select name="txtdep">
                    <option value="">Seleccione el departamento</option>
                    <?php foreach ($depto as $dato): ?> 
                        <option value="<?php echo $dato['cod_depto'] ?>"><?php echo $dato['nom_depto'] ?></option>

                    <?php endforeach ?>
                </select>
        </tr>

        <tr>
            <th>Habitantes</th><td><input type="text" value="<?php echo ((isset($txthab)) ? $txthab : '') ?>" id="txthab" name="txthab" placeholder="habitantes"></td>
        </tr>

      </table>
    <center><button type="submit">Registrar</button></center>
    <center><a href="index.php">Volver</a></center>
<center><a href="../index.php">Directorio principal</a></center>
</form>