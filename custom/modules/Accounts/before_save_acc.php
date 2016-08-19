<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
   
    class before_save_acc
    {
        function before_save_acc($bean, $event, $arguments)
			{
            //$bean->account_id_c = $bean->parent_id;
            $bean->parent_id = $bean->account_id_c;


			if($bean->id_etablissement_c == '')
				{
				global $db;
				$query = 
				"SELECT count(*) as cnt from accounts where deleted = 0";
				$result = $db->query($query);
				
				$row = $db->fetchByAssoc($result);

				if(isset($row['cnt'])){

					$temp_num =  $row['cnt']+1;
				}
				
				$bean->id_etablissement_c=$temp_num;
				}
			}
    }

?>