<?php
require(TEMPLATES_FOLDER.'Header.php');	

	
?>
<h1>Välkommen till Luftgitarr.se</h1>
<h3>Hos oss på Luftgitarr.se kan du som luftgitarr entusiast köpa dom bästa och nyaste produkterna</h3>
		<?php 
			foreach ($result as $key) {
			
			
		?>
		<div class="start-banner">
			<div class="img"><img src=></div>
			<div class="info">
				<p><?php echo $key['timestamp']; ?></p>
				<h1 class="banner"><?php echo utf8_encode( $key['title']); ?></h1>
				<p class="content"><?php echo utf8_encode( $key['text'] );?></p>
				<a class="banner-button" href=""></a>
			</div>
		</div>
<?php } 
require(TEMPLATES_FOLDER.'Footer.php');
?>