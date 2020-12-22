<?php


class Feedback extends BaseModel
{
    var $hasOne = array(
        "User" => "User",
        "Post" => "Post"
    );
}
