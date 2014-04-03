<?php

define("APP_PATH", dirname(__FILE__));
define("CONFIG_PATH", APP_PATH . '/conf');

$app = new Yaf_Application(CONFIG_PATH . "/application.ini");
$app->bootstrap()->run();


