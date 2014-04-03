<?php

class IndexController extends Yaf_Controller_Abstract
{
	public function indexAction() 
	{
		echo "modules test";
		$test = new TestModel();
		 var_dump($test->modelTest());
		exit;
	}


	public function fooAction()
	{
		$params = $this->getRequest()->getParams();
		echo "<pre>";
		print_r($params);
		exit;
	}

}
