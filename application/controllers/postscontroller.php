<?php

class PostsController extends VanillaController
{

    function beforeAction()
    {
    }

    function index($pageNumber = 1)
    {
        $this->Post->setPage($pageNumber);
        $this->Post->setLimit('10');
        $posts = $this->Post->search();
        $totalPages = $this->Post->totalPages();
        $this->set('totalPages', $totalPages);
        $this->set('posts', $posts);
        $this->set('currentPageNumber', $pageNumber);
    }

    function orderby($pageNumber = 1, $order = 'ASC')
    {
        $this->Post->setPage($pageNumber);
        $this->Post->setLimit('10');
        $this->Post->orderBy("price", $order);
        $posts = $this->Post->search();
        $totalPages = $this->Post->totalPages();
        $this->set('totalPages', $totalPages);
        $this->set('posts', $posts);
        $this->set('currentPageNumber', $pageNumber);
        $this->set("order", $order);
    }

    function uploadimg()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $target_dir = ROOT . DS . "public" . DS . "img" . DS;
            $target_file = $target_dir . $_FILES["fileToUpload"]["name"];
            $uploadOk = 1;
            $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            //Check image is actual or fake
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }

            //check img is already exist
            if (file_exists($target_file)) {
                $uploadOk = 0;
            }

            //check file size limit 10Mb
            if ($_FILES["fileToUpload"]["size"] > 10000000) {
                $uploadOk = 0;
            }

            //alow some type img
            if ($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg") {
                $uploadOk = 0;
            }

            //start upload
            if ($uploadOk == 0) {
                $this->set("message", "File khong dung dinh dang");
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $this->set("message", "Upload anh thanh cong");
                } else {
                    $this->set("message", "Khong tai duoc file, thu lai");
                }
            }
        }
    }

    function manager()
    {
    }

    function add()
    {
//        Kiem tra quyen
        if(isset($_SESSION["loggedin"]) == false || $_SESSION["role"] != "admin"  ){
            return header('Location: ' . BASE_PATH . '/posts');
        }
            $categories = $this->Post->custom("Select * from categories");
            $this->set("infoCategory", $categories);

        if($_SERVER["REQUEST_METHOD"] == "POST" ){
            if (isset($_POST['name_product']) && isset($_POST['category']) && isset($_POST['description'])
                && isset($_POST['price']) && isset($_POST['price_sale'])){
                $title = $_POST['name_product'];
                $category_id = $_POST['category'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $sale = $_POST['price_sale'];

                $target_dir = ROOT . DS . "public" . DS . "img" . DS;
                $target_file = $target_dir . $_FILES["fileToUpload"]["name"];
                $uploadOk = 1;
                $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                //Check image is actual or fake
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if ($check !== false) {
                        $uploadOk = 1;
                    } else {
                        $uploadOk = 0;
                    }
                }

                //check img is already exist
//                if (file_exists($target_file)) {
//                    $uploadOk = 0;
//                }

                //check file size limit 10Mb
                if ($_FILES["fileToUpload"]["size"] > 10000000) {
                    $uploadOk = 0;
                }

                //alow some type img
                if ($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg") {
                    $uploadOk = 0;
                }

                //start upload
                if ($uploadOk == 0) {
//                    $this->set("message", "File khong dung dinh dang");
                    return $this->set("message", false);
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//                        $this->set("message", "Upload anh thanh cong");
//                        return $this->set("message", false);
                    } else {
//                        $this->set("message", "Khong tai duoc file, thu lai");
                        return $this->set("message", false);
                    }
                }

                $this->Post->title = $title;
                $this->Post->category_id = $category_id;
                $this->Post->description = $description;
                $this->Post->price = $price;
                if($sale != "" && $sale != 0){
                    $this->Post->sale = $sale;
                }
                $this->Post->imgname = $_FILES["fileToUpload"]["name"];

                $result = $this->Post->save();

                if($result == -1){
                    return $this->set("message", false);
                }
            }
            return $this->set("message", true);
        }
    }

    function afterAction()
    {
    }
}
