<?php
/**
 * 
 * Enter description here ...
 * @author songjunliang
 *
 */
class Logger implements InterceptorInterface {
	public function interceptor(RequestContext $request){
		echo "test";
	}
}
?>