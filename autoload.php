<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
function app_autoload($classname){
    $classname = ROOT. DS . str_replace('\\',DS,$classname).'.php';
    require_once $classname;
}
spl_autoload_register('app_autoload');
?>