<div class="product-list">
<!-- KOM IHÅG ATT ÄNDRA $product['prod_id'] så att den skriver ut 'id' istället med det sk. "as" commandet.-->
	<?php
		//var_dump($result);
	?>
	<img class="image" src="<?php echo IMG_DIR . $product['prod_price']; ?>">
		<a href="?action=product&id=<?php echo $product['product_id'];?> "><h2><?php echo $product['product_title'];?></h2></a>
		<div class="price"><?php echo $product['product_price']; ?>:-</div>
		
		<form action="index.php?action=addtocart" method="post">
			<input type="hidden" name="pid" value="<?php echo $product['product_id']; ?>">
			<input type="hidden" name="qty" value="1">
			<button type="submit" class="cartbtn">Lägg i varukorg</button>
		</form>
</div> 