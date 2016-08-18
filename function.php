<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-18 19:27:43
 * @version $Id$
 */
function C($name, $method){
    require_once('/libs/Controller/'.$name.'Controller.class.php');
    $controller = $name.'Controller';
    $obj = new $controller();
    $obj->$method();
}

function M($name){
    require_once '/libs/Model/'.$name.'Model.class.php';
    $model = $name.'Model';
    $obj = new $model();
    return $obj;
}

function V($name){
    require_once '/libs/View/'.$name.'View.class.php';
    $view = $name.'View';
    $obj = new $view();
    return $obj;
}

function daddslashes($str) {
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}