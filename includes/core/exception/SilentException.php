<?php
class SilentException extends SherryException{
	public function __construct($message = "", $code = 0 , Exception $previous = NULL  ){
		parent::__construct($message , $code  ,  $previous  );
	}
}