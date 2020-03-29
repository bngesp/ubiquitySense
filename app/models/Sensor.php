<?php
namespace models;
/**
 * @table('sensor')
*/
class Sensor{
	/**
	 * @id
	 * @column("name"=>"idsensor","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $idsensor;

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
	 * @column("name"=>"latitude","nullable"=>true,"dbType"=>"float")
	**/
	private $latitude;

	/**
	 * @column("name"=>"longitude","nullable"=>true,"dbType"=>"float")
	**/
	private $longitude;

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
	 * @oneToMany("mappedBy"=>"sensor","className"=>"models\\Data")
	**/
	private $datas;

	/**
	 * @oneToMany("mappedBy"=>"sensor","className"=>"models\\Service")
	**/
	private $services;

	 public function getIdsensor(){
		return $this->idsensor;
	}

	 public function setIdsensor($idsensor){
		$this->idsensor=$idsensor;
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

	 public function getLatitude(){
		return $this->latitude;
	}

	 public function setLatitude($latitude){
		$this->latitude=$latitude;
	}

	 public function getLongitude(){
		return $this->longitude;
	}

	 public function setLongitude($longitude){
		$this->longitude=$longitude;
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

	 public function getDatas(){
		return $this->datas;
	}

	 public function setDatas($datas){
		$this->datas=$datas;
	}

	 public function getServices(){
		return $this->services;
	}

	 public function setServices($services){
		$this->services=$services;
	}

	 public function __toString(){
		return $this->idsensor.'';
	}

}