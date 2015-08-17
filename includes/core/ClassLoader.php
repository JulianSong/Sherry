<?php 
class ClassLoader{
	/**
	*加载类文件
	*/
	public static function loadClass($package,$className){
		$fp=$package.'/'.$className.'.php';
		if(!file_exists($fp)){
			throw  new FileException("File  '$className.php'  was not found in the path '".CONTROLLER."'",FileException::CLASS_FILE_NOT_FOUND,null);
		}
		require_once ($fp);
		if(!class_exists($className)){
			throw  new CheckedException("Class '$className' was not found in the file '$fp'",CheckedException::CLASS_NOT_FOUND,null);
		}
	}
}
?>