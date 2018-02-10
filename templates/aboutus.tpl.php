<?php
	require(TEMPLATES_FOLDER.'Header.php');
	
		foreach($fetchAbout as $about) {
?>

<?php echo $about; ?>
<?php
}
	require(TEMPLATES_FOLDER.'Footer.php');
?>