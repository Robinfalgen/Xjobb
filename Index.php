<?php
session_start();
//Robin
//echo "<pre>";
//var_dump($_SESSION);
//var_dump($_SESSION);

//echo "</pre>";
//session_unset();
require('config.php');
require_once(INCLUDES_FOLDER.'settings_inc.php');


include(CLASS_DIR . 'inc.class.index.php');

$start = new StartIndex;
$start->routes();

if(!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
} 

include(INCLUDES_FOLDER.'cart.inc.php');
require(TEMPLATES_FOLDER.'cart.tpl.php');
