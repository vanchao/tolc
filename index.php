<?php
// echo "So what can I say to this project?";
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
$url = $_GET['url'];
require_once(ROOT . DS . 'core' . DS . 'bootstrap.php');
