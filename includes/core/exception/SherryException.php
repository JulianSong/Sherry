<?php
class SherryException extends Exception{
	public  function __construct($message = "", $code = 0 , Exception $previous = null  ){
		$log=date("Y-m-d h:i:s")." $message  ".PHP_EOL.$this->getTraceAsString();
		SherryLog::LOG($log); 
	}
}