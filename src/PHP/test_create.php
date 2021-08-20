<?php
include_once 'headers/headerPost.php';
include_once 'create.php';

$obj=new Create();
$condition_arr=array('nom'=>'','prenom'=>'','date_naissance'=>'','morphologie'=>'','Objectif'=>'','sexe'=>'','pseudo'=>'','email'=>'','mdp'=>'');
$result=$obj->insertData('utilisateurs',$condition_arr);

?>