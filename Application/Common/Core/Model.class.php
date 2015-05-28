<?php
namespace Common\Core;
class Model {

	private static $instance=null;
	private $dsn;
	private $db;

	private function __construct() {
		global $dbConfig;
		try {
            $this->dsn = "mysql:host={$dbConfig['DB_HOST']};dbname={$dbConfig['DB_NAME']}";
            $this->db = new \PDO($this->dsn, $dbConfig['DB_USER'], $dbConfig['DB_PWD']);
            $this->db->query("set names utf8");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	}

	public static function getInstance() {
		if(!self::$instance instanceof self) {
			self::$instance = new self();  
		}
		return self::$instance;
	}

	public function getDbConnect() {
		return $this->db;
	}

	private function __clone() {

	}
}

?>