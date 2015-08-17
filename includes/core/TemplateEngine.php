<?php
interface  TemplateEngine {
	public function show($view);
	public function assign($key,$value);
	public function fetch($view);
}
