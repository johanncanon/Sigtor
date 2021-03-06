<?php
class JugadorData {
	public static $tablename = "Participante";
	public function JugadorData(){
		$this->title = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->is_public = "0";
		$this->created_at = "NOW()";
	}

	public function getEquipo(){ return EquipoData::getById($this->IdEquipo); }

	public function add(){
		$sql = "insert into ".self::$tablename." (Nombre,Apellido,Sexo,TipoDocumento,NumeroDocumento,FechaNacimiento,IdEquipo) ";
		$sql .= "value (\"$this->Nombre\",\"$this->Apellido\",\"$this->Sexo\",\"$this->TipoDocumento\",$this->NumeroDocumento,\"$this->FechaNacimiento\",$this->IdEquipo)";
                echo $sql;
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

// partiendo de que ya tenemos creado un objecto JugadorData previamente utilizamos el contexto
	public function update_active(){
		$sql = "update ".self::$tablename." set last_active_at=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\",lastname=\"$this->lastname\",address=\"$this->address\",phone=\"$this->phone\",email=\"$this->email\",category_id=$this->category_id where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new JugadorData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by IdParticipante desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new JugadorData());
	}

	public static function getAllActive(){
		$sql = "select * from client where last_active_at>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new JugadorData());
	}

	public static function getAllUnActive(){
		$sql = "select * from client where last_active_at<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new JugadorData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where title like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new JugadorData());
	}


}

?>