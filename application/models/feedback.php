<?php


class Feedback extends VanillaModel
{
    var $hasOne = array("User" => "User",
                        "Post" => "Post");
}