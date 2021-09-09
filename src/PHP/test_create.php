<?php
include_once 'headers/headerPost.php';
include_once 'create.php';

$_POST = json_decode(file_get_contents("php://input"),true);
print_r($_POST['data']);

$nom=$_POST['data']['nom'];
$prenom=$_POST['data']['prenom'];
$date=$_POST['data']['date_naissance'];
$morpho=$_POST['data']['morphologie'];
$objectif=$_POST['data']['objectif'];
$sexe=$_POST['data']['sexe'];
$pseudo=$_POST['data']['pseudo'];
$email=$_POST['data']['email'];
$mdp=$_POST['data']['mdp'];
// print_r($nom);

$obj=new Create();
$condition_arr=array('nom'=>$nom,'prenom'=>$prenom,'date_naissance'=>$date,'morphologie'=>$morpho,'Objectif'=>$objectif,'sexe'=>$sexe,'pseudo'=>$pseudo,'email'=>$email,'mdp'=>$mdp);
$result=$obj->insertData('utilisateurs',$condition_arr);

?>