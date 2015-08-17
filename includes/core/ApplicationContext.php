<?php 
/**
 * 
 * 应用程序上下文
 * @author julian.song
 *
 */
class ApplicationContext extends Context{
	private static $instance=null;
	private $CONTROLLER_MAP='CONTROLLER_MAP';
	/**
	 * 获得单例对象的静态方法
	 */
	private function __construct(){}
	/**
	 * 获得应用程序上下文实例
	 */
	public  static  function getContext(){
		if (is_null(self::$instance) || !isset(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	/**
	 * 获得控制器配置项
	 */
	public function getControllerMap(){
		return $this->getProperty($this->CONTROLLER_MAP);
	}
	/**
	 * 设置控制器配置项目
	 * @param ControllerMap $map
	 */
	public function setControllerMap(ControllerMap $map){
		$this->setProperty($this->CONTROLLER_MAP,$map);
	}
}
?>