<?php
include('headers/headerGet.php');

include('read.php');

$obj=new Read();
// $condition_arr=array('prenom'=>'Fabien');
$result=$obj->getData('utilisateurs');

?>