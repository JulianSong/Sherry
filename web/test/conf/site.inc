<?php
define('SITE_PATH', str_replace('conf/site.inc', '', str_replace('\\', '/', __FILE__)));
define('SITE_CONF',SITE_PATH.'conf');
define('CONTROLLER',SITE_PATH.'controller');
define('VIEWS',SITE_PATH.'views');
define('INTERCEPTOR',SITE_PATH.'interceptor');
