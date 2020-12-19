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
            header('Location: http://localhost/framework/users/home');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['name']) && isset($_POST['password'])){
                $username = $this->validate_input($_POST["name"]);
                //use md5 for password
                $pwd = $this->validate_input($_POST['password']);
                $this->User->where("nameLogin", $username);
                $info = $this->User->search();
                if((isset($info[0]["User"]) == true) && ($info[0]["User"]["password"] == $pwd)){
                    $_SESSION["loggedin"] = true;
                    return header('Location: http://localhost/framework/users/home');
                }
            }
            $_SESSION['loggedin'] = false;

        }
    }

    function logout(){
        session_destroy();
        header('Location: http://localhost/framework/users/home');
    }

    function register()
    {
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            header('Location: http://localhost/framework/users/home');
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){

        }
    }

    function afterAction()
    {

    }


}