<?php

class OrdersController extends VanillaController
{
    function beforeAction()
    {
    }

//    function view($id = null)
//    {
//        $this->Order->id = $id;
//        $this->Order->showHasOne();
//        $this->Order->showHMABTM();
//        $order = $this->Order->search();
//        $this->set('order', $order);
//        var_dump($order);
//    }

    function add($idPost = null, $number = 1){
        if (isset($_SESSION["loggedin"]) == false) {
            $_SESSION["saveLink"] = $_REQUEST["url"];
            return header('Location: ' . BASE_PATH . '/users/login');
        }
//        $this->Order->where("user_id", $_SESSION["userid"]);
        $this->Order->where("user_id", 1);
        $this->Order->showHMABTM();
        $orders = $this->Order->search();
//        var_dump($order[0]['Order']['id']);
//        return var_dump($order[0]["Post"][0]["orders_posts"]["number"]);
//        return var_dump($orders[0]["Post"][0]["orders_posts"]);
        $okAdd = 1;
        if($number != 1)
        if($orders != null){
            foreach ($orders[0]["Post"] as $post){
                var_dump($post["orders_posts"]["post_id"]);
                if(intval($post["orders_posts"]["post_id"]) == $idPost){

                    echo "San pham da ton tai trong gio hang";
                    $okAdd = 0;
                    break;
                }else{
                    echo "Them thanh cong";
                };
                echo "---------------------------------------------------------\n";
            }

            if ($okAdd == 1){
                $result = $this->Order->addOther("INSERT INTO orders_posts (order_id, post_id) VALUES (". $orders[0]['Order']['id'] . ", " . $idPost .") ");
//                $this->Order->custom("INSERT INTO orders_posts (order_id, post_id) VALUES (" . $orders[0]['Order']['id'] . "," . $idPost . ")");
//                var_dump($result);
                echo "Truy van thanh cong";
//                return header('Location: ' . BASE_PATH . '/posts');
            }
        }
        return header('Location: ' . BASE_PATH . '/posts/detail/'. $idPost);
    }


    function manager()
    {
    }

    function afterAction()
    {
    }
}
