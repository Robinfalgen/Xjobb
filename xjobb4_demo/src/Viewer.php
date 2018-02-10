<?php

class Viewer 
{
	protected $template_path;
	protected $header_path = 'Header.php';	 
	protected $footer_path = 'Footer.php';
	const BASE_TEMPLATE_PATH = 'templates/';
	//genererar templaten som anropas i metoder
	public function render()
	{
		return include($this->template_path);
	}
	//från anropet i conrollern sätter rätt väg till rätt template
	public function setTemplate($template_path)
	{
		$this->template_path = self::BASE_TEMPLATE_PATH . $template_path;
		return $this;
	}

}