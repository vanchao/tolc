<?php

require_once(ROOT . DS . 'config' . DS . 'config.php');
require_once(ROOT . DS . 'core' . DS . 'functions.php');

function __autoload($className) {
    if (file_exists(ROOT . DS . 'core' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'core' . DS . strtolower($className) . '.php');
    } else if (file_exists(ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'application' . DS . 'controllers' . DS . strtolower($className) . '.php');
    } else if(file_exists(ROOT . DS . 'application' . DS . 'models' . DS . $className . '.php')) {
        require_once(ROOT . DS . 'application' . DS . 'models' . DS . $className . '.php');
    } else if(file_exists(ROOT . DS . 'core' . DS . 'sql.php')) {
        require_once(ROOT . DS . 'core' . DS . 'sql.php');
    }
    
}

// Route all request
Router::route($url);
