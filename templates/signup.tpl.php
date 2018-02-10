<?php require_once(TEMPLATES_FOLDER.'Header.php'); ?>

<form action="" method="post">
	<fieldset>
		<legend>Registrera</legend>
		<label>
			Email
			<input type="text" name="email">
		</label>
		<label>
			<!--Username
			<input type="text" name="username">-->
		</label>
		<label>
			Password
			<input type="password" name="password">
		</label>
		
		<label>
			First name
			<input type="text" name="fname">
		</label>
		<label>
			Last name
			<input type="text" name="lname">
		</label>
		<label>
			Address
			<input type="text" name="address">
		</label>
		<label>
			Zip
			<input type="text" name="zip">
		</label>
		<label>
			City
			<input type="text" name="city">
		</label>
		<label>
			Phone number
			<input type="text" name="phone">
		</label>
	</fieldset>
	<input type="submit" value="Sign up">
</form>

<?php require(TEMPLATES_FOLDER.'Footer.php'); ?>