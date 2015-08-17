<?php 
class ResultHtml implements Result{
	public function createResult(array $resultMap){
		$templateEng=SmartyEngine::getInstance();
		$response=ResponseContext::getResponse();
		$valArray=$response->getProperties();
		foreach($valArray as $key=>$val){
			$templateEng->assign($key,$val);
		}
		$templateEng->show($resultMap['value']);
	}
}
?>