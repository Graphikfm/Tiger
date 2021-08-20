<?php
include_once 'headers/headersDelete.php';

include 'delete.php';

$obj=new Delete();
$condition_arr=array('nom'=>'Mari','prenom'=>'Fabien','date_naissance'=>'1984-12-06','morphologie'=>'Ectomorphe','objectif'=>'prise de masse','sexe'=>'Homme','pseudo'=>'fmar','email'=>'fabiennmari@gmail.com','mdp'=>'hghgdg');
$result=$obj->deleteData('utilisateurs',$condition_arr);

?>