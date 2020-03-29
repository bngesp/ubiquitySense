<?php
namespace models;
/**
 * @table('type_graph')
*/
class Type_graph{
	/**
	 * @id
	 * @column("name"=>"idtype_graph","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idtype_graph;

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
	 * @oneToMany("mappedBy"=>"type_graph","className"=>"models\\Graph")
	**/
	private $graphs;

	 public function getIdtype_graph(){
		return $this->idtype_graph;
	}

	 public function setIdtype_graph($idtype_graph){
		$this->idtype_graph=$idtype_graph;
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

	 public function getGraphs(){
		return $this->graphs;
	}

	 public function setGraphs($graphs){
		$this->graphs=$graphs;
	}

	 public function __toString(){
		return $this->idtype_graph.'';
	}

}