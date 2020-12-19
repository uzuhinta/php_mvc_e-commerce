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
        $this->Post->setLimit('2');
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

    function afterAction() {

    }


}