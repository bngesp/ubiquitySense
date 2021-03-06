<?php
namespace models;
/**
 * @table('parameter')
*/
class Parameter{
	/**
	 * @id
	 * @column("name"=>"idparameter","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idparameter;

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

	 public function getIdparameter(){
		return $this->idparameter;
	}

	 public function setIdparameter($idparameter){
		$this->idparameter=$idparameter;
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

	 public function __toString(){
		return $this->idparameter.'';
	}

}