<?php 
class ResponseContext extends Context{
	private static $instance=null;
	private function __construct(){}
	private function __clone(){}
	/**
	 * 获得上下文实例
	 */
	public  static  function getResponse(){
		if (is_null(self::$instance) || !isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
} 
?>