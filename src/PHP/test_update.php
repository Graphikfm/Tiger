<?php
include_once('headers/headersPut.php');
include('update.php');


$obj=new Update();
$condition_arr=array('nom'=>'Mari','prenom'=>'Fabien','date_naissance'=>'1984-12-06','morphologie'=>'Ectomorphe','Objectif'=>'prise de masse','sexe'=>'homme','pseudo'=>'fmar','email'=>'fabienmari@gmail.com','mdp'=>'hghgdg');
// $id=array('id'=>2);
$result=$obj->updateData('utilisateurs',$condition_arr,'id',2);
?>