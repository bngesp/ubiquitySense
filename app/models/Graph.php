<?php
namespace models;
/**
 * @table('graph')
*/
class Graph{
	/**
	 * @id
	 * @column("name"=>"idgraph","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idgraph;

	/**
	 * @column("name"=>"libelle","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $libelle;

	/**
	 * @column("name"=>"description","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $description;

	/**
	 * @column("name"=>"config","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $config;

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
	 * @oneToMany("mappedBy"=>"graph","className"=>"models\\Service")
	**/
	private $services;

	/**
	 * @manyToOne
	 * @joinColumn("className"=>"models\\Type_graph","name"=>"idtype_graph","nullable"=>false)
	**/
	private $type_graph;

	 public function getIdgraph(){
		return $this->idgraph;
	}

	 public function setIdgraph($idgraph){
		$this->idgraph=$idgraph;
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

	 public function getConfig(){
		return $this->config;
	}

	 public function setConfig($config){
		$this->config=$config;
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

	 public function getServices(){
		return $this->services;
	}

	 public function setServices($services){
		$this->services=$services;
	}

	 public function getType_graph(){
		return $this->type_graph;
	}

	 public function setType_graph($type_graph){
		$this->type_graph=$type_graph;
	}

	 public function __toString(){
		return $this->idgraph.'';
	}

}