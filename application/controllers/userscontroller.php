<?php

class UsersController extends VanillaController
{

    function beforeAction()
    {
    }

    function view($id = null)
    {
        $this->User->id = $id;
        $this->User->showHasOne();
        $user = $this->User->search();
        //        $this->doNotRenderHeader=1;
        $this->set('user', $user);
    }

    function index($id = null)
    {
        $this->User->id = 1;
        $this->User->showHasOne();
        $user = $this->User->search();
        //        $this->doNotRenderHeader=1;
        $this->set('user', $user);
        var_dump($user);
        return $user;
    }

    function login()
    {
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            header('Location: ' . BASE_PATH . '/posts');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['name']) && isset($_POST['password'])) {
                $username = $this->validate_input($_POST["name"]);
                //use md5 for password
                $pwd = $this->validate_input($_POST['password']);
                $this->User->where("nameLogin", $username);
                $info = $this->User->search();
                if ((isset($info[0]["User"]) == true) && ($info[0]["User"]["password"] == $pwd)) {
                    $_SESSION["loggedin"] = true;
                    $_SESSION["userid"] = $info[0]["User"]["id"];
                    $_SESSION["role"] = $info[0]["User"]["role"];
                    $_SESSION["user_name"] = $username;
                    if (isset($_SESSION["saveLink"])) {
                        $rurl = "/" . $_SESSION["saveLink"];
                        unset($_SESSION["saveLink"]);
                        return header('Location: ' . BASE_PATH . $rurl);
                    }
                    return header('Location: ' . BASE_PATH . '/posts');
                }
            }
            $_SESSION['loggedin'] = false;
            $this->set("message", "Vui lòng thử lại!");
        }
    }

    function logout()
    {
        session_destroy();
        header('Location: ' . BASE_PATH . '/posts');
    }

    function register()
    {
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            header('Location: ' . BASE_PATH . '/posts');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (
                isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) &&
                isset($_POST['username']) && isset($_POST['password']) && isset($_POST["typepassword"])
            ) {
                $name = $this->validate_input($_POST['name']);
                $phone = $this->validate_input($_POST['phone']);
                $address = $this->validate_input($_POST['address']);
                $nameLogin = $this->validate_input($_POST['username']);
                $password = $this->validate_input($_POST['password']);
                $typepassword = $this->validate_input($_POST['typepassword']);
                if ($password != $typepassword) {
                    return $this->set("message", "Mật khẩu không giống nhau");
                } else {
                    $this->User->where("nameLogin", $nameLogin);
                    $isExist = $this->User->search();
                    //                    var_dump($isExist);
                    if ($isExist) {
                        return $this->set("message", "Tên đăng ký tồn tại");
                    }
                    $this->User->id = null;
                    $this->User->name = $name;
                    $this->User->phone = $phone;
                    $this->User->address = $address;
                    $this->User->nameLogin = $nameLogin;
                    $this->User->password = $password;
                    $this->User->save();
                    return header('Location: ' . BASE_PATH . '/users/login');
                }
            }

            $this->set("message", "Vui long dien cac truong con thieu");
        }
    }

    function manager($pageNumber = 1)
    {
        if (isset($_SESSION["loggedin"]) == false || $_SESSION["role"] != "admin") {
            return header('Location: ' . BASE_PATH . '/posts');
        }
        $this->User->setPage($pageNumber);
        $this->User->setLimit('8');
        $this->User->id = null;
        $this->User->showHasOne();
        $users = $this->User->search();
        $this->set("users", $users);
        $totalPages = $this->User->totalPages();
        $this->set('totalPages', $totalPages);
        $this->set('currentPageNumber', $pageNumber);
    }

    function delete($id = -1)
    {
        if ($id == -1) {
            return header('Location: ' . BASE_PATH . '/users/manager');
        }
        $this->User->id = $id;
        $this->User->delete();
        return header('Location: ' . BASE_PATH . '/users/manager');
    }

    function edit()
    {
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false) {
            header('Location: ' . BASE_PATH . '/posts/index');
        }
        $this->User->id =  $_SESSION["userid"];
        $this->User->showHasOne();
        $user = $this->User->search();
        $this->set('user', $user);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (
                isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) &&
                isset($_POST['username']) && isset($_POST['password']) && isset($_POST["typepassword"])
            ) {
                $name = $this->validate_input($_POST['name']);
                $phone = $this->validate_input($_POST['phone']);
                $address = $this->validate_input($_POST['address']);
                $nameLogin = $this->validate_input($_POST['username']);
                $password = $this->validate_input($_POST['password']);
                $typepassword = $this->validate_input($_POST['typepassword']);
                if ($password != $typepassword) {
                    return $this->set("message", "Mật khẩu không giống nhau");
                } else {
                    $this->User->where("nameLogin", $nameLogin);
                    $isExist = $this->User->search();
                    if ($isExist) {
                        return $this->set("message", "Tên đăng nhập đã tồn tại");
                    }
                    $this->User->id =  $_SESSION["userid"];
                    $this->User->name = $name;
                    $this->User->phone = $phone;
                    $this->User->address = $address;
                    $this->User->nameLogin = $nameLogin;
                    $this->User->password = $password;
                    $this->User->save();
                    return header('Location: ' . BASE_PATH . '/posts');
                }
            }

            $this->set("message", "Vui lòng nhập các trường còn thiếu");
        }
    }

    function change_pass()
    {
        if (isset($_SESSION["loggedin"]) == false || $_SESSION["role"] != "admin") {
            return header('Location: ' . BASE_PATH . '/posts');
        }

        $this->User->id =  $_SESSION["userid"];
        $this->User->showHasOne();
        $user = $this->User->search();
        $this->set('user', $user);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['old_password']) && isset($_POST['password']) && isset($_POST["reset_password"])) {
                $old_password = $this->validate_input($_POST['old_password']);
                $password = $this->validate_input($_POST['password']);
                $reset_password = $this->validate_input($_POST['reset_password']);
                if ($old_password != $user["User"]["password"]) {
                    return $this->set("message", "Vui lòng nhập chính xác mật khẩu cũ");
                }
                if ($old_password == $password) {
                    return $this->set("message", "Mật khẩu trùng với mật khẩu cũ");
                }
                if ($password != $reset_password) {
                    return $this->set("message", "Mật khẩu không giống nhau");
                } else {
                    $this->User->id =  $_SESSION["userid"];
                    $this->User->password = $password;
                    $this->User->save();
                    return header('Location: ' . BASE_PATH . '/users/login');
                }
            }
            $this->set("message", "Vui lòng nhập các trường còn thiếu");
        }
    }

    function contact()
    {
    }

    function afterAction()
    {
    }
}
