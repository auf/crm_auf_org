<?php


  class listViewOverwrite{




     public function overwriteQuery(&$parent_module,$query){

  		        global $current_user;
		        $parent_module->processSearchForm();
		        if(!$current_user->is_admin) 
		            $parent_module->params['custom_where'] = $query ;
		            
		       
		        if (empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false) {
		            $parent_module->lv->setup($parent_module->seed, 'include/ListView/ListViewGeneric.tpl', $parent_module->where, $parent_module->params);
		            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
		            
		        }







     }



  }


?>