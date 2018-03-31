<?php
	require(TEMPLATES_FOLDER.'Header.php');
	include_once(CLASS_DIR . 'inc.class.cart.php');
?>

<h1>Checkout</h1>

<div class="checkout"><div class="finalCart">
	<h3>Varukorg</h3>
	<form method="post" action="?action=updatecart">
		
	<?php 	
	 	$cart = get_object_vars($cart);
		if(isset($cart)) {
	?>
		<?php
		foreach ($cart['cart']['cartItems'] as $key=> $cartItemData){
				
			?>
	<div class="cart-flex">
		<div class="cart-flex-img"><img width="50" src="<?php echo IMG_DIR.$cartItemData['img']; ?>"></div>
		<div class="cart-flex-item"><h2 class="nobig"><?php echo $cartItemData['name']; ?></h2>
		<input type="text" class="update_input" name="cartitems[<?php echo $cartItemPid;?>]" value="<?php echo $cartItemData['qty']; ?>"> <button class="updatebtn" type="submit">Ändra</button></div>
		<div class="cart-flex-price"><b><?php echo $cartItemData['sum']; ?> kr</b><br>
		<!-- <td width="20"><?php // echo $cartItemData['sum']; ?></td> -->
		<a href="?action=removecartitem&pid=<?php echo $cartItemPid;?>"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
	</div>

	<?php
		}
		}
	

	?>
		<div class="cart-sum">
			TOTAL SUMMA: 
			<div class="right"><?php echo $cart['totalSum']; ?>kr</div>
		</div>
	</form>
</div>
<form method="post" action="?action=purchase">
	<div class="step-one">
		<h3>Användaruppgifter</h3>
		<fieldset>
			<label class="acclabel" for="fname">Förnamn</label> <span class="error">* </span><br>
			<input type="text" class="accform" autofocus="yes" id="fname" name="checkout[fname]" placeholder="Förnamn som på ditt ID" value="<?php if(isset($_POST['checkout']['fname'])) { echo $firstName; } else { echo $check->fname; } ?>">
			<?php //echo $fnameErr; ?><br>

			<label class="acclabel" for="lname">Efternamn</label> <span class="error">* </span><br>
			<input type="text" class="accform" id="lname" name="checkout[lname]" placeholder="Efternamn som på ditt ID" value="<?php if(isset($_POST['checkout']['lname'])) { echo $lastName; } else { echo $check->lname; } ?>">
			<?php //echo $lnameErr; ?><br>
			
			<label class="acclabel" for="email">Epost</label> <span class="error">* </span><br>
			<input type="text" class="accform" id="email" name="checkout[email]" placeholder="E-post" value="<?php if(isset($_POST['checkout']['email'])) { echo $email; } else { echo $check->email; } ?>">
			<?php //echo $emailErr; ?><br>

			<label class="acclabel" for="number">Mobilnummer</label> <span class="error">* </span><br>
			<input type="text" class="accform" id="number" name="checkout[phone]" placeholder="07xxxxxxxx" value="<?php if(isset($_POST['checkout']['phone'])) { echo $phoneNumber; } else { echo $check->phonenr; } ?>">
			<?php //echo $phoneErr; ?><br>
			
			<label class="acclabel">Adress <span class="error">* </span><br></label>
			<input type="text" class="accform" tabindex="3" id="adress" name="checkout[adress]" placeholder="Postadress" value="<?php if(isset($_POST['checkout']['adress'])) { echo $regAdress; } else { echo $check->address; } ?>"><br>
			<input type="number" class="accform zip" id="zip" maxlength="5" name="checkout[zip]" placeholder="12345" value="<?php if(isset($_POST['checkout']['zip'])) { echo $regZip; } else { echo $check->zip; } ?>">
			<input type="text" class="accform city" id="city" name="checkout[city]" placeholder="Ort" value="<?php if(isset($_POST['checkout']['city'])) { echo $regCity; } else { echo $check->city; } ?>"></label>
			<?php //echo $adressErr; echo $zipErr; echo $cityErr; ?><br>
		</fieldset>
	</div>

	<div class="step-two">
		<h3>Betalsätt</h3>
		<fieldset>	
			<input type="radio" id="betalfaktura" name="checkout[betalning]" value="faktura">
			<label for="betalfaktura">Faktura</label>
			<br><br>
			
			<input type="radio" id="betalkort" name="checkout[betalning]" value="kort">
			<label for="betalkort">Kort</label>
			<br><br>
			
			<input type="radio" id="betalswish" name="checkout[betalning]" value="swish">
			<label for="betalswish">Swish</label>
		</fieldset>
		<h3>Fraktsätt</h3>
		<fieldset>
			<input type="radio" id="fraktdhl" name="checkout[frakt]" value="post-express">
			<label for="fraktdhl">PostNord Express</label>
			<br><br>
			
			<input type="radio" id="fraktpost" name="checkout[frakt]" value="postnord">
			<label for="fraktpost">PostNord Standard</label>
		</fieldset>
	</div>

	<div style="clear:both;"></div>
	<button type="submit" class="buy-btn">Slutför köp</button>
</form>
<!--</div>-->
<?php
	require(TEMPLATES_FOLDER.'Footer.php');

?>