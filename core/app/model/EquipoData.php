<?php
class EquipoData {
	public static $tablename = "Equipo";
	public function EquipoData(){
		$this->Nombre_Equipo = "";
//		$this->TipoEquipo = "";
		$this->PuntosEquipo_idPuntosEquipo = "";
		$this->Entidad_idEntidad = "";
		$this->Num_Jugadores = "";
		$this->RepresentanteNombre = "";
		$this->EntrenadorNombre = "";
		$this->Tel_Representante = "";
		$this->Correo_Representante = "";
	}

	public function getEntidad(){ 
            return EntidadData::getById($this->Entidad_idEntidad);         
        }

        /**
         * funcion para ingresar Equipos desde la vista
         */
	public function add(){
            
               $sql = "INSERT INTO ".self::$tablename." ( `PuntosEquipo_idPuntosEquipo`, "
                            . " `Entidad_idEntidad`, `Nombre_Equipo`, `Num_Jugadores`,"
                            . " `RepresentanteNombre`, `EntrenadorNombre`, "
                            . " `Tel_Representante`, `Correo_Representante` ) "
                    . "VALUES ( 2 , 2 ,"
                            . " \"$this->Nombre_Equipo\" ,"
                            . " \"$this->Num_Jugadores\" ,"
                            . " \"$this->RepresentanteNombre\" ,"
                            . " \"$this->EntrenadorNombre\", "
                            . " \"$this->Tel_Representante\" ,"
                            . " \"$this->Correo_Representante\" )";                  

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
//		$sql = "update ".self::$tablename." set NombreEquipo=\"$this->NombreEquipo\",TipoEquipo=\"$this->TipoEquipo\",IdEntidad=\"$this->IdEntidad where IdEquipo=$this->id";
                $sql = "UPDATE `Equipo` "
                            . " SET "
                            . " `PuntosEquipo_idPuntosEquipo`= 1 ,"
                            . " `Entidad_idEntidad`= 1 ,"
                            . " `Nombre_Equipo`= 'MODIFICADO DESDE NETBEANS',"
                            . " `Num_Jugadores`= 7 ,"
                            . " `RepresentanteNombre`= 'JOHAN CAÑON' ,"
                            . " `EntrenadorNombre`= 'PEPITO PEREZ' ,"
                            . " `Tel_Representante`= '123456789' ,"
                            . " `Correo_Representante`= 'CORREODELANOCHE@GMAIL.COM'  "
                    . " WHERE IdEquipo $this->id ";
		Executor::doit($sql);
	}

	public static function getById($id){
//		$sql = "select * from ".self::$tablename." where IdEquipo=$id";
            $sql = "select * from Equipo where IdEquipo=$id";
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