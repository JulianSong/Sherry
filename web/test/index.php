<?php
require(dirname(__FILE__). '/conf/site.inc');
// use sherry\core;
require(str_replace('web/test/index.php', '', str_replace('\\', '/', __FILE__)). '/includes/core/Sherry.php');
$sherry= new Sherry();
$sherry->run();
