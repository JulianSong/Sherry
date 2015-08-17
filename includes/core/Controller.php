<?php
/**
 * Controller基类
 * @author julian.song
 */
class  Controller{
	private $actionMap=array();
	protected  $OK='ok';
	protected $FAIL='fail';
	protected $NONE='none';
	protected $SIGN='sign';
    /**
     * 初始化
     * @param  $actionName
     */
    public function _construct(){}
    public  function __call($name,$p){
    	throw  new CheckedException("Function $name was not found  ",CheckedException::ACTION_NOT_FOUND, null);
    }
    public function getActionMap(){
    	
    }
}