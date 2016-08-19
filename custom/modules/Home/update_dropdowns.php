<?php
 

	include('custom/include/language/fr_CA.lang.php');
	global $db;

	$file = "custom/include/language/fr_CA.lang.php";
	$field = "code";
	$field2 = "nom";
	$tblname = "ref_pays";

		
		$query = "SELECT  ".$field." as v, ".$field2." as v2 FROM ".$tblname." order by ".$field." asc;";
		$result = $db->query($query, false);
		unset($GLOBALS['app_list_strings']['pays_text_list']);
		
		while ($row = $db->fetchByAssoc($result)) 
			{
			$GLOBALS['app_list_strings']['pays_text_list'][$row['v']] = $row['v2'];
			}

			
		$query = "SELECT code as id, nom FROM ref_zoneadministrative";
        $result = $db->query($query, false);
		unset($GLOBALS['app_list_strings']['id_region_a_c_list']);

        while (($row = $db->fetchByAssoc($result))) 
			{
            $GLOBALS['app_list_strings']['id_region_a_c_list'][$row['id']] = $row['nom']; 
			}
		
		
		$query = "SELECT id, nom FROM ref_implantation";
        $result = $db->query($query, false);
		unset($GLOBALS['app_list_strings']['implantation_list']);

        while (($row = $db->fetchByAssoc($result))) 
			{
            $GLOBALS['app_list_strings']['implantation_list'][$row['id']] = $row['nom']; 
			}
			
			
		$query = "SELECT code as id, nom FROM ref_region";
        $result = $db->query($query, false);
		unset($GLOBALS['app_list_strings']['region_list']);

        while (($row = $db->fetchByAssoc($result))) 
			{
            $GLOBALS['app_list_strings']['region_list'][$row['id']] = $row['nom']; 
			}

		
		$query = "SELECT ref_discip.idref_discip as id,concat(ref_discip.Domaine,' - ',ref_discip.Discipline) as nom FROM ref_discip;";
        $result = $db->query($query, false);
		unset($GLOBALS['app_list_strings']['disciplines_list']);

        while (($row = $db->fetchByAssoc($result))) 
			{
            $GLOBALS['app_list_strings']['disciplines_list'][$row['id']] = $row['nom']; 
			}
			
			
		$query = "SELECT  code as v, nom as v2 FROM ref_pays order by code asc;";
		$result = $db->query($query, false);
		unset($GLOBALS['app_list_strings']['pays_iso2_c']);
		
		while ($row = $db->fetchByAssoc($result)) 
			{
			$GLOBALS['app_list_strings']['pays_iso2_c'][$row['v']] = $row['v2'];
			}
			

file_put_contents($file, '<?php 
$GLOBALS["app_list_strings"] = 
	'.var_export($GLOBALS['app_list_strings'],true).";");

