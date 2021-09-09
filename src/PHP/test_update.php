<?php
include_once('headers/headersPut.php');
include('update.php');


$_PUT = json_decode(file_get_contents("php://input"),true);
print_r($_PUT['data']);

$id=$_PUT['data']['id'];
$nom=$_PUT['data']['nom'];
$prenom=$_PUT['data']['prenom'];
$date=$_PUT['data']['date_naissance'];
$morpho=$_PUT['data']['morphologie'];
$objectif=$_PUT['data']['objectif'];
$sexe=$_PUT['data']['sexe'];
$pseudo=$_PUT['data']['pseudo'];
$email=$_PUT['data']['email'];
$mdp=$_PUT['data']['mdp'];
$obj=new Update();

// var_dump($id);
$condition_arr=array('nom'=>$nom,'prenom'=>$prenom,'date_naissance'=>$date,'morphologie'=>$morpho,'objectif'=>$objectif,'sexe'=>$sexe,'pseudo'=>$pseudo,'email'=>$email,'mdp'=>$mdp);
$obj->updateData('utilisateurs',$condition_arr,'id',$id);
echo json_encode(array("response" => $id));


?>