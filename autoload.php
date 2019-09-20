<?php

spl_autoload_register(function ($name){
    $arr = explode("\\", $name);
    $path = __DIR__;
    foreach ($arr as $item){
        $path .= DIRECTORY_SEPARATOR . $item;
    };
    $path .= ".php";
    if (is_file($path)){
        require_once $path;
    }
    else{
        echo "<b>File " . $path . " not found</b>";
        exit();
    }
});