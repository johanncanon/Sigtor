<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
            $this->user="root_sigtor";
                $this->pass="root*123";
                $this->host="107.180.46.246:3306";
                $this->ddbb="sigtor_pruebas";
	}
	function connect(){
		$con = new mysqli($this->host,
                                  $this->user,
                                  $this->pass,
                                  $this->ddbb);
		$con->query("set sql_mode=''");
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
