<?php
class DeporteData {
	public static $tablename = "Deportes";
	public function DeporteData(){
		$this->Nombre_Lugar = "";
		$this->Direccion = "";
		$this->Telefono = "";
		$this->Barrio = "";
		$this->Localidad = "";
	}

	
        	public function add(){
            
               $sql = "INSERT INTO ".self::$tablename." ( `Nombre_Lugar`, "
                            . " `Direccion`, `Telefono`,"
                            . " `Barrio`, `Localidad`) "
                    . "VALUES (\"$this->Nombre_Lugar\","
                            . " \"$this->Direccion\" ,"
                            . " \"$this->Telefono\" ,"
                            . " \"$this->Barrio\" ,"
                            . " \"$this->Localidad\" )";    
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto DeporteData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",lastname=\"$this->lastname\",address=\"$this->address\",phone=\"$this->phone\",email=\"$this->email\",category_id=$this->category_id where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where idDeportes=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DeporteData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by idDeportes desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DeporteData());
	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DeporteData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DeporteData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DeporteData());
	}


}

?>