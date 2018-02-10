<?php
//echo 'signup_controller';
require_once INCLUDES_FOLDER. 'init.inc.php';
require_once CLASS_DIR.'inc.class.signup.php';

$signup = new signup;
$signup->run();

require_once TEMPLATES_FOLDER. 'signup.tpl.php';

//OM POST VARIABELN EJ ÄR SATT, SKAPA FÖLJANDE FÖRMULÄR OCH LÅT ANVÄNDAREN FYLLA I UPPGIFTERNA SÅ ATT POST FÅR VÄRDEN
?>
