<?php 
class ResultJson implements Result{
	public function createResult(array $resultMap){
		$response=ResponseContext::getResponse();
		echo json_encode($response->get($resultMap['value']));
	}
}
?>