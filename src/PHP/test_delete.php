<?php
include_once('headers/headersDelete.php');

include('delete.php');
// $test = new delete();
// $test->dumpInfo();
$id=$_GET['id'];
var_dump($_GET['id']);

$test = new Delete();
$condition_arr=array('id'=>$id);
$result=$test->deleteData('utilisateurs',$condition_arr);
echo json_encode(array("response" => $id));

// $data=json_decode(file_get_contents("php://input"), true);

// echo json_encode(array('status' => $data));
// $data=json_decode($data, true);
// echo $data;


// $obj=new Delete();
// $condition_arr=array('id'=>$id);
// $result=$obj->deleteData('utilisateurs',$condition_arr);

?>