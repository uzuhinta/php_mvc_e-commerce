<?php


class Order extends BaseModel
{
    var $hasOne = array("User" => "User");
    var $hasManyAndBelongsToMany = array("Post" => "Post");
}
