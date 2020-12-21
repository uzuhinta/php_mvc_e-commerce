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
        $this->Order->where("user_id", $_SESSION["userid"]);
        $this->Order->where("temp", 1);
        $this->Order->orderBy("temp", "ASC");
        $orders = $this->Order->search();

        if(!isset($orders[0]) || $orders[0]["Order"]['temp'] == 0){
            $this->Order->custom("INSERT INTO orders (user_id) values ( " . $_SESSION["userid"] . " );");
        }
        $this->Order->where("user_id", $_SESSION["userid"]);
        $this->Order->where("temp", 1);
        $this->Order->orderBy("temp", "ASC");
        $this->Order->showHMABTM();
        $orders = $this->Order->search();
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
        $_SESSION["orderid"] = ($orders[0]["Order"]["id"]);;
        if($number != 1){
            $getId = $this->Order->custom("SELECT * FROM orders_posts WHERE order_id = " . $orders[0]["Order"]["id"] . " AND post_id = " . $idPost .  ";");
            $result = $this->Order->custom("UPDATE orders_posts SET number = ".$number. " WHERE id = " . $getId[0]["Orders_post"]["id"] . "; ");
            var_dump($getId[0]["Orders_post"]["id"]);
        }

        return header('Location: ' . BASE_PATH . '/posts/detail/'. $idPost);
    }

    function cart(){
        if(!isset($_SESSION["orderid"])){
            return $this->set("total", 0);
        }
        $this->Order->where("id", $_SESSION["orderid"]);
        $this->Order->showHMABTM();
        $cart = $this->Order->search();

        $users = $this->Order->custom("Select * from users where id = ". $cart[0]["Order"]["user_id"]);
        $this->set("users", $users);

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
        $this->Order->custom("UPDATE orders SET price = ". $total ." WHERE user_id = ". $_SESSION["userid"] .";");
        $this->set("infos", $cart[0]["Post"]);
        $this->set("total", $total);
    }

    function checkout(){
        $this->Order->custom("UPDATE orders SET temp = 0 WHERE id = ". $_SESSION["orderid"] .";");
        unset($_SESSION["orderid"]);
        return header('Location: ' . BASE_PATH . '/posts');
    }


    function manager($id = null)
    {
        if (isset($_SESSION["loggedin"]) == false || $_SESSION["role"] != "admin") {
            return header('Location: ' . BASE_PATH . '/posts');
        }
        $this->Order->id = $id;
        $this->Order->showHMABTM();
        $carts = $this->Order->search();

        for($i = 0; $i < count($carts); $i++){
            $user = $this->Order->custom("Select name from users where id = " . $carts[$i]["Order"]["user_id"]);
//            var_dump($user);
            $carts[$i]["Username"] = $user;

        }
//        var_dump($carts);


//        foreach ($carts as $cart){
//          $user = $this->Order->custom("Select name from users where id = " . $cart["Order"]["user_id"]);
////          var_dump($user);
//          array_push($cart,$user);
////          var_dump($cart);
//          echo "<hr/>";
//        }
//                var_dump($carts);
        $this->set("carts", $carts);
    }

    function afterAction()
    {
    }
}
