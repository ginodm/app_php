<?php
require_once '../config/config.php';
require_once BASE_PATH . '/core/Router.php';

$router = new Router();
$router->dispatch($_GET['url'] ?? '');


