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

    function index()
    {
    }

    function login()
    {
        session_start();
        if ($_POST["uname"]  == "q") {
            $_SESSION["loggedin"] = true;
            header('Location: http://localhost/framework/categories');
        }
    }

    function afterAction()
    {
    }
}
