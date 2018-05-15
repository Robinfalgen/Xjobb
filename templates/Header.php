<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="css/luftgitarr.menu.css" rel="stylesheet" type="text/css">
		<script src="https://use.fontawesome.com/2db799d532.js"></script>
		<script src="js/basicscript.js")></script>
	</head>
	
	<body>
	<?php require_once INCLUDES_FOLDER. 'init.inc.php';?>
	<?php if($auth->check()): //KONTROLLERAR OM SESSIONEN HAR ETT VÄRDE OCH AVGÖR OM INLOGGAD ELLER EJ. ?>
		<p class ="topparam">Inloggad! <a id="topreg" href="?action=signout">Logga ut</a></p>
	<?php else: // OM SESSION EJ SKAPAD, VÄNLIGEN LOGGA IN: ?>
		<p class ="topparam"> Du är inte inloggad!<a id ="topreg" href="?action=signup">Registrera</a> eller logga in <!--<a href="?action=signin">Logga in</a>--></p>
		<?php
			require_once CLASS_DIR.'inc.class.signin.php';
			$login = new login($auth);
			$login->run();
			//INCLUDE TEMPLATE HERE! include()
			require_once TEMPARTS . 'signin.parts.tpl.php';
		?>
	<?php endif; //OM SESSION EJ SKAPAD,GER ANVÄNDAREN ALTERNATIVET ATT SIGNA UPP?>
	
	<?php
		require(TEMPARTS.'menu.parts.php');
	?>
	
	<section id="content">