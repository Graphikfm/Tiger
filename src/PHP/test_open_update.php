<?php
include_once('headers/headerGet.php');

// include('openUpdate.php');
// $test = new delete();
// $test->dumpInfo();
$id=$_GET['id'];
vardump($id);
// $test = new Open();
// $condition_arr=array('id'=>$id);
// $result=$test->deleteData('utilisateurs',$condition_arr);
echo json_encode(array("response" => $id));