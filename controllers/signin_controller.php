<?php
require_once INCLUDES_FOLDER. 'init.inc.php';
require_once CLASS_DIR.'inc.class.signin.php';

$login = new login($auth);
$login->run();

//INCLUDE TEMPLATE HERE! include()
require_once TEMPARTS . 'signin.parts.tpl.php';