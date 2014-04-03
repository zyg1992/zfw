<?php
/**
 * DAO
 * @author zhouyongguo
 *
 */
class DaoModel
{
    private static $dao;
	private function __construct()
	{
		$conf = new Yaf_Config_Ini(CONFIG_PATH . '/application.ini');
		//在这里连接数据库
	}
	
	public function __clone()
	{
		trigger_error('Clone is not allowed', E_USER_ERROR);
	}
	
	public static function getDao()
	{
		if (!(self::$dao instanceof self)) {
			self::$dao = new self();
		}
		
		return self::$dao;
 	}
}