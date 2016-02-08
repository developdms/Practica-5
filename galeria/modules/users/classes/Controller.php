<?php

/**
 * Description of Controller
 *
 * @author MARTIN
 */
class Controller {

    //put your code here
    public static function hadle() {
        $method = Request::req('op') . Request::req('do');
        if ($method != NULL) {
            return self::$method();
        } else {
            return self::frontview();
        }
    }

    /* ----------------------------
     * Funciones de vista
     * ----------------------------
     */

    private static function frontview() {
        return file_get_contents('artist/view/index.html');
    }

    private static function signupview($page = NULL) {
        $user = self::user();
        if (!$page) {
            $page = file_get_contents('view/signup.php');
        }
        if ($user != NULL && $user->getActive() == 1 && $user->getAdministrator() == 1) {
            $select = '<div class="form-group">
                                        <label for="password" class="white-font">Tipo de usuario</label>
                                        <select name="form-last-name" class="form-last-name form-control" id="form-last-name">
                                            <option>Administrador</option>
                                            <option>Personal</option>
                                            <option>Normal</option>
                                        </select>
                                    </div>';
            $page = str_replace('{select}', $select, $page);
        } else if ($user != NULL && $user->getActive() == '1' && $user->getPersonal() == '1') {
            $select = '<div class="form-group">
                                        <label for="password" class="white-font">Tipo de usuario</label>
                                        <select name="form-last-name" class="form-last-name form-control" id="form-last-name">
                                            <option>Personal</option>
                                            <option>Normal</option>
                                        </select>
                                    </div>';
            $page = str_replace('{select}', $select, $page);
        } else {
            $select = '';
            $page = str_replace('{select}', $select, $page);
        }
        return $page;
    }

    private static function loginview() {
        if (!self::user()) {
            return file_get_contents('view/signin.php');
        }
        return self::panelview();
    }

    private static function panelview() {
        return self::paneloption(file_get_contents('view/controlpanel.php'));
    }

    private static function paneloption($page) {
        $user = self::user();
        if ($user->getAdministrator() == 1) {
            return str_replace('{opciones}', file_get_contents('view/option-admin.php'), $page);
        } else if ($user->getPersonal() == 1) {
            
        }
        return str_replace('{opciones}', file_get_contents('view/option-normal.php'), $page);
    }

    private static function listuserview() {
        $users = self::listusers();
        $page = file_get_contents('view/controlpanel.php');
        $table = file_get_contents('view/usertable.php');
        $set = '';
        foreach ($users as $user) {
            $pattern = file_get_contents('view/userlistrow.php');
            foreach ($user->get() as $key => $value) {
                if ($value == '0') {
                    $value = 'NO';
                } else if ($value == '1') {
                    $value = 'SI';
                }
                $pattern = str_replace('{' . $key . '}', $value, $pattern);
            }
            $pattern = str_replace('{editar}', '<a href="?op=edit&do=view&email=' . $user->getEmail() . '"><button>Editar</button></a>', $pattern);
            $pattern = str_replace('{borrar}', '<a href="?op=delete&do=set&email=' . $user->getEmail() . '"><button>Borrar</button></a>', $pattern);
            $set .= $pattern;
        }
        $table = str_replace('{filas}', $set, $table);
        $page = str_replace('{opciones}', $table, $page);
        return $page;
    }

    private static function editview() {
        $email = Request::req('email');
        $page = file_get_contents('view/edit.php');
        $item = self::user($email);
        foreach ($user->get() as $key => $value) {
            $page = str_replace('{' . $key . '}', $value, $page);
        }
        $active = Render::input('checkbox', 'active', 1, NULL, array('form-control'), $item->getActive());
        $administrator = Render::input('checkbox', 'administrator', 1, NULL, array('form-control'), $item->getAdministrator());
        $personal = Render::input('checkbox', 'personal', 1, NULL, array('form-control'), $item->getPersonal());
        $page = $page = str_replace('{activo}', $active, $page);
        $page = $page = str_replace('{administrador}', $administrator, $page);
        $page = $page = str_replace('{pers}', $personal, $page);
        return self::signupview($page);
    }

    /* ----------------------------
     * Funciones de acción
     * ----------------------------
     */

    private static function login() {
        $params['alias'] = Request::req('alias');
        $params['password'] = sha1(Request::req('password'));

        $db = new Database();
        $manager = new ManagerUser($db);
        $user = $manager->login($params);
        $db->close();
        if (!$user) {
            return self::loginview();
        } else {
            $session = new Session();
            $session->setUser($user);
            return self::panelview();
        }
    }

    private static function logout() {
        $session = new Session();
        $session->erase('_user');
        $session->destroy();
        return self::loginview();
    }

    private static function locklock() {
        $params['alias'] = Request::req('alias');
        $params['password'] = sha1(Request::req('password'));

        $db = new Database();
        $manager = new ManagerUser($db);
        $user = $manager->login($params);

        if (!$user) {
            return self::loginview();
        } else {
            return self::panelview();
        }
    }

    private static function user($param = NULL) {
        $user = NULL;
        if ($param == NULL) {
            $session = new Session();
            $user = $session->getUser();
        } else {
            $db = new Database();
            $manager = new ManagerUser($db);
            $user = $manager->get($param);
            $db->close();
        }
        return $user;
    }

    private static function listusers() {
        $user = self::user();
        $db = new Database();
        $manager = new ManagerUser($db);
        $users = $manager->getList();
        $db->close();
        return $users;
    }

    private static function editset() {
        $user = self::user();
        if ($user) {
            $db = new Database();
            $manager = new ManagerUser($db);
            $user->set(Request::reqFull());
            $where['email'] = Request::req('old-email');
            $res = $manager->set($user, $where);
            $db->close();
        }
        self::editview();
    }

}
