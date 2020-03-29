<?php
namespace models;
/**
 * @table('user')
*/
class User{
	/**
	 * @column("name"=>"username","nullable"=>false,"dbType"=>"varchar(16)")
	 * @validator("length","constraints"=>array("max"=>16,"notNull"=>true))
	**/
	private $username;

	/**
	 * @column("name"=>"email","nullable"=>true,"dbType"=>"varchar(255)")
	 * @validator("email")
	 * @validator("length","constraints"=>array("max"=>255))
	**/
	private $email;

	/**
	 * @column("name"=>"password","nullable"=>false,"dbType"=>"varchar(32)")
	 * @validator("length","constraints"=>array("max"=>32,"notNull"=>true))
	**/
	private $password;

	/**
	 * @column("name"=>"create_time","nullable"=>true,"dbType"=>"timestamp")
	**/
	private $create_time;

	/**
	 * @id
	 * @column("name"=>"iduser","nullable"=>false,"dbType"=>"int(11)")
	 * @validator("id","constraints"=>array("autoinc"=>true))
	**/
	private $iduser;

	/**
	 * @column("name"=>"nom","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $nom;

	/**
	 * @column("name"=>"prenom","nullable"=>true,"dbType"=>"varchar(45)")
	 * @validator("length","constraints"=>array("max"=>45))
	**/
	private $prenom;

	 public function getUsername(){
		return $this->username;
	}

	 public function setUsername($username){
		$this->username=$username;
	}

	 public function getEmail(){
		return $this->email;
	}

	 public function setEmail($email){
		$this->email=$email;
	}

	 public function getPassword(){
		return $this->password;
	}

	 public function setPassword($password){
		$this->password=$password;
	}

	 public function getCreate_time(){
		return $this->create_time;
	}

	 public function setCreate_time($create_time){
		$this->create_time=$create_time;
	}

	 public function getIduser(){
		return $this->iduser;
	}

	 public function setIduser($iduser){
		$this->iduser=$iduser;
	}

	 public function getNom(){
		return $this->nom;
	}

	 public function setNom($nom){
		$this->nom=$nom;
	}

	 public function getPrenom(){
		return $this->prenom;
	}

	 public function setPrenom($prenom){
		$this->prenom=$prenom;
	}

	 public function __toString(){
		return ($this->username??'no value').'';
	}

}