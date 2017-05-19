<?php

    //Makes sure all classes are declared. This is a safety net in case 
    //you forget to add the file in init.php
    function classAutoLoader($class){
        $class = strtolower($class);
        $the_path = "includes/{$class}.php";

        if(is_file($the_path) && !class_exists($class)){
            include $the_path;
        }
    }
    spl_autoload_register('classAutoLoader');

    function redirect($location){
        header("Location: {$location}");
    }

?>