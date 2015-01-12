<?php

/**
 * Description of modelClass
 *
 * @author julianlasso
 */
class modelClass {

   
    //las siguientes 3 funciones estaticas son complementarias para la funcionalidad de las etiquetas <select>
    //en los templates de creacion y actualizacion de la tabla
    
    
    static public function getRh() {
        try {
            $sql = 'SELECT rh.desc_rh, rh.cod_rh FROM rh';
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function getCiudad() {
        try {
            $sql = 'select ciudad.cod_ciudad,nom_ciudad from ciudad';
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function getTipoid() {

        try {
            $sql = 'select tipo_id.cod_tipo_id,tipo_id.desc_tipo_id from tipo_id';

            return dataBaseClass:: getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    //funcion que trae informacion de un registro por id de aprendiz para el metodo de actualizacion

    static public function getRow($id) {
        try {
            $sql = 'SELECT id_aprendiz,nom_pre,apell_apre,tel,cod_ciudad,cod_rh,cod_tipo_id,genero,edad FROM aprendiz WHERE aprendiz.id_aprendiz = ' . $id;
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    
    
    //funcion que trae la primary key de la tabla correspondiente ,para accion de actualizar
    static public function certifyId($id) {
        try {
            $sql = "SELECT aprendiz.id_aprendiz FROM aprendiz WHERE aprendiz.id_aprendiz ='$id'";
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    /**
     * Método para actualizar la información del usuario
     * @param integer $id Variables contenedora del ID del usuario
     * @param array $data Array asociativo, cada posición es el nombre de las columnas en base de datos
     * @return \PDOException
     * @throws PDOException
     */
    //metodo para la creacion de un nuevo usuario

    static public function putNewUser($id, $nombre, $apellido, $telefono, $codciudad, $rh, $tipoid, $genero, $edad) {
        try {
            $sql = "INSERT INTO aprendiz (id_aprendiz,nom_pre,apell_apre,tel,cod_ciudad,cod_rh,cod_tipo_id,genero,edad) VALUES ('$id','$nombre','$apellido',$telefono,$codciudad,$rh,$tipoid,'$genero',$edad)";

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("error al insertar los datos en la bd", 2845);
            }

            return $rsp;
        } catch (PDOException $e) {
            return $e;
        }
    }

    //metodo para leer todos los registros de la tabla

    static public function getAll() {
        try {
            $sql = 'SELECT id_aprendiz,nom_pre,apell_apre,tel,nom_ciudad,desc_rh,desc_tipo_id,genero,edad FROM  aprendiz natural join rh natural join tipo_id natural join ciudad ';
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
            /*
              if($e->getCode() === 10) {
              echo 'Base de Datos no encotrada';
              }
             */
        }
    }

    //metodo para actualizar los registros de la tabla


    static public function updateUsuario($id, $data) {
        try {

            $sql = "UPDATE aprendiz SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE id_aprendiz = " . $id;

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("El usuario no ha podido ser actualizado", 2632);
            }
            return $rsp;
        } catch (PDOException $e) {
            dataBaseClass::getInstance()->rollback();
            return $e;
        }
    }

    //metodo para borrar los datos de la tabla

    static public function deleteUsuario($id) {
        try {

            $sql = "DELETE FROM aprendiz WHERE id_aprendiz ='$id'";

            dataBaseClass::getInstance()->beginTransaction();
            $rsp = dataBaseClass::getInstance()->exec($sql);
            dataBaseClass::getInstance()->commit();

            if ($rsp !== false) {
                $rsp = true;
            } else {
                throw new PDOException("El usuario $id no ha podido ser eliminado", 2633);
            }
            return $rsp;
        } catch (PDOException $e) {
            dataBaseClass::getInstance()->rollback();
            return $e;
        }
    }

}
