<?php
include (INCLUDES_FOLDER.'db.conn.inc.php');

include (CLASS_DIR .'inc.class.start.php');
$start = new StartClass;
$result = $start->start();

include(TEMPLATES_FOLDER.'startPage.tpl.php');