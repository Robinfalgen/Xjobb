<?php

	//$sql = "SELECT * FROM pages WHERE id = 2";
	//$stmt = $conn->prepare($sql);
	//$stmt->execute();
	$fetchAbout = ['Alla partyhjältar behöver en riktig luftgitarr och här har du hittat Sveriges ledande butik för ändamålet.
Vi kränger luftgitarrer i samma takt som ICA säljer tacos på fredagar och med livstids garanti och rätt tillbehör gör vi dig som redan är festens mittpunkt till alla sällskaps självklara luftgitarrkung!
Alla våra luftgitarrer levereras med glädje och stora visioner och har dessutom ingen som helst miljöpåverkan. DET är 2000-talet det.
Välkommen till luftgitarrer.se och en helt ny nivå av prylhysteri!
Kontakt: info@luftgitarrer.se']; //$stmt->fetchAll(PDO::FETCH_ASSOC);
	
	// var_dump($fetchAbout);
	
	require(TEMPLATES_FOLDER.'aboutus.tpl.php');
?>