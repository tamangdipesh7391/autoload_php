<?php 
spl_autoload_register('autoloader');
function autoloader($className){
    $path = "";
    $ext = ".php";
    $fullPath = $path.$className.$ext;
    include_once($fullPath);
}