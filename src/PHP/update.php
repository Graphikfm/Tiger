<?php
// verif si la methode utilisée est correcte pour une api rest
if($_SERVER['REQUEST_METHOD'] == 'PUT') {
  // on inclus la connection et l'acces aux données
include_once 'database.php';

class Update extends database{
	
  public function updateData($table,$condition_arr,$where_field,$where_value){
		if($condition_arr!=''){
			$sql="update $table set ";
			$c=count($condition_arr);	
			$i=1;
			foreach($condition_arr as $key=>$val){
				if($i==$c){
					$sql.="$key='$val'";
				}else{
					$sql.="$key='$val', ";
				}
				$i++;
			}
			$sql.=" where $where_field='$where_value' ";
			$result=$this->dbconnect->query($sql);
      print_r($sql);
		}
	}
}
}
