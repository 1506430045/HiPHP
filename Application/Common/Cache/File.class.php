<?php
/**
 * 网页静态化类
 */
namespace Common\Cache;
class File {

	protected $fileBaseDir;	//缓存根目录
	protected $childDir;
	protected $key;			//缓存关键词
	protected $time;		//缓存时间

	public function __construct($key, $time) {
		$this->fileBaseDir = BASEDIR.DIRECTORY_SEPARATOR.'File'.DIRECTORY_SEPARATOR;
		$this->key = $key;
		$this->time = $time;
		$this->childDir = $this->getChildDir();
		ob_start();
	}

	private function getChildDir() {
		$arr = explode('\\', $this->key);
		$module = $arr[0];
		$arr2 = explode('::', $arr[2]);
		$controller = rtrim($arr2[0], 'Controller');
		
		$childDir = $module.DIRECTORY_SEPARATOR.$controller.DIRECTORY_SEPARATOR;
		return $childDir;
	}

	public function getFileDir() {
		$dirPath = $this->fileBaseDir.$this->childDir;
		return $dirPath;
	}

	public function delete() {

	}

	public function get() {

	}

	public function flush() {

	}

	public function createdir($path,$mode){
		if (is_dir($path)){  //判断目录存在否，存在不创建
			$re = true;
		}else{ //不存在创建
			$re = mkdir($path,$mode,true); //第三个参数为true即可以创建多极目录
		}
		return $re;
	}
}
?>