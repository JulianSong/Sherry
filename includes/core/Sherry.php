<?php
/**
 * 
 * @author julian.song
 *
 */
class Sherry{
	public function run(){
		require(dirname(__FILE__) . '/init.php');
		try{
			ConfLoader::loadConfig();
			$context= ApplicationContext::getContext();
			$map=$context->getControllerMap();
			$url= new Url();
			$actionMap=$map->getAction($url->getPackage(),$url->getAction());
			$controller=ControllerFactory::Create($actionMap['class']);
			
			$actionAppointer=ActionAppointer::getInstance();
			$actionAppointer->setController($controller);
			$actionAppointer->appointer($actionMap);
		}catch (FileException $fe){
			$fe->getTraceAsString();
		}catch(CheckedException $ce){
			$ce->getTraceAsString();
		}catch (Exception $e){
			$e->getTraceAsString();
		}
	}
	
}