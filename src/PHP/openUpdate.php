<?php

// verif si la methode utilisée est correcte pour une api rest
if($_SERVER['REQUEST_METHOD'] == 'GET') {
  // on inclus la connection et l'acces aux données

include_once 'database.php';

class Open extends database{
	public $data;
	// function __construct(){

	// 	$this->data=json_decode(file_get_contents("php://input"), true);
	// }

	// public function dumpInfo(){
	// 	var_dump($this->data);
		
	// }

  }
}