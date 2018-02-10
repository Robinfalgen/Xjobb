<?php
//klassen som letar efter filnamnen i src mappen matchar filnamn med classnamn
Class Autoloader {
	static protected $_instance;
	const PATH_DIR = 'src';
	const PATH_SEP = '/';
	 static public function register()
    {
        spl_autoload_register(array(self::instance(), 'autoload')); //laddar upp alla klasser
    }

    public function autoload($class)
    {
    	 $classFile =  self::PATH_DIR . self::PATH_SEP . $class; //definerar mapparna den ligger i src
    	 $classFile.= '.php';
     	return include $classFile;
    }
	 static public function instance()
    {
        if (!self::$_instance) { //finns det ingen instance kommer den instanciera Autoloader
            self::$_instance = new Autoloader();
        }
        return self::$_instance;
    }
}