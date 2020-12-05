<?php


class User extends VanillaModel
{
//    var $hasMany = array('Post' => 'Post');
    var $hasOne = array('Avatar' => 'Avatar');
}