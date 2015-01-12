<?php

/**
 * Description of controllerClass
 *
 * @author leonardo
 */
class controllerClass {

    public function index($args = NULL) {
        $args['datos'] = modelClass::getAll();

        if (is_array($args['datos'])) {
            viewClass::renderHTML('index.php', $args);
        } else {
            viewClass::renderHTML('error.php', $args);
        }
    }

    public function create() {
        $template = 'create.php';
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $rsp = modelClass::putNewUser($_POST['txtid'], $_POST['txtusid'], $_POST['txtnom'], $_POST['txtape'], $_POST['txtdir'], $_POST['txttel'], $_POST['txtlid']);
            if ($rsp === true) {
                $args['success'] = 'El registro fue realizado exitosamente';
                $this->index($args);
            } else {
                $args['error'] = $rsp->getMessage();
                $args['formAction'] = 'index.php?action=create';
                $args = array_merge($args, $_POST);
                viewClass::renderHTML($template, $args);
            }
        } else {
            $args['formAction'] = 'index.php?action=create';
            viewClass::renderHTML($template, $args);
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['id']) and is_numeric($_GET['id'])) {
            $certificate = modelClass::certifyId($_GET['id']);
            if (is_array($certificate)) {
                if (count($certificate) > 0) {
                    $data = modelClass::getRow($_GET['id']);
                    if (is_array($data)) {
                        if (count($data) > 0) {
                            $args['txtid'] = $data[0]['id_aprendiz'];
                            $args['txtapre'] = $data[0]['nom_pre'];
                            $args['txtape'] = $data[0]['apell_apre'];
                            $args['txttel'] = $data[0]['tel'];
                            $args['txtciudad'] = $data[0]['cod_ciudad'];
                            $args['txttipo'] = $data[0]['cod_rh'];
                            $args['txttipoid'] = $data[0]['cod_tipo_id'];
                            $args['txtgenero'] = $data[0]['genero'];
                            $args['txtedad'] = $data[0]['edad'];
                        }
                    } else {
                        $args['error'] = $data;
                        viewClass::renderHTML('error.php', $args);
                    }
                }
            } else {
                $args['error'] = $certificate;
                viewClass::renderHTML('error.php', $args);
            }
            $args['formAction'] = 'index.php?action=update&amp;id=' . $_GET['id'];
            viewClass::renderHTML('update.php', $args);
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $data['nom_pre'] = $_POST['txtapre'];
            $data['apell_apre'] = $_POST['txtape'];
            $data['tel'] = $_POST['txttel'];
            $data['cod_ciudad'] = $_POST['txtciudad'];
            $data['cod_rh'] = $_POST['txttipo'];
            $data['cod_tipo_id'] = $_POST['txttipoid'];
            $data['genero'] = $_POST['txtgenero'];
            $data['edad'] = $_POST['txtedad'];

            $rsp = modelClass::updateUsuario($_GET['id'], $data);
            if ($rsp === true) {
                $args['success'] = 'Los cambios fueron realizados exitosamente';
            } else {
                $args['error'] = $rsp->getMessage();
            }
            $args['formAction'] = 'index.php?action=update&amp;id=' . $_GET['id'];
            $args = array_merge($args, $_POST);
            viewClass::renderHTML('update.php', $args);
        } else {
            $this->index();
        }
    }

    public function delete() {
        $args['formAction'] = 'index.php?action=delete&amp;id=' . $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            viewClass::renderHTML('delete.php', $args);
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST' and isset($_POST['confirmation']) and $_POST['confirmation'] === 'true') {
            $rsp = modelClass::deleteUsuario($_GET['id']);
            if ($rsp === true) {
                $args['success'] = 'El registro ' . $_GET['id'] . ' fue eliminado exitosamente';
            } else {
                $args['error'] = $rsp;
                viewClass::renderHTML('error.php', $args);
            }
            $this->index($args);
        }
    }

    public function notFound() {
        
    }

}
