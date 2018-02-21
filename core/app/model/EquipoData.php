<?php
class EquipoData {
	public static $tablename = "Equipo";
	public function EquipoData(){
		$this->NombreEquipo = "";
		$this->TipoEquipo = "";
	}

	public function getEntidad(){ return EntidadData::getById($this->IdEntidad); }

	public function add(){
		$sql = "insert into ".self::$tablename." (NombreEquipo,TipoEquipo,IdEntidad) ";
		$sql .= "value (\"$this->NombreEquipo\",\"$this->TipoEquipo\",$this->IdEntidad)";
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

// partiendo de que ya tenemos creado un objecto EquipoData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set NombreEquipo=\"$this->NombreEquipo\",TipoEquipo=\"$this->TipoEquipo\",IdEntidad=\"$this->IdEntidad where IdEquipo=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where IdEquipo=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EquipoData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by IdEquipo desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EquipoData());
	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EquipoData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EquipoData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EquipoData());
	}


}

?>