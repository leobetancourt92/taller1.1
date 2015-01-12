<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">

        <tr>
            <th>identificacion del aprendiz</th><td><input type="text"  id="txtid" name="txtid" maxlength="10" value="<?php echo ((isset($txtid)) ? $txtid : '') ?>" placeholder="numero de identificacion"></td>
        </tr>

        <tr>
            <th>Nombre</th><td><input type="text" value="<?php echo ((isset($txtapre)) ? $txtapre : '') ?>" id="txtapre" name="txtapre" max="30" min=""<?php echo ($_GET['action'] === 'update') ? '' : 'required' ?> placeholder="Nombre del Aprendiz"></td>
        </tr>


        <tr>
            <th>Apellido</th><td><input type="text" value="<?php echo ((isset($txtape)) ? $txtape : '') ?>" id="txtape" name="txtape" placeholder="Apellidos del Aprendiz"></td>
        </tr>

        <tr>
            <th>Telefono</th><td><input type="text" value="<?php echo ((isset($txttel)) ? $txttel : '') ?>" id="txttel" name="txttel" placeholder="Telefono de Contacto"></td>
        </tr>

        <tr>
            <th>Ciudad</th><td>
                <select name="txtciudad">
                    <option value="">Seleccione la ciudad</option>
                    <?php foreach ($ciudad as $dato): ?> 
                        <option value="<?php echo $dato['cod_ciudad'] ?>"><?php echo $dato['nom_ciudad'] ?></option>

                    <?php endforeach ?>
                </select>
        </tr>


        <tr>
            <!-- <th>Tipo Sanguineo</th><td><input type="text" value="<?php echo ((isset($txttipo)) ? $txttipo : '') ?>" id="txttipo" name="txttipo" placeholder="Grupo Sanguineo"></td> -->
            <th>Tipo Sanguineo</th>
            <td>
                <select name="txttipo">
                    <option value="">Seleccione grupo sanguineo</option>
                    <?php foreach ($rh as $dato): ?>
                        <option value="<?php echo $dato['cod_rh'] ?>"><?php echo $dato['desc_rh'] ?></option>

                    <?php endforeach ?>
                </select>
            </td>
        </tr>


        <tr>
            <th>Tipo de identificacion</th><td><select name="txttipoid">

                    <option value="">Seleccione el tipo de ID</option>
                    <?php foreach ($tipoid as $data) : ?>
                        <option value="<?php echo $data['cod_tipo_id'] ?>"><?php echo $data['desc_tipo_id'] ?></option>
                    <?php endforeach ?>
                </select></td>
        </tr>


        <tr>
            <th>Genero</th><td><input type="text" value="<?php echo ((isset($txtgenero)) ? $txtgenero : '') ?>" id="txtgenero" name="txtgenero" placeholder="Genero"></td>
        </tr>

        <tr>
            <th>Edad</th><td><input type="text" value="<?php echo ((isset($txtedad)) ? $txtedad : '') ?>" id="txtedad" name="txtedad" placeholder="Edad"></td>
        </tr>


    </table>
    <center><button type="submit">Registrar</button></center>
    <center><a href="index.php">Volver</a></center>
    <center><a href="../index.php">Directorio principal</a></center>
</form>