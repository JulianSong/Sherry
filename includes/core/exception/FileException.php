<?php
class FileException extends SilentException{
    const CLASS_FILE_NOT_FOUND=1;
    const CONF_FILE_NOT_FOUND=2;
    public function __construct($message = "", $code = 0 , Exception $previous = null  ){
    	parent::__construct($message, $code, $previous );
    }
}