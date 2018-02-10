<?php

require(TEMPLATES_FOLDER. 'Header.php');
echo '<div id="404">';
echo '<h1>Hoppsan! (404)</h1>';
echo '<p>Kunde inte hitta sidan. Felkod: 404.</p>';
echo '<p>Prova någon av följande länkar:</p>';
echo '<a href="#">-Home</a> </br> <a href="#">-Help</a> </br> <a href="#">-Produkter</a> </br> <a href="#">-Sitemap.</a>';
echo '</div>';
require(TEMPLATES_FOLDER. 'Footer.php');

?>