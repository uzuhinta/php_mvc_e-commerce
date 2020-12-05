<?php

class UsersController extends VanillaController {

    function beforeAction () {

    }

    function view($id = null) {
        $this->User->id = $id;
        $this->User->showHasOne();
//        $this->Product->showHMABTM();
        $user = $this->User->search();
        $this->set('user',$user);
    }

    function afterAction() {

    }


}