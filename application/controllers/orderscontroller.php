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
//        var_dump($orders[0]["Order"]["id"]);
        $okAdd = 1;
        if($orders != null){
            foreach ($orders[0]["Post"] as $post){
//                var_dump($post["orders_posts"]["post_id"]);
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
                $result = $this->Order->customSQL("INSERT INTO orders_posts (order_id, post_id) VALUES (". $orders[0]['Order']['id'] . ", " . $idPost ."); ");
//                $this->Order->custom("INSERT INTO orders_posts (order_id, post_id) VALUES (" . $orders[0]['Order']['id'] . "," . $idPost . ")");
//                var_dump($result);
                echo "Truy van thanh cong";
//                return header('Location: ' . BASE_PATH . '/posts');
            }
        }

        if($number != 1){
            $getId = $this->Order->custom("SELECT * FROM orders_posts WHERE order_id = " . $orders[0]["Order"]["id"] . " AND post_id = " . $idPost .  ";");
            $result = $this->Order->custom("UPDATE orders_posts SET number = ".$number. " WHERE id = " . $getId[0]["Orders_post"]["id"] . "; ");
            var_dump($getId[0]["Orders_post"]["id"]);
        }

        return header('Location: ' . BASE_PATH . '/posts/detail/'. $idPost);
    }

    function cart(){
        $this->Order->where("user_id", 1);
        $this->Order->showHMABTM();
        $cart = $this->Order->search();
//        var_dump($cart[0]["Post"]);
        $total = 0;
        foreach ($cart[0]["Post"] as $value){
            if( $value["Post"]["sale"] != 0){
                $price = $value["Post"]["sale"];
            }else{
                $price = ($value["Post"]["price"]);
            }
            $number = ($value["orders_posts"]["number"]);
//            var_dump($price);
//            var_dump($number);
            $total += $price * $number;
        }
        $this->set("infos", $cart[0]["Post"]);
        $this->set("total", $total);
    }


    function manager()
    {
    }

    function afterAction()
    {
    }
}
