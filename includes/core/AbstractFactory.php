<?php 
/**
 * 抽象工厂类
 * @author julian.song
 */
class AbstractFactory{
	/**
	* 创建对象
	* @param $class
	*/
	public static function create($package,$className){
		ClassLoader::loadClass($package,$className);
		$instance =new $className();
		return $instance ;
	}
}
?>