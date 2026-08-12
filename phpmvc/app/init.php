<?php

require_once 'core/App.php';
require_once 'core/Controller.php';

$baseUrl = dirname($_SERVER['SCRIPT_NAME']);
if ($baseUrl === '/' || $baseUrl === '\\') {
    $baseUrl = '';
}
define('BASEURL', rtrim($baseUrl, '/') . '/');