<?php

class DefaultController extends startIndexController
{
	public function execute()
	{
				$categoryModel = new CategoryModel;
				$result = $categoryModel->getCategories();
				$this->register('RESULT', $result);
				$viewer = new Viewer;
				$viewer
				->setTemplate('startPage.tpl.php')
				->render();
	}
}		