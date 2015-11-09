<?php

// defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// 
// defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'Users'.DS.'Kevin'.DS.'Sites'.DS.'photo_gallery');

// defined('SITE_ROOT') ? null : define('SITE_ROOT', www.raph-web.com);

//defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

//load config file first
// an optional aproach would be: require_once(LIB.PATH.DS.'config.php'); for all of them
require_once("config.php");

//load basic functions next so that everything after can use them
require_once("functions.php");

//load core objects
require_once("database.php");
require_once("session.php");
require_once("database_object.php");

//load database-related classes
require_once("user.php");
require_once("photograph.php");


?>
