<?php
namespace models;
/**
 * @table('data')
*/
class Data{
	/**
	 * @id
	 * @column("name"=>"iddata","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $iddata;

	/**
	 * @column("name"=>"value","nullable"=>true,"dbType"=>"float")
	**/
	private $value;

	/**
	 * @column("name"=>"date_arrival","nullable"=>true,"dbType"=>"datetime")
	 * @validator("type","dateTime")
	**/
	private $date_arrival;

	/**
	 * @column("name"=>"date_data","nullable"=>true,"dbType"=>"datetime")
	 * @validator("type","dateTime")
	**/
	private $date_data;

	/**
	 * @column("name"=>"sphare1","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $sphare1;

	/**
	 * @column("name"=>"sphare2","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $sphare2;

	/**
	 * @column("name"=>"sphare3","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $sphare3;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Sensor","name"=>"idsensor","nullable"=>false)
	**/
	private $sensor;

	 public function getIddata(){
		return $this->iddata;
	}

	 public function setIddata($iddata){
		$this->iddata=$iddata;
	}

	 public function getValue(){
		return $this->value;
	}

	 public function setValue($value){
		$this->value=$value;
	}

	 public function getDate_arrival(){
		return $this->date_arrival;
	}

	 public function setDate_arrival($date_arrival){
		$this->date_arrival=$date_arrival;
	}

	 public function getDate_data(){
		return $this->date_data;
	}

	 public function setDate_data($date_data){
		$this->date_data=$date_data;
	}

	 public function getSphare1(){
		return $this->sphare1;
	}

	 public function setSphare1($sphare1){
		$this->sphare1=$sphare1;
	}

	 public function getSphare2(){
		return $this->sphare2;
	}

	 public function setSphare2($sphare2){
		$this->sphare2=$sphare2;
	}

	 public function getSphare3(){
		return $this->sphare3;
	}

	 public function setSphare3($sphare3){
		$this->sphare3=$sphare3;
	}

	 public function getSensor(){
		return $this->sensor;
	}

	 public function setSensor($sensor){
		$this->sensor=$sensor;
	}

	 public function __toString(){
		return $this->iddata.'';
	}

}