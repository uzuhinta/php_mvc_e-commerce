<?php

class PostsController extends VanillaController {

    function beforeAction () {

    }

    function view($id = null) {
        $this->Product->id = $id;
        $this->Product->showHasOne();
        $this->Product->showHMABTM();
        $product = $this->Product->search();
        $this->set('product',$product);

    }

    function page ($pageNumber = 1) {
        $this->Product->setPage($pageNumber);
        $this->Product->setLimit('2');
        $products = $this->Product->search();
        $totalPages = $this->Product->totalPages();
        $this->set('totalPages',$totalPages);
        $this->set('products',$products);
        $this->set('currentPageNumber',$pageNumber);
    }

    function index($pageNumber = 1){
        $this->Post->setPage($pageNumber);
        $this->Post->setLimit('10');
//        $this->Post->custom("Select * from posts");
        $posts = $this->Post->search();
        $totalPages = $this->Post->totalPages();
        $this->set('totalPages',$totalPages);
        $this->set('posts',$posts);
        $this->set('currentPageNumber',$pageNumber);
    }

    function findProducts ($categoryId = null, $categoryName = null) {
        $this->Product->where('category_id',$categoryId);
        $this->Product->orderBy('name');
        return $this->Product->search();
    }

    function uploadimg(){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $target_dir = ROOT . DS . "public" . DS . "img" . DS;
            $target_file = $target_dir . $_FILES["fileToUpload"]["name"];
            $uploadOk = 1;
            $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            //Check image is actual or fake
            if(isset($_POST["submit"])){
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false){
                    $uploadOk = 1;
                }else{
                    $uploadOk = 0;
                }
            }

            //check img is already exist
            if(file_exists($target_file)){
                $uploadOk = 0;
            }

            //check file size limit 10Mb
            if($_FILES["fileToUpload"]["size"] > 10000000){
                $uploadOk = 0;
            }

            //alow some type img
            if($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg"){
                $uploadOk = 0;
            }

            //start upload
            if($uploadOk == 0){
                $this->set("message", "File khong dung dinh dang");
            }else{
                if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                    $this->set("message", "Upload anh thanh cong");
                }else{
                    $this->set("message", "Khong tai duoc file, thu lai");
                }
            }
        }
    }

    function afterAction() {

    }


}