<?php
class SmartyEngine implements TemplateEngine{
	private static $instance = null;
	private $templateEng;
	private function __construct() {
		$this->templateEng = new Smarty();
		$this->templateEng->template_dir = Config::VIEWS() . '';
		$this->templateEng->compile_dir = Config::SITE_PATH() . 'temp/templates_c/';
		$this->templateEng->cache_dir = Config::SITE_PATH() . 'temp/cache/';
		$this->templateEng->caching = false;
		$this->templateEng->left_delimiter = "<{";
		$this->templateEng->right_delimiter = "}>";
	}
	private function __clone() {}
	public static function getInstance() {
		if (is_null(self::$instance) || !isset(self::$instance)) {
			self::$instance=new self();
		}
		return self::$instance;
	}
	public function show($view){
		return $this->templateEng->display($view);
	}
	public function assign($key,$value){
		return $this->templateEng->assign($key,$value);
	}
	public function fetch($view){
		return $this->templateEng->fetch($view);
	}
}
