<?php

require_once('include/MVC/View/views/view.list.php');
require_once('custom/modules/Contacts/ContactsListViewSmarty.php');

class ContactsViewList extends ViewList
{
    /**
     * @see ViewList::preDisplay()
     */




		function listViewProcess() {

			require_once('custom/include/metrix/listViewOverwrite.php');
            $custom_proc = new listViewOverwrite();
            $query=" AND contacts_cstm.modified_c = 0" ;
            $custom_proc->overwriteQuery($this,$query); 
			echo $this->lv->display();

		    }






    public function preDisplay(){
        require_once('modules/AOS_PDF_Templates/formLetter.php');
        formLetter::LVPopupHtml('Contacts');
        parent::preDisplay();

        $this->lv = new ContactsListViewSmarty();
		/************************************************************/
		//logic for the search dynamic dropdowns 
        /************************************************************/		
		require_once("custom/include/metrix/loadDynamicLists.php"); //helper class to autopoluate the dropdowns
		require_once('include/utils.php');

		global  $current_user,$app_list_strings; 

		$list = new loadDynamicLists();

		$dynamic_dd_fileds = array("country_c_basic" =>array("tblname"=>"ref_pays","listname"=>"country_list","field"=>"nom"),);

		$list = new loadDynamicLists();
		foreach($dynamic_dd_fileds as $k=>$v){

		unset($app_list_strings[$v['listname']]);
		$app_list_strings[$v['listname']] = $list->populate_list($v['tblname'],$v['field']);

		}
		/************************************************************/
		//end logic for the search dynamic dropdowns 
        /************************************************************/	

        //if the current user is not admin then hide the values of certain fields and make them non inline-editable 
		if($current_user->is_admin!=1){	echo "

			<script>
				$('html').hide();
				$(document).ready(
				function()
				{

				var remove_fields =    	['email1','phone_mobile','jjwg_maps_address_c','primary_address_postalcode','primary_address_state','primary_address_city','alt_address_city','primary_address_country','phone_work','phone_fax','description'];//you can add the fields you want to hide here


				$.each( remove_fields, function( key, value ) {


				$('td[field= ' + value + ']').html( '' );

				$('td[field=' + value + ']').removeAttr('field');
				});

				$('html').show(250);
				}
				);

			</script>";
        }
    }
}
