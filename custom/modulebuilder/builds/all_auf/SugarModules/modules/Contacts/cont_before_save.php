<?php

class cont_before_save{

	public function cont_before_save(&$bean, $event, $arguments){
	 global $current_user;

	 if(!$current_user->is_admin){


	 	$bean->modified_c = 1;
	 }
		
	}
}

?>