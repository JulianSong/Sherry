<?php
if(!class_exists('Sherry',false))return false;
class Index extends Controller{
    /**
     * action方法示例
     * @param $params
     */
    public function index(){
       $response=ResponseContext::getResponse();
       $response->set('welcome',"欢迎");
       $response->set('title',"测试首页");
       return $this->OK;
    }
    public function json(){
    	$request=RequestContext::getRequest();
    	$response=ResponseContext::getResponse();
    	$response->set('json',$request->get('FIELD_2'));
    	return $this->OK;
    }
    public function login(){
    	$request=RequestContext::getRequest();
    	$response=ResponseContext::getResponse();
    	$response->set('json',$request->get('name'));
    	return $this->OK;
    }
    
    public function redirect(){
    	$response=ResponseContext::getResponse();
    	$response->set("test","测试");
    	return $this->OK;
    }
}