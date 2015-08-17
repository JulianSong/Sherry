<?php
/**
 * url解析类
 * @author julian.song
 */
class  Url{
	private $action=null;
	private $packge=null;
	/**
	*解析url获得请求的action和参数
	*/
	public function __construct(){
		print_r($_SERVER);
		$_fields=explode('/',str_replace($_SERVER["SCRIPT_NAME"],"",$_SERVER['PATH_INFO']));
		$request=RequestContext::getRequest();
		$this->action=array_pop($_fields);
		$this->packge=array_pop($_fields);
	}
	public function getPackage(){
		return $this->packge;
	}
	public function getAction(){
		return $this->action;
	}
}