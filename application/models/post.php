<?php
class Post extends BaseModel
{
    var $hasOne = array('Category' => 'Category');
}
