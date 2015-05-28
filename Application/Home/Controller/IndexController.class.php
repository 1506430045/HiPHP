<?php
namespace Home\Controller;
use Common\Core\Controller as Controller;
use Common\Tool as Tool;

class IndexController extends Controller {

	public function index() {
		var_dump(__METHOD__);
	}
	
	public function test() {
		$arr = array(
			0	=> array('id'=>1, 'name'=>'xingai', 'age'=>23),
			1	=> array('id'=>2, 'name'=>'sdinasai', 'age'=>24),
			);
		$jsonData = Tool\ApiTool::ArrToJson(200, 'success' ,$arr);
		//exit($jsonData);
		echo $xmlData = Tool\ApiTool::ArrToXML(200, 'success', $arr);

	}

	public function getBlog() {
		$model = \M('Home', 'Blog');
		$blog = $model->getBlog();	
		$this->assign('haha', 'haha');
		$this->display('Admin/blog.html');
	}

	public function fileTest() {
		$id = $_GET['id'];
		$o = new \Common\Cache\File(__METHOD__, 10000);
		$dirPath =  $o->getFileDir();
		$fileName = $dirPath.md5(__METHOD__.$id).'.html';
		if(file_exists($fileName) && filemtime($fileName)+30 > time()) {
			echo file_get_contents($fileName);
		} else {
			$this->assign('nima','我是许向前dsdsds');
			$this->display('Home/test.html');
			if(!file_exists($fileName)) {
				$o->createdir($dirPath, 777);
			}
			echo ob_get_contents();
			file_put_contents($fileName, ob_get_clean());
		}
	}
}
?>