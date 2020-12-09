<?php

class UsersController extends VanillaController {

    function beforeAction () {

    }

    function view($id = null) {
        $this->User->id = $id;
        $this->User->showHasOne();
        $user = $this->User->search();
//        $this->doNotRenderHeader=1;
        $this->set('user',$user);
    }

    function index(){
        $this->doNotRenderHeader=1;
    }

    function login(){
        $fdsfsa = 1;
        echo $fdsfsa;
        header('Location: http://www.example.com/');
    }

    function afterAction() {

    }


}