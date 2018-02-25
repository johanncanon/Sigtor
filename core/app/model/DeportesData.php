<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeportesData
 *
 * @author johan canon
 */
class DeportesData {
    public static $tablename = "Deportes";


	public function DeportesData(){
		$this->Nombre_Deportes = "";
		$this->descripcion = "";
	}

	public function add(){
		$sql = "insert into Deportes (Nombre_Deportes , descripcion ) "
                        . "value (\"$this->Nombre_Deportes\" ,"
                               . "\"$this->descripcion\")";

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

// partiendo de que ya tenemos creado un objecto CategoryData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set name=\"$this->name\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
                echo $sql;
		$query = Executor::doit($sql);
		return Model::one($query[0],new DeportesData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DeportesData());

	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DeportesData());
	}
}
