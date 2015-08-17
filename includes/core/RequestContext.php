<?php 
/**
 * 请求数据类
 * @author julian.song
 */
class RequestContext extends Context{
    private static $instance=null;
    /**
     * 获得单例对象的静态方法
     */
    private function __construct(){
    	if($_SERVER["REQUEST_METHOD"]==="POST"){
    	    $this->property=$_POST;
        }elseif($_SERVER["REQUEST_METHOD"]==="GET"){
    	    $this->property=$_GET;
    	}else{
    	    $this->property=$_REQUEST;
    	}
    }
    private function __clone(){}
    /**
     * 获得requset对象实例
     */
    public  static  function getRequest(){
    	if (is_null(self::$instance) || !isset(self::$instance)) {
    		self::$instance = new self();
    	}
    	return self::$instance;
    }
}
?>