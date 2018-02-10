<?php

class startIndexController extends abstractMainController{
	const TEMPLATES_FOLDER = 'templates';
	public function routes(){
	$routes = array( 
/*
		// Standard
		'default' => 'start_controller.php',
		'about' => 'about_controller.php',
		
		// Produkter 
		'product' => 'product_controller.php',
		'products' => 'products_controller.php',
		'search' => 'search_controller.php',
		
		// Kundvagn
		'placeorder' => 'create_order_controller.php',
		'addtocart' => 'cart_controller.php',
		'removecartitem'  => 'cart_controller.php',
		'updatecart'  => 'cart_controller.php',
		'checkout' => 'checkout_controller.php',
		'purchase' => 'checkout_final_controller.php',
		/*
		// Kundrelaterat
		'register' => 'register_controller.php',
		'signin' => 'signin_controller.php',
		'signout' => 'signout_controller.php',
		'account' => 'account_controller.php',
		'orders' => 'order_controller.php',
		);

		*/
		);

	if (isset($_GET['action'])) {
		try {	
				$actionName = $_GET['action'];
				$this->dispatch($actionName);

			}
			catch(\Exception $e){
				$this->dispatch('Default');
			}
		}
		else 
		{
			$this->dispatch('Default');
		}
	

}
	public function dispatch($actionName) //actionname +controller letar efter rätt controller instansierar 
	{
		$controllerAction = (string)$actionName . 'Controller';
		$controller = new $controllerAction;
		$controller->execute();
	}
	public function constantEvents()
	{
		$cart = new addtocartController;
		$cart->addcart();
	}
}