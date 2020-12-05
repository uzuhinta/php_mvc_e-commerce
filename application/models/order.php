<?php


class order extends VanillaModel
{
    var $hasOne = array("User" => "User");
}