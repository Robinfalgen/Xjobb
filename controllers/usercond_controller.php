<?php
	$fetchAbout ='
	<h2>Priser och betalning</h2>
	<p>Varje vara anges med pris inklusive moms. I varukorgen kan man se det totala priset inklusive moms och frakt. Om du är inloggad i webbshopen via Svenska kyrkans intranät kommer du att internfaktureras via KOB. Övriga har enbart kortbetalning (kreditkort/direktbetalning) via DIBS som alternativ.</p>
 
	<h2>Leveranser</h2>
	
	<p>Leveranstiden finns angiven i informationen för varje artikel. För de allra flesta artiklar är leveranstiden 5 dagar, men undantag finns.</p>

 

	<h2>Returer</h2>
<p>Returer sker på kundens bekostnad utom om varan är defekt eller om vi har packat fel. Returer ska skickas som brev eller paket, inte mot postförskott. Vid byten betalar vi den nya frakten från oss till kunden.</p>

 

<h2>Kakor (cookies)</h2>
<p>Denna webbutik använder sig av kakor enligt Electronic Communications Act, 25 juli 2003. En kaka är en liten textfil som lagras på din dator och som innehåller information för att hjälpa webbutiken att identifiera och följa användare. Kakor finns som sessionskakor och som kakor som lagras permanent på din dator. Under tiden för ditt första besök i webbutiken blir din webbläsare tilldelad en sessionskaka som är unik och som används för att inte blanda ihop dig som användare med andra användare. För att kunna använda webbutiken bör du tillåta kakor i din webbläsare.</p>

'; //$stmt->fetchAll(PDO::FETCH_ASSOC);
	
	
	
	require(TEMPLATES_FOLDER.'aboutus.tpl.php');
?>