<?php

class UsersController extends VanillaController
{

    function beforeAction()
    {
        $var = 1;
        echo $var;
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
//        session_start();
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            header('Location: http://localhost/framework/users/home');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $value = performAction("users", "index");
            if(isset($_POST['name']) && isset($_POST['password'])){

                $username = $this->validate_input($_POST["name"]);
                $pwd = $this->validate_input($_POST['password']);
                $this->User->where("nameLogin", $username);
                $info = $this->User->search();
                $_SESSION["loggedin"] = true;
                header('Location: http://localhost/framework/users/home');

            }else{
                $_SESSION['loggedin'] = false;
            }

        }
    }

    function logout(){
        session_destroy();
        header('Location: http://localhost/framework/users/home');
    }

    function register()
    {
//        var_dump("fsafdsfas");
    }

    function afterAction()
    {

    }


}