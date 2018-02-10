<?php require(TEMPLATES_FOLDER.'Header.php'); ?>

		<div class="image-space">
			<img src="<?php echo IMG_DIR . $product['img'];?>">
		</div>
		<div class="prod-info">
			<h1 class="prod"><?php echo utf8_encode( $result['product_title']); ?> </h1>
			<h2 class="price"><?php echo $result['product_price']; ?>:-</h2>
			<p><?php echo utf8_encode($result['product_description']); ?></p><br>
				
			<form action="index.php?action=addtocart" method="post">
				<input type="hidden" name="pid" value="<?php echo $produkt['product_id']; ?>">
				<input type="text" id="prodqty" name="qty" value="1">
				<button type="submit" class="cartbtn">Lägg i varukorg</button>
				<p><b>Lagersaldo:</b> <?php echo $result['sku']; ?></p>
			</form>
		</div>

<?php require(TEMPLATES_FOLDER.'Footer.php'); ?>