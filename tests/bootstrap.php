<?php

function loader($class)
{
    $file = $class . '.php';
    if (file_exists('src/'.$file)) {
        require 'src/'.$file;
    } else if (file_exists('lib/Devtools/'.$file)) {
        require 'lib/Devtools/'.$file;        
    }
}

spl_autoload_register('loader');
