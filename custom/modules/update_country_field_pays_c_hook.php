<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class update_country_field_pays_c_hook
    {
        function accounts_type_module_update_country_field_pays_c_hook($bean, $event, $arguments)
			{	
			$bean->pays_text_c = $bean->billing_address_country;
			}
		
		function contacts_type_module_update_country_field_pays_c_hook($bean, $event, $arguments)
			{	
			$bean->pays_text_c = $bean->primary_address_country;
			}
    }

?>