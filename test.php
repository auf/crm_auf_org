<?php


include('/var/www/clients/client15/web104/web/custom/include/language/en_us.lang.php');
//var_dump($GLOBALS['app_list_strings']);
unset($GLOBALS['app_list_strings']['pays_text_list']);

$GLOBALS['app_list_strings']['pays_text_list'][1]='kiri';
file_put_contents('kg.log', '<?php $GLOBALS["app_list_strings"] = 
	'.var_export($GLOBALS['app_list_strings'],true));
?>