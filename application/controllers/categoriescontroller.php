<?php

class CategoriesController extends BaseController
{

    function beforeAction()
    {
    }

    //	function view($categoryId = null) {
    //		$this->Category->where('parent_id',$categoryId);
    //		$this->Category->showHasOne();
    //		$this->Category->showHasMany();
    //		$subcategories = $this->Category->search();
    //
    //		$this->Category->id = $categoryId;
    //		$this->Category->showHasOne();
    //		$this->Category->showHasMany();
    //		$category = $this->Category->search();
    //
    //		$this->set('subcategories',$subcategories);
    //		$this->set('category',$category);
    //	}

    function view($categoryId = null, $categoryName = null)
    {
        $categories = performAction('products', 'findProducts', array($categoryId, $categoryName));
        var_dump($categories);
    }

    function index()
    {
        //        session_start();
        //	    if(isset($_SESSION["loggedin"])){
        $this->Category->orderBy('name', 'ASC');
        $this->Category->showHasOne();
        $this->Category->showHasMany();
        $this->Category->where('parent_id', '0');
        $categories = $this->Category->search();
        $this->set('categories', $categories);
        //            var_dump($categories);
        //        }


    }

    function list()
    {
    }

    function manager()
    {
    }

    function add()
    {
    }

    function afterAction()
    {
    }
}
