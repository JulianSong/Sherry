<?php
/**
 * 系统配置加载类
 * @author julian.song
 */
class ConfLoader{
    private static $instance=null;
    private function __construct(){}
    /**
     * 加载配置文件
     */
    public  static function loadConfig(){
    	$context= ApplicationContext::getContext();
    	$constants=get_defined_constants(true);
    	foreach($constants['user'] as $key=>$val){
    		Config::$key($val);
    	}
    	include_once Config::SITE_CONF()."/sherry.conf.php";
    	$map=new ControllerMap();
    	$map->setPackages($packages);
    	$context->setControllerMap($map);
    }
}


