<?php
 
class login
{
	protected $auth;
	public function __construct($auth)
	{
		$this->auth = $auth;
	}
	public function run()
	{
		if(!empty($_POST)) // OM POST ARRAYEN HAR FÅTT ETT VÄRDE GÖRS FÖLJANDE:
		{
			$email = $_POST['email'];//VARIABLARNA FÅR SINA VÄRDEN FRÅN POST ARRAYEN OM FÅTT VÄRDE
			$password = $_POST['password'];//VARIABLARNA FÅR SINA VÄRDEN FRÅN POST ARRAYEN OM FÅTT VÄRDE
			$signin = $this->auth->signin([
				'username' => $email,
				'password' => $password
			]);

			if($signin)// OM $signin HAR FÅTT ETT VÄRDE FRÅN RADERNA OVAN, HÄNVISAS MAN TILLBAKS TILL INDEX FILEN (STARTSIDAN)
			{
				echo '<script>window.location="index.php";</script>';
			}
		}
	}
}