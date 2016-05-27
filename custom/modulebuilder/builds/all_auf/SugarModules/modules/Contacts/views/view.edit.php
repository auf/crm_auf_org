<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ContactsViewEdit extends ViewEdit
{
	function ContactsViewEdit(){
		parent::ViewEdit();
		$this->useForSubpanel = true;
 		$this->useModuleQuickCreateTemplate = true;
		}

function display()
 	{
        
 
  require_once("custom/include/metrix/loadDynamicLists.php"); //helper class to autopoluate the dropdowns
  require_once('include/utils.php');
  
  global  $current_user,$app_list_strings; 

/********************************************************************************************************/
/*                                                   dynamic dd                                         */
/********************************************************************************************************/ 
//TODO
  $dynamic_dd_fileds = array(
 	 "country_c" =>array("tblname"=>"ref_pays","listname"=>"country_list","field"=>"nom"),
 	
 	 
  );


  $list = new loadDynamicLists();
  foreach($dynamic_dd_fileds as $k=>$v){

		unset($app_list_strings[$v['listname']]);
		$app_list_strings[$v['listname']] = $list->populate_list($v['tblname'],$v['field']);

	
  }

  
	        
  
	        //if the current user is not admin then hide the values of certain fields and make them non inline-editable 
		if($current_user->is_admin!=1){	echo "

			<script>
				$('html').hide();
				$(document).ready(
				function()
				{

				var remove_fields =    	['ContactsemailAddressesTable0','phone_mobile','jjwg_maps_address_c','primary_address_postalcode','primary_address_state','primary_address_city','alt_address_city','primary_address_country','phone_work','phone_fax','description'];//you can add the fields you want to hide here


				$.each( remove_fields, function( key, value ) {


				$('#' + value  ).closest( 'td' ).html(' ');

				
				});
                
                

				$('html').show(250);
				}
				);

			</script>";
        }


	 $this->ev->process();	
	 parent::display();
 	}
}