<?php
    spl_autoload_register(function($class){
            if($class.'.php'){
            require $class.'.php';
        }
        });
?>