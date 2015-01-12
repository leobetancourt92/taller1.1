<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">

        <tr>
            <th>identificacion del aprendiz</th><td><input type="text"  id="txtid" name="txtid" value="<?php echo ((isset($txtid)) ? $txtid : '') ?>" placeholder="numero de identificacion" readonly style="background:grey; color:green;"></td>
        </tr>

        <tr>
            <th>Nombre</th><td><input type="text" value="<?php echo ((isset($txtapre)) ? $txtapre : '') ?>" id="txtapre" name="txtapre" <?php echo ($_GET['action'] === 'update') ? '' : 'required' ?> placeholder="Nombre del Aprendiz"></td>
        </tr>


        <tr>
            <th>Apellido</th><td><input type="text" value="<?php echo ((isset($txtape)) ? $txtape : '') ?>" id="txtape" name="txtape" placeholder="Apellidos del Aprendiz"></td>
        </tr>

        <tr>
            <th>Telefono</th><td><input type="text" value="<?php echo ((isset($txttel)) ? $txttel : '') ?>" id="txttel" name="txttel" placeholder="Telefono de Contacto"></td>
        </tr>

        <tr>
            <th>Ciudad</th><td><input type="text" value="<?php echo ((isset($txtciudad)) ? $txtciudad : '') ?>" id="txtciudad" name="txtciudad" placeholder="Ciudad de Residencia"></td>
        </tr>


        <tr>
            <th>Tipo Sanguineo</th><td><input type="text" value="<?php echo ((isset($txttipo)) ? $txttipo : '') ?>" id="txttipo" name="txttipo" placeholder="Grupo Sanguineo"></td>
        </tr>


        <tr>
            <th>Tipo de identificacion</th><td><input type="text" value="<?php echo ((isset($txttipoid)) ? $txttipoid : '') ?>" id="txttipoid" name="txttipoid" placeholder="Tipo de Identificacion"></td>
        </tr>


        <tr>
            <th>Genero</th><td><input type="text" value="<?php echo ((isset($txtgenero)) ? $txtgenero : '') ?>" id="txtgenero" name="txtgenero" placeholder="Genero"></td>
        </tr>

        <tr>
            <th>Edad</th><td><input type="text" value="<?php echo ((isset($txtedad)) ? $txtedad : '') ?>" id="txtedad" name="txtedad" placeholder="Edad"></td>
        </tr>


    </table>
    <center><button type="submit">Actualizar Informacion</button></center>
    <center><a href="index.php">Volver</a></center>

</form>
?>