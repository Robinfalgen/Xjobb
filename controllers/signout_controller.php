<?php

require_once INCLUDES_FOLDER. 'init.inc.php';

$auth->signout(); //UNSETTAR SESSIONEN, SÄTTER VÄRDET "" TILL AUTH->Session, (LOGGAR UT)

header('Location: index.php'); // SKICKAR VIDARE USER TILL index.php igen (utloggad)