<?php
namespace Home\Model;
use Common\Core\Model as Model;
class BlogModel extends Model {
	
	protected $db;

	public function __construct() {
		$this->db = Model::getInstance()->getDbConnect();
	}

	public function getblog() {
		$sql = sprintf("SELECT * FROM b_blog limit 10");
		$rs = $this->db->query($sql);
		$result = $rs->fetchAll();
		var_dump($result);
		return $result;
	}

	public function haha() {
		return $this->db;
	}
}
?>