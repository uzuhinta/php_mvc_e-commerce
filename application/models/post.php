<?php
class Post extends VanillaModel {
    var $hasOne = array('Category' => 'Category');
}