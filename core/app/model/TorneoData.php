<?php

class TorneoData {

    public static $tablename = "Torneo";

    public function TorneoData() {
        $this->NombreTorneo = "";
        $this->TIpoTorneo = "";
        $this->FechaInicio = "";
        $this->FechaInicio = "";
        $this->Deportes_idDeportes = "";
    }

	public function CategoryData(){
		$this->NombreTorneo = "";
		$this->Deportes_idDeportes = "";
		$this->FechaInicio = "";
		$this->FechaInicio = "";
	}
        public function getDeportes(){ return DeporteData::getById($this->Deportes_idDeportes); }
	public function add(){
            
               $sql = "INSERT INTO ".self::$tablename." ( `NombreTorneo`, "
                            . " `FechaInicio`, `FechaFin`,"
                            . " `Deportes_idDeportes`) "
                    . "VALUES (\"$this->NombreTorneo\","
                            . " \"$this->FechaInicio\" ,"
                            . " \"$this->FechaFin\" ,"
                            . " \"$this->Deportes_idDeportes\" )";         
		Executor::doit($sql);
	}

    public function getDeportes() {
        return DeportesData::getById($this->Deportes_idDeportes);
    }

    public static function delById($id) {
        $sql = "delete from " . self::$tablename . " where id=$id";
        Executor::doit($sql);
    }

    public function del() {
        $sql = "delete from " . self::$tablename . " where id=$this->id";
        Executor::doit($sql);
    }

// partiendo de que ya tenemos creado un objecto CategoryData previamente utilizamos el contexto
    public function update() {
        $sql = "update " . self::$tablename . " set name=\"$this->name\" where id=$this->id";
        Executor::doit($sql);
    }

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where idtorneo=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CategoryData());
	}

    public static function getAll() {
        $sql = "select * from " . self::$tablename;
        $query = Executor::doit($sql);
        return Model::many($query[0], new TorneoData());
    }

    public static function getLike($q) {
        $sql = "select * from " . self::$tablename . " where name like '%$q%'";
        $query = Executor::doit($sql);
        return Model::many($query[0], new TorneoData());
    }

}
