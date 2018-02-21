<?php
class EntidadData {
	public static $tablename = "Entidad";
	public function EntidadData(){
		$this->NombreEntidad = "";
		$this->Foto = "";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (NombreEntidad) ";
		$sql .= "value (\"$this->NombreEntidad\")";
                echo $sql;
		Executor::doit($sql);
	}
        public function add_with_image(){
		$sql = "insert into ".self::$tablename." (NombreEntidad,Foto) ";
		$sql .= "value (\"$this->NombreEntidad\",\"$this->Foto\")";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto EntidadData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\" where IdEntidad=$this->id";
                echo $sql;
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where IdEntidad=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EntidadData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by IdEntidad desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EntidadData());
	}
        	public static function getAlledit(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new CategoryData());

	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EntidadData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EntidadData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EntidadData());
	}


}

?>