<?php
/**
 * action指派器
 * @author julian.song
 */
class ActionAppointer{
    private static $instance=null;
    private $controller=null;
    
    /**
     * 私有的类初始化方法
     */
    private  function __construct(){}
    private function  __clone(){}
    /**
     * 获得单例对象的静态方法
     */
    public  static  function getInstance(){
        if (is_null(self::$instance) || !isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    /**
     * 指派action处理请求
     */
    public function  appointer(array $actionMap){
    	try {
    		
    		$resultString=$this->controller->$actionMap['function']();
    		$this->excuteResult($actionMap['result'][$resultString]);
    	}catch (FileException $fe){
    	  echo $fe->getTraceAsString();
    	}catch(CheckedException $ce){
    	  echo $ce->getTraceAsString();
    	}catch (Exception $e){
    	  echo $e->getTraceAsString();
    	}
    }
    private function excuteResult(array $resultMap){
    	$result=null;
    	try {
        	$result=AbstractFactory::create(Config::RESULT(),"Result".$resultMap['type']);
    	}catch (FileException $fe){
    		if($fe->getCode()==FileException::CLASS_FILE_NOT_FOUND)
    		throw new CheckedException("Rresult type  "."Result".$resultMap['type']." is undefined",CheckedException::RESULT_UNDEFINED,$fe);
    	}catch (CheckedException $ce){
			if($ce->getCode()==CheckedException::RESULT_UNDEFINED)
    		throw new CheckedException("Rresult type  "."Result".$resultMap['type']." is undefined",CheckedException::RESULT_UNDEFINED,$fe);
    	}
        $result->createResult($resultMap);
    	
    }
    /**
     * 获得待指派的controller
     * @param Controller $controller
     */
    public function setController(Controller $controller){
    	$this->controller=$controller;
    }
}