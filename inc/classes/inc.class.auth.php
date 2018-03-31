<?php
require_once(INCLUDES_FOLDER . 'db.conn.inc.php'); //EXTENDA ISTÄLLET ??

class Auth //AUTHORISE CLASS
{
	public $test = 'hej';
	protected $db; // DB NAME
	protected $hash; //HASH,PW
	protected $session = 'users'; // SESSION, USER
	protected $table = 'users'; //POINTS TO USER TABLE
	public $signedout;
	public function __construct(Database $database, Hash $hash){ // CONSTRUCTOR, SKAPAR ANSLUTNING? $HASH?? USER?? FREDRIK??
		$this->db = $database;  
		$this->hash = $hash;
	}

	public function create($data)
	{
		if(isset($data['password']))
		{
			$data['password'] = $this->hash->make($data['password']);// HASHAR ANGIVET LÖSENORD
		}
		return $this->db->table($this->table)->insert($data); //SKICKAR OCH SPARAR DATA I DATABASEN EFTER VALIDERAT*/
	}

	public function signin($data) // LOGGAR IN MED ANGIVEN DATA
	{
		$user = $this->db->table($this->table)->where('email', '=', $data['username']);
		/*echo '<pre>';
		var_dump($user);
		echo '</pre>';
		*/
		if($user->count())
		{
			$user = $user->first();
			//echo get_class($user);
			if($this->hash->verify($data['password'], $user->password))
			{
				$this->setAuthSession($user->user_id);
				return true;
			}
		}

		return false;
	}

	public function check()
	{
		return isset($_SESSION[$this->session]);
	}

	public function signout()
	{
		unset($_SESSION[$this->session]); //UNSETTAR SESSIONEN, (LOGGAR UT)
		$signedout = true;
	}

	protected function setAuthSession($id)
	{
		$_SESSION[$this->session] = $id; //SÄTTER VÄRDE till variabeln 'Auth->session'. Värdet hämtas ifrån
	}
}

//public function test(){} //echo 'Test!';

    //*$this->db = $db; //var_dump($this->database); //object(Database)#1 (0) { }
