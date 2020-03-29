<?php
namespace models;
/**
 * @table('service')
*/
class Service{
	/**
	 * @id
	 * @column("name"=>"idservice","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idservice;

	/**
	 * @column("name"=>"libelle","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $libelle;

	/**
	 * @column("name"=>"description","nullable"=>true,"dbType"=>"varchar(255)")
	 * @validator("length","constraints"=>array("max"=>255))
	**/
	private $description;

	/**
	 * @column("name"=>"date_creation","nullable"=>true,"dbType"=>"datetime")
	 * @validator("type","dateTime")
	**/
	private $date_creation;

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
	 * @joinColumn("className"=>"models\\Graph","name"=>"idgraph","nullable"=>false)
	**/
	private $graph;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Sensor","name"=>"idsensor","nullable"=>false)
	**/
	private $sensor;

	/**
	 * @oneToMany("mappedBy"=>"service","className"=>"models\\Channel")
	**/
	private $channels;

	 public function getIdservice(){
		return $this->idservice;
	}

	 public function setIdservice($idservice){
		$this->idservice=$idservice;
	}

	 public function getLibelle(){
		return $this->libelle;
	}

	 public function setLibelle($libelle){
		$this->libelle=$libelle;
	}

	 public function getDescription(){
		return $this->description;
	}

	 public function setDescription($description){
		$this->description=$description;
	}

	 public function getDate_creation(){
		return $this->date_creation;
	}

	 public function setDate_creation($date_creation){
		$this->date_creation=$date_creation;
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

	 public function getGraph(){
		return $this->graph;
	}

	 public function setGraph($graph){
		$this->graph=$graph;
	}

	 public function getSensor(){
		return $this->sensor;
	}

	 public function setSensor($sensor){
		$this->sensor=$sensor;
	}

	 public function getChannels(){
		return $this->channels;
	}

	 public function setChannels($channels){
		$this->channels=$channels;
	}

	 public function __toString(){
		return $this->idservice.'';
	}

}