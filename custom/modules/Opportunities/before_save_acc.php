<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class before_save_acc
    {
        function before_save_acc($bean, $event, $arguments)
			{
			$bean->montant_finance_c = ($bean->montant_initial_c + $bean->montant_partenariats_c) - $bean->fetched_row['montant_initial_c'];
			$bean->amount = $bean->montant_finance_c - $bean->montant_propositions_c;
			
			}
    }

?>