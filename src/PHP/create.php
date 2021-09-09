<?php

// verif si la methode utilisée est correcte pour une api rest
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // on inclus la connection et l'acces aux données

include_once 'database.php';


class Create extends database{
	
  public function insertData($table,$condition_arr){
		if($condition_arr!=''){
			foreach($condition_arr as $key=>$val){
				$fieldArr[]=$key;
				$valueArr[]=$val;
			}
			
			$field=implode(",",$fieldArr);
			$value=implode("','",$valueArr);
			print_r($value);
			$value="'".$value."'";		
			$sql="insert into $table($field) values($value) ";
			print_r($field);
			print_r($value);
			
				
	
				$result=$this->dbconnect->query($sql);
				// $result->execute();
			
			// database::__construct();
			// die(var_dump($this->dbconnect));
			
			
			
			
			print_r($sql);
		}
	}
}
}