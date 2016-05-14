<?php
define('ROOT', dirname(__FILE__) . '/');
define('CORE', dirname(__FILE__) . '/core/');
define('APP', dirname(__FILE__) . '/app/');
include CORE . 'framework.php';
app::gi()->start();