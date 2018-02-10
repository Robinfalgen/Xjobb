<?php

abstract class abstractMainController
{	//registrerar i minnet globala variabler
	protected function register($name, $data) 
	{
		define($name, $data);


	}
	protected function startPageLoad($arg1)
	{
		return include(self::TEMPLATES_FOLDER.'startPage.tpl.php');
	}
}