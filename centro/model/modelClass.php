<?php


class modelClass {
    
    

    static public function getRow($id) {
        try {
            $sql = 'SELECT cod_centro,desc_centro,telefono,dir,cod_ciudad FROM centro WHERE centro.cod_centro = ' . $id;
            return dataBaseClass::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return $e;
        }
    }

    static public function certifyId($id) {
        try {
            $sql = "SELECT centro.cod_centro FROM centro WHERE centro.cod_centro ='$id'";
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
    static public function updateUsuario($id, $data) {
        try {

            $sql = "UPDATE centro SET ";

            foreach ($data as $key => $value) {
                $sql = $sql . " " . $key . " = '" . $value . "', ";
            }

            $newLeng = strlen($sql) - 2;
            $sql = substr($sql, 0, $newLeng);

            $sql = $sql . " WHERE cod_centro = " . $id;

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

    static public function deleteUsuario($id) {
        try {

            $sql = "DELETE FROM centro WHERE cod_centro ='$id'";

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

    /**
     * 
     * @return \PDOException
     */
    static public function getAll() {
        try {
            $sql = 'SELECT  cod_centro,desc_centro,telefono,dir,nom_ciudad FROM centro  natural join ciudad where centro.cod_ciudad=ciudad.cod_ciudad';
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

    /**
     * 
     * @param type $user
     * @param type $password
     * @param type $activate
     * @return \PDOException
     */
    static public function putNewUser($id, $desc, $tel,$dir,$cod) {
        try {
            $sql = "INSERT INTO centro (cod_centro,desc_centro,telefono,dir,cod_ciudad) VALUES ($id,'$desc',$tel,'$dir',$cod)";

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

}
