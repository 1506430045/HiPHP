<?php
namespace Common;
class Loader {
	static function autoload($class) {
		$file = APPDIR."\\".$class.".class.php";
		$file = str_replace('\\', '/', $file);
		if(file_exists($file)) {
			require_once $file;
		}
		
	}
}