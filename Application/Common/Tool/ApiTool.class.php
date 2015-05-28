<?php
namespace Common\Tool;
class ApiTool {

	//数组转json
	static public function ArrToJson($code, $msg, $data) {
		if(!is_numeric($code)) {
			return '';
		}
		
		$result = array(
			'code'	=>	$code,
			'msg'	=>	$msg,
			'data'	=>	$data
		);
		return json_encode($result);
	}

	//数组转xml
	static public function ArrToXML($code, $msg, $arr) {
		header("Content-Type:text/xml");
		$xml = "<?xml version='1.0' encoding='UTF-8'?>";
		$xml .= "<root>";
		$xml .= "<code>{$code}</code>";
		$xml .= "<msg>{$msg}</msg>";
		$xml .= self::xmlToEncode($arr);
		$xml .= "</root>";
		return $xml;
	}

	static public function xmlToEncode($data) {
		$xml = $attr = "";
		foreach ($data as $k => $v) {
			if(is_numeric($k)) {
				$attr = "id = '{$k}'";
				$k = "item";
			}
			$xml .= "<{$k} {$attr}>";
			$xml .= is_array($v) ? self::xmlToEncode($v) : $v;
			$xml .= "</{$k}>";
		}
		return $xml;
	}
}




