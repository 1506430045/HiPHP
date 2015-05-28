<?php
//执行控制器方法
function C($module, $controller, $action) {
	$strController = $module.'\\Controller\\'.$controller.'Controller';
	$obj = new $strController();
	$obj->$action();
}

//返回模型对象
function M($module, $model) {
	$strModel = $module.'\\Model\\'.$model.'Model';
	$obj = new $strModel;
	return $obj;
}

//get参数过滤
function G($name, $index) {
	if(!get_magic_quotes_gpc()) {
		$name = addslashes($name);
	}
	return $name ? $name : $index;
}

function ORG($params=array()) {
    require_once APPDIR.DIRECTORY_SEPARATOR."ORG".DIRECTORY_SEPARATOR."Smarty".DIRECTORY_SEPARATOR."Smarty.class.php";
	$obj = new Smarty();
	if(!empty($params)) {
    	foreach ($params as $key => $value) {
			$obj->$key = $value;
	    }
    }
	return $obj;
}
?>
