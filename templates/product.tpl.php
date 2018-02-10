<?php require(TEMPLATES_FOLDER.'Header.php'); ?>
		
		<div class="image-space">
			<img src="<?php echo IMG_DIR . $currentItem->imgurl;?>">
		</div>
		
		<div class="prod-info">
			<h1 class="prod"><?php echo $currentItem->title; ?> </h1>
			<h2 class="price"><?php echo $currentItem->price; ?>:-</h2>
			<p><?php echo utf8_encode($currentItem->descript); ?></p><br>
				
			<form action="index.php?action=addtocart" method="post">
				<input type="hidden" name="pid" value="<?php echo $currentItem->id; ?>">
				<input type="text" id="prodqty" name="qty" value="1">
				<button type="submit" class="cartbtn">Lägg i varukorg</button>
				<p><b>Lagersaldo:</b> <?php echo $currentItem->sku; ?></p>
			</form>
		</div>

<?php require(TEMPLATES_FOLDER.'Footer.php'); ?>