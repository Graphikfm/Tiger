<?php


// verif si la methode utilisée est correcte pour une api rest
if($_SERVER['REQUEST_METHOD'] == 'GET') {
  // on inclus la connection et l'acces aux données

include_once 'database.php';

class Read extends database{

	public function getData($table,$field='*',$condition_arr='',$order_by_field='',$order_by_type='desc',$limit=''){
		$sql="select $field from $table ";
		if($condition_arr!=''){
			$sql.=' where ';
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
		}
		if($order_by_field!=''){
			$sql.=" order by $order_by_field $order_by_type ";
		}
		
		if($limit!=''){
			$sql.=" limit $limit ";
		}
		// die($sql);
		$result=$this->dbconnect->query($sql);
		if($result->rowCount()>0){
			$arr=array();
			while($row=$result->fetch(PDO::FETCH_ASSOC)){
				$arr[]=$row;
			}
			http_response_code(200);
      echo json_encode($arr);
		}else{
			echo json_encode(["error" =>"Il n'y a aucun utilisateur dans la base données"]);
		}
	}

  public function get_safe_str($str){
		if($str!=''){
			return mysqli_real_escape_string($this->dbconnect,$str);
		}
	}
}
}