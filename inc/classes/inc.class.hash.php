<?php

class Hash
{
	public function make($plain) // SKAPAR EN HASHAD VERSION AV PLAIN
	{
		return password_hash($plain, PASSWORD_BCRYPT, ['cost' => 10]);
	}

	public function verify($plain, $hashed) //VERIFIERAR PLAN <-> HASHED MATCHAR
	{
		return password_verify($plain, $hashed);
	}
}