<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">

    <table border="1" align="center">

        <tr>
            <th>Numero de Ficha</th><td><input type="text"  id="txtid" name="txtid" maxlength="10" value="<?php echo ((isset($txtid)) ? $txtid : '') ?>" placeholder="numero de identificacion"></td>
        </tr>

        <tr>
            <th>identificacion del aprendiz</th><td><input type="text" value="<?php echo ((isset($txtapre)) ? $txtapre : '') ?>" id="txtapre" name="txtapre" max="30" min="" placeholder="Nombre del Aprendiz" readonly style="background: green; color: red;"></td>
        </tr>

        

        <tr>
            <th>Estado</th><td><input type="text" value="<?php echo ((isset($txttest)) ? $txttest : '') ?>" id="txttest" name="txttest" max="30" min=""<?php echo ($_GET['action'] === 'update') ? '' : 'required' ?> placeholder="Nombre del Aprendiz"></td>
        </tr>

        


      


        


    </table>
    <center><button type="submit">Registrar</button></center>
    <center><a href="index.php">Volver</a></center>

</form>