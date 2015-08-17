<?php 
/**
 * 跳转结果
 * @author julian.song
 */
class ResultRedirect implements Result{
	public function createResult(array $resultMap){
		$response=ResponseContext::getResponse();
		$arguments=array();
		foreach($resultMap['arguments'] as $key=>$val){
			array_push($arguments,$key."=".$response->get($val));
		}
		$resultMap['value'].=count($arguments)?"?".implode("&",$arguments):"";
		header("Location: ".$resultMap['value']);
		;
	}
}
?>