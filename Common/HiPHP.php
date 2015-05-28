<?php
// 导入必需文件
require_once BASEDIR.DIRECTORY_SEPARATOR."Common".DIRECTORY_SEPARATOR."Loader.php";
require_once BASEDIR.DIRECTORY_SEPARATOR."Common".DIRECTORY_SEPARATOR."function.php";
require_once BASEDIR.DIRECTORY_SEPARATOR."Common".DIRECTORY_SEPARATOR."config.php";

// 实现类自动加载
spl_autoload_register("\Common\Loader::autoload"); 

$module = G($_GET['m'], 'Home');
$controller = G($_GET['c'], 'Index');
$action = G($_GET['a'], 'index');

\C($module, $controller, $action);