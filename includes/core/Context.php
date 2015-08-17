<?php 
/**
 * 上下文类
 * @author julian.song
 */
abstract class Context{
    protected $property=array();
	public function getProperty($key){
		if(isset($this->property[$key])){
			return $this->property[$key];
		}else{
			return null;
		}
	}
	public  function setProperty($key,$value){
		if(isset($key)&&isset($value))
		$this->property[$key]=$value;
	}
	public function getProperties(){
		return $this->property;
	}
	public function get($key){
		return $this->getProperty($key);
	}
	public  function set($key,$value){
		$this->setProperty($key,$value);
	}
}
?>