<?php


class Order extends VanillaModel
{
    var $hasOne = array("User" => "User");
    var $hasManyAndBelongsToMany = array("Post" => "Post");
}