<?php


class User extends BaseModel
{
    //    var $hasMany = array('Post' => 'Post');
    var $hasOne = array('Avatar' => 'Avatar');
}
