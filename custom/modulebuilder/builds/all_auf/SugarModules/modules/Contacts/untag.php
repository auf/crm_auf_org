<?php

$contact_id = $_GET['record'];
$module = $_GET['m'];



if($contact_id){

    
	$model = new $module;
    $model->retrieve($contact_id); 
    $model->modified_c=0;
    $model->save();
    return 1;

}
else{return false;}

?>