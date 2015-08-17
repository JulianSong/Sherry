<?php 
class SessionContext extends Context{
	private static $instance=null;
    public function __construct(){
    	$this->property=$_SESSION;
    }
    public  static  function getSession(){
    	if (is_null(self::$instance) || !isset(self::$instance)) {
    		self::$instance = new self();
    	}
    	return self::$instance;
    } 
}
?>