<?php

// verif si la methode utilisée est correcte pour une api rest
if($_SERVER['REQUEST_METHOD'] == 'DELETE') {
  // on inclus la connection et l'acces aux données

include_once 'database.php';

class Delete extends database{
	public $data;
	// function __construct(){

	// 	$this->data=json_decode(file_get_contents("php://input"), true);
	// }

	// public function dumpInfo(){
	// 	var_dump($this->data);
		
	// }

	
  public function deleteData($table,$condition_arr){
		if($condition_arr!=''){
			$sql="delete from $table where ";
			$c=count($condition_arr);	
			$i=1;
			
			foreach($condition_arr as $key=>$val){
				if($i==$c){
					$sql.="$key='$val'";
				}else{
					$sql.="$key='$val' and ";
				}
				$i++;
			}
			echo $sql;
			// database::__construct();
			// die(var_dump($this->dbconnect));

			$result=$this->dbconnect->prepare($sql);
			$result->execute();
			print_r($sql);
		}
	}
	}
}


