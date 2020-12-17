<?php

class FeedbacksController extends VanillaController
{

    function beforeAction()
    {
        $var = 1;
        echo $var;
    }

    function index($id = null)
    {
        $this->Feedback->id = 1;
        $this->Feedback->showHasOne();
        $feedback = $this->Feedback->search();
//        $this->doNotRenderHeader=1;
        $this->set('user', $feedback);
        var_dump($feedback);
        return $feedback;
    }

    function afterAction()
    {

    }


}