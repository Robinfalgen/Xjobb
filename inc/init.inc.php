<?php

//session_start(); // STARTAR SESSIONEN

//$app = __DIR__;//PEKAR PÅ ROOT MAPP (INDEX.PHP FILENS MAPP)

require_once CLASS_DIR . "inc.class.errorhandler.php";
require_once CLASS_DIR . "inc.class.validator.php"; // VALIDERING AV INDATAN
require_once CLASS_DIR . "inc.class.hash.php";
require_once CLASS_DIR . "inc.class.auth.php";
require_once INCLUDES_FOLDER . "db.conn.inc.php";
require_once CLASS_DIR . 'inc.class.database.php';

$database = new Database; // INSTANTIERAR ETT NYTT DATABAS OBJEKT (KOLLA DATABASE.PHP OCH SE VAD EXAKT SOM HÄNDER DÄR...)
$errorHandler = new ErrorHandler; //INSTANTIERAR EN NY ERRORHANDLER SOM HANTERAR FEL(MEDDELANDEN)...
$hash = new Hash; /// HASH INSTANS, HASHAR LÖSENORDER / VERIFIERAR ATT HASHNINGEN STÄMMER
$auth = new Auth($database, $hash); // INSTANTIERAR EN NY AKTORISERARE