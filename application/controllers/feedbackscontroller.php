<?php

class FeedbacksController extends BaseController
{

    function beforeAction()
    {
        //        $var = 1;
        //        echo $var;
    }

    function view($id = null)
    {
        if ($id == null) {
            return null;
        }
        $this->Feedback->where("post_id", $id);
        $this->Feedback->showHasOne();
        $feedback = $this->Feedback->search();
        $this->doNotRenderHeader = 1;
        //        $this->set('user', $feedback);
        //        var_dump($feedback);
        return $feedback;
    }

    function add($post_id = null)
    {
        if ($post_id == null) {
            return header('Location: ' . BASE_PATH . '/posts');
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['content'])) {
                $content = $this->validate_input($_POST['content']);
                $this->Feedback->id = null;
                $this->Feedback->content = $content;
                $this->Feedback->post_id = $post_id;
                if(isset($_SESSION['userid'])){
                    $this->Feedback->user_id = $_SESSION['userid'];
                }else{
                    $this->Feedback->user_id = 1;
                }
                $result = $this->Feedback->save();
                if ($result == -1 || $result == null) {
                    $this->set("message", false);
                } else {
                    $this->set("message", true);
                }
            }
        }
        return header('Location: ' . BASE_PATH . '/posts/detail/' . $post_id);
    }

    function afterAction()
    {
    }
}
