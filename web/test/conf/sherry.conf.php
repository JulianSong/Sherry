<?php
/**
 * sherry  配置文件
 */


/**
 * 拦截器
 * @var unknown_type
 */
$interceptors=array();
$interceptors['login']=array('class'=>'Logger');



/**
 * 包
 * @var $package
 */
$packages=array();
$packages['user']=array(
	'action'=>array(
		'index'=>array(
			'class'=>'Index',
			'function'=>'index',
			'pre_interceptors'=>array($interceptors['login'],),
			'result'=>array(
			 	'ok'=>array('type'=>'Html','value'=>'user.login.html'),
			 	'fail'=>array('type'=>'Html','value'=>'user.login.html'),
			 ),
		),
		'json'=>array(
			'class'=>'Index',
			'function'=>'json',
			'result'=>array(
			 	'ok'=>array('type'=>'Json','value'=>'json'),
			 ),
		),
		'login'=>array(
			'class'=>'Index',
			'function'=>'login',
			'result'=>array(
			 	'ok'=>array('type'=>'Json','value'=>'json'),
			 ),
		),
		'redirect'=>array(
			'class'=>'Index',
			'function'=>'redirect',
			'result'=>array(
				'ok'=>array('type'=>'Redirect','value'=>'index','arguments'=>array('test'=>'test')),
			),
		),
	),
);

?>