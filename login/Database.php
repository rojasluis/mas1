<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->usuario="root";$this->pass="";$this->host="localhost";$this->ddbb="bdmas1pro";
	}

	function connect(){
		$con = new mysqli($this->host,$this->usuario,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
