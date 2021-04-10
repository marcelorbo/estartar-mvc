<?php

session_start();

require_once("config.php");
require_once("vendor/autoload.php");

$app = new \Estartar\Core\App();
$app->Start();