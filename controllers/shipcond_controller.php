<?php

	$fetchAbout ='
 
	<h2>Leveranser</h2>
	
	<p>Leveranstiden finns angiven i informationen för varje artikel. För de allra flesta artiklar är leveranstiden 5 dagar, men undantag finns.</p>

 

	<h2>Returer</h2>
<p>Returer sker på kundens bekostnad utom om varan är defekt eller om vi har packat fel. Returer ska skickas som brev eller paket, inte mot postförskott. Vid byten betalar vi den nya frakten från oss till kunden.</p>

 '; //$stmt->fetchAll(PDO::FETCH_ASSOC);
	
	// var_dump($fetchAbout);
	
	require(TEMPLATES_FOLDER.'aboutus.tpl.php');
?>