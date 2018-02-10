<input type="checkbox" id="cart" name="cart-box">
		<label for="cart"><i class="fa fa-shopping-basket fa-lg" aria-hidden="true"></i></label>
		<div class="cart"><div class="triangle"></div>
<h3>Varukorg</h3>
<form method="post" action="?action=updatecart">
<?php 
		
	

	
		if(isset($cart['cartItems'])) {
?>
		<?php
		foreach ($cart['cartItems'] as $cartItemPid => $cartItemData){
		?>
	<div class="cart-flex">
		<div class="cart-flex-img"><img width="50" src="<?php echo IMG_DIR.$cartItemData['img']; ?>"></div>
		<div class="cart-flex-item"><h1><?php echo $cartItemData['name']; ?></h1>
		<input type="text" class="update_input" name="cartitems[<?php echo $cartItemPid;?>]" value="<?php echo $cartItemData['qty']; ?>"> <button class="updatebtn" type="submit">Ändra</button></div>
		<div class="cart-flex-price"><b><?php echo $cartItemData['sum']; ?> kr</b><br>
		<!-- <td width="20"><?php // echo $cartItemData['sum']; ?></td> -->
		<a href="?action=removecartitem&pid=<?php echo $cartItemPid;?>"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
	</div>

	<?php
		}
	?>
	<div class="cart-sum">
		TOTAL SUMMA: 
		<div class="right"><?php echo $cart['total']; ?> kr</div>
	</div>
	
	<a href="index.php?action=checkout" class="checkoutbtn">TILL KASSAN</a>

	<?php
		} else {
			echo "<div class='no-products'>Du har inga produkter i varukorgen :(</div>";
		}
	?>

</form>