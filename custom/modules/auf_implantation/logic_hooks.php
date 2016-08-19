<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(76, '', 'custom/modules/update_country_field_pays_c_hook.php','update_country_field_pays_c_hook', 'accounts_type_module_update_country_field_pays_c_hook');
$hook_array['before_save'][] = Array(75, 'updateGeocodeInfo', 'modules/auf_implantation/auf_implantationJjwg_MapsLogicHook.php','auf_implantationJjwg_MapsLogicHook', 'updateGeocodeInfo');  
$hook_array['after_relationship_add'] = Array(); 
$hook_array['after_relationship_add'][] = Array(81, 'addRelationship', 'modules/auf_implantation/auf_implantationJjwg_MapsLogicHook.php','auf_implantationJjwg_MapsLogicHook', 'addRelationship'); 
$hook_array['after_relationship_delete'] = Array(); 
$hook_array['after_relationship_delete'][] = Array(82, 'deleteRelationship', 'modules/auf_implantation/auf_implantationJjwg_MapsLogicHook.php','auf_implantationJjwg_MapsLogicHook', 'deleteRelationship'); 

?>