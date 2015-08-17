<?php 
class  ControllerMap{
	private $packages=array();
	private $action=array();
	private $result=array();
	private $interceptor=array(); 
	private $interceptorRef=array(); 
	public function  __construct(){}
	/**
	 * 
	 * Enter description here ...
	 * @param string $packageName
	 * @param string $actionName
	 */
	public function getAction( $packageName, $actionName){
		if(isset($this->packages[$packageName]['action'][$actionName])){
			return $this->packages[$packageName]['action'][$actionName];
		}else{
			throw  new CheckedException("Action '$actionName' is not maped in the '$packageName' ",CheckedException::ACTION_NOT_FOUND,null);
		}
	}
	/**
	 * 
	 * Enter description here ...
	 * @param string $packageName
	 * @param string $actionName
	 * @param string $type
	 * @param string $result
	 */
	public function addResult( $packageName, $actionName, $resultName, $type,  $result){
		$this->result[$packageName][$actionName][$resultName]['type']=$type;
		$this->result[$packageName][$actionName][$resultName]['result']=$result;
	}
	/**
	 * 
	 * Enter description here ...
	 * @param string $interceptorName
	 * @param string $interceptorClass
	 */
	public function addInterceptor( $interceptorName,  $interceptorClass){
		$this->interceptor[$interceptorName]=$interceptorClass;
	}
	/**
	 * 
	 * Enter description here ...
	 * @param sting $packageName
	 * @param string $actionName
	 * @param string $interceptorName
	 * @param string $interceptorClass
	 */
	public function addInterceptorRef( $packageName, $actionName,  $interceptorName,  $interceptorClass){
		$this->interceptorRef[$packageName][$actionName]=$interceptorName;
	}
	public function setPackages(array $packages){
		$this->packages=$packages;
		
	}
	public function getPackages(){
		return $this->packages;
	
	}
}
?>