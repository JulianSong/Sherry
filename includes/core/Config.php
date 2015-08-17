<?php 
class Config{
	private  static $config=array();
	public static function __callStatic($name, $arguments=null){
	 	if(isset(self::$config[$name])&&$arguments==null){
	 		return self::$config[$name];
	 	}elseif(!isset(self::$config[$name])&&$arguments!=null){
		 	self::$config[$name]=$arguments[0];
	 	}elseif(!isset(self::$config[$name])&&$arguments==null){
		 	throw new CheckedException("Config '$name' is undefined ",CheckedException::CONFIG_UNDEFINED,null);
	 	}
	}
}
?>