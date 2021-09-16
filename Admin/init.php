<?php

include 'lib/DB_lib/Connection.php'; // calling conn

// Collect DB Classes
spl_autoload_register(function ($class_name) {
    include 'lib/DB_lib/' . $class_name . '.php';
});

// Routes
$tpl = 'template/';
$css = 'public/css/';
$js = 'public/js/';
$img = 'public/img/';
$img = 'public/upload/';

///////////////////////////////

// header view
include $tpl . 'header.php';
//////////////////////////////

// err_handler view
include $tpl . 'err_handler.php';
///////////////////////////////
