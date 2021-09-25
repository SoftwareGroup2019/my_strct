<?php
if (!defined('init_file')) {
  exit("Page Not Found!!!");
}
include 'lib/DB_lib/Connection.php'; // calling conn

// Collect DB Classes
spl_autoload_register(function ($class_name) {
    include 'lib/DB_lib/' . $class_name . '.php';
});


// lang Config
define('lang_file', TRUE);
include 'lang.php';

//lang Folderes
define('lang_fol', TRUE);
include 'lang/' . $_SESSION['lang'] . '.php';

//
$dir = "";
if ($_SESSION['lang'] == "en") {
  $dir = "ltr";
}
else {
    $dir = "rtl";
}

// Routes
$tpl = 'template/';
$css = 'public/css/';
$js = 'public/js/';
$plugin = 'public/plugins/';
$img = 'public/img/';


///////////////////////////////

// header view
define('header_file', TRUE);
include $tpl . 'header.php';
//////////////////////////////

// err_handler view
define('err_file', TRUE);
include $tpl . 'err_handler.php';
///////////////////////////////
