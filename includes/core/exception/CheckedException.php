<?php
class CheckedException extends SherryException{
	const ACTION_NOT_FOUND=1;
	const CLASS_NOT_FOUND=2;
	const RESULT_UNDEFINED=3;
	const CONFIG_UNDEFINED=4;
	public function __construct($message = "", $code = 0 , Exception $previous = NULL  ){
		parent::__construct($message , $code ,  $previous );
	}
}