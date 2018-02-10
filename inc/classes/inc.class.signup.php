<?php
require_once INCLUDES_FOLDER. 'init.inc.php';
class signup
{
	function run(){
		if(!empty($_POST)) //OM POST VARIABELN HAR VÄRDE, GÖR FÖLJANDE
	{
		$username = $_POST['email'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$zip = $_POST['zip'];
		$city = $_POST['city'];
		$phone = $_POST['phone'];

		// SKAPAR VALIDERINGS INSTANS FÖR ATT VALIDERA ANGIVEN DATA
		$validator = new Validator($database, $errorHandler); // FLYTTAD TILL SIGBUP

		//VALIDERAR DATA
		$validation = $validator->check($_POST, [
			'email' => [
				'required' => true,
				'maxlength' => 200,
				'unique' => 'users',
				'email' => true
			],
			'username' => [
				'required' => true,
				'minlength' => 3,
				'maxlength' => 20,
				'unique' => 'users'
			],
			'password' => [
				'required' => true,
				'minlength' => 5
			],
			'fname' => [
				'required' => true,
				'minlength' => 2
			],
			'lname' => [
				'required' => true,
				'minlength' => 2
			],
			'address' => [
				'required' => true,
				'minlength' => 5
			],
			'password' => [
				'required' => true,
				'minlength' => 5
			],
			'zip' => [
				'required' => true,
				'minlength' => 5
			],
			'city' => [
				'required' => true,
				'minlength' => 2
			],
			'phone' => [
				'required' => true,
				'minlength' => 9
			]

		]);

		
		if($validation->fails())//OM VALIDERINGEN EJ GÅR IGENOM GÖR FÖLJANDE
		{
			echo '<pre>', print_r($validation->errors()->all(), true), '</pre>';//SKRIVER UT ALLA ERROR MESSAGES
		}
		else
		{	// OM VALIDERINGEN GÅR IGEN, KÖRS FUNKTIONEN CREATE I AUTH, SOM SETT FÖLJANDE VÄRRDEN
			$created = $auth->create([
				'email' => $email,
				'username' => $email,
				'password' => $password,
				'fname' => $fname,
				'lname' => $lname,
				'address' => $address,
				'zip' => $zip,
				'city' => $city,
				'phone' => $phone,
				'userlvl' => '1'
			]); 

			if($created)
			{
				header('Location: index.php');
			}
		}
	}
	}
}
//OM POST VARIABELN EJ ÄR SATT, SKAPA FÖLJANDE FÖRMULÄR OCH LÅT ANVÄNDAREN FYLLA I UPPGIFTERNA SÅ ATT POST FÅR VÄRDEN