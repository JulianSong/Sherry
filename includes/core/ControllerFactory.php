<?php
/**
 * ControllerFactory工厂类
 * @author julian.song
 */
class ControllerFactory {
	/**
	 * 创建action并返回
	 * @param $fields
	 */
	public static function Create($className){
		$controller =AbstractFactory::create(Config::CONTROLLER(),$className);
		if(!$controller instanceof Controller ){
			throw  new CheckedException("Class '$className' is not extends Controller !",CheckedException::CLASS_NOT_FOUND,null);
		}
		return $controller ;
	}
}
