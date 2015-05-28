<?php
$viewConfig = array(
	'left_delimiter' => '{',
	'right_delimiter' => '}',
	'template_dir' => BASEDIR.DIRECTORY_SEPARATOR.'View',
	'compile_dir' => BASEDIR.DIRECTORY_SEPARATOR.'template_c',
	'cache_dir'	=> BASEDIR.DIRECTORY_SEPARATOR.'Cache',
	'caching'	=>	true,
	'cache_lifetime'	=>	120
);

//数据库配置
$dbConfig = array(
	'DB_HOST' => 'localhost',
	'DB_PORT' => '3306',	
	'DB_USER' => 'root',
	'DB_PWD'  => '',
	'DB_NAME'  =>  'blog',
	'DB_TYPE'  =>  'mysql',
	'DB_CHASET'	=> 	'utf-8',
);
?>
