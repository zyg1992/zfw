<?php

class Bootstrap extends Yaf_Bootstrap_Abstract 
{
    /**
     * 全局常量定义
     * @param Yaf_Dispatcher $dispatcher
     */
	public function _initConst(Yaf_Dispatcher $dispatcher)
	{
		define('JS', APP_PATH . '/public/js');
		define('img', APP_PATH . '/public/img');
		define('css', APP_PATH . '/public/css');
	}
    
    public function _initConfig(Yaf_Dispatcher $dispatcher)
	{
        
	}
}
