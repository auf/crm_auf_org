<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

require_once('include/MVC/View/views/view.detail.php');

class AccountsViewDetail extends ViewDetail {


 	function AccountsViewDetail(){
 		parent::ViewDetail();
 	}

 	/**
 	 * display
 	 * Override the display method to support customization for the buttons that display
 	 * a popup and allow you to copy the account's address into the selected contacts.
 	 * The custom_code_billing and custom_code_shipping Smarty variables are found in
 	 * include/SugarFields/Fields/Address/DetailView.tpl (default).  If it's a English U.S.
 	 * locale then it'll use file include/SugarFields/Fields/Address/en_us.DetailView.tpl.
 	 */
 	function display(){


  require_once("custom/include/metrix/loadDynamicLists.php"); //helper class to autopoluate the dropdowns
  require_once('include/utils.php');
  
  global  $current_user,$app_list_strings; 

/********************************************************************************************************/
/*                                                   dynamic dd                                         */
/********************************************************************************************************/ 

 

  $list = new loadDynamicLists();


$domaine_c =  $this->bean->domaine_c;
$domaine_c = str_replace('^', '',$domaine_c);
$selected = explode(',',$domaine_c);




  ////special multi enum
  $dynamic_dd_fileds2 = array(
 	 "domaine_c" =>array("tblname"=>"ref_discip","listname"=>"domaines_section_c_list","field"=>"Domaine","field2"=>"Discipline"),	 
  );

$detail_enum='';
foreach($dynamic_dd_fileds2 as $k=>$v){
		unset($app_list_strings[$v['listname']]);

		 $detail_enum = $list->populate_list2($v['tblname'],$v['field'],$v['field2'],$selected); 
		
  }

  $dynamic_dd_fileds = array(
 	
 	 "pays_text_c" =>array("tblname"=>"ref_pays","listname"=>"pays_text_list","field"=>"nom"),	 
 	 "pays_iso2_c" =>array("tblname"=>"ref_pays","listname"=>"pays_iso2_c_list","field"=>"code"),
 	 "id_region_a_c" =>array("tblname"=>"ref_region","listname"=>"id_region_a_c_list","field"=>"nom"),
  );

  foreach($dynamic_dd_fileds as $k=>$v){
		unset($app_list_strings[$v['listname']]);

	  if(isset($v['tblname'], $v['field'], $v['pay']))
	  {
		  $app_list_strings[$v['listname']] = $list->populate_list($v['tblname'],$v['field'],$v['pay']);
	  }



  }

		if(empty($this->bean->id)){

			sugar_die($app_strings['ERROR_NO_RECORD']);
		}

		require_once('modules/AOS_PDF_Templates/formLetter.php');
		formLetter::DVPopupHtml('Accounts');
		
		$this->dv->process();
		global $mod_strings;
		if(ACLController::checkAccess('Contacts', 'edit', true)) {
			$push_billing = '<input class="button" title="' . $mod_strings['LBL_PUSH_CONTACTS_BUTTON_LABEL'] . 
								 '" type="button" onclick=\'open_contact_popup("Contacts", 600, 600, "&account_name=' .
								 $this->bean->name . '&html=change_address' .
								 '&primary_address_street=' . str_replace(array("\rn", "\r", "\n"), array('','','<br>'), urlencode($this->bean->billing_address_street)) . 
								 '&primary_address_city=' . $this->bean->billing_address_city . 
								 '&primary_address_state=' . $this->bean->billing_address_state . 
								 '&primary_address_postalcode=' . $this->bean->billing_address_postalcode . 
								 '&primary_address_country=' . $this->bean->billing_address_country .
								 '", true, false);\' value="' . $mod_strings['LBL_PUSH_CONTACTS_BUTTON_TITLE']. '">';
			$push_shipping = '<input class="button" title="' . $mod_strings['LBL_PUSH_CONTACTS_BUTTON_LABEL'] . 
								 '" type="button" onclick=\'open_contact_popup("Contacts", 600, 600, "&account_name=' .
								 $this->bean->name . '&html=change_address' .
								 '&primary_address_street=' . str_replace(array("\rn", "\r", "\n"), array('','','<br>'), urlencode($this->bean->shipping_address_street)) .
								 '&primary_address_city=' . $this->bean->shipping_address_city .
								 '&primary_address_state=' . $this->bean->shipping_address_state .
								 '&primary_address_postalcode=' . $this->bean->shipping_address_postalcode .
								 '&primary_address_country=' . $this->bean->shipping_address_country .
								 '", true, false);\' value="' . $mod_strings['LBL_PUSH_CONTACTS_BUTTON_TITLE'] . '">';
		} else {
			$push_billing = '';
			$push_shipping = '';
		}

		$this->ss->assign("custom_code_billing", $push_billing);
		$this->ss->assign("custom_code_shipping", $push_shipping);

        if(empty($this->bean->id)){
			global $app_strings;
			sugar_die($app_strings['ERROR_NO_RECORD']);
		}

         

         
		
        //if the current user is not admin then hide the values of certain fields and make them non inline-editable 
		echo "

			<script>



				$(document).ready(function()
				{     render();//init

					$('td[field=domaine_c]').html('".$detail_enum['list_detail']."');

					$( '#type_etablissement_c' ).change(function() {                
                      
                      render();
										
				  });	
				});

            //custom function
            render = function(){

            	var remove_fields =    	['coda_name_c','coda_sname_c','prive_c','id_etat_c','date_effectif_c','date_maj_c','statut_c','commentaire2_c','code_hier_c','qualite_c','adhesion_c','sigle_c','historique','nb_etud_c','nb_ens_c','nb_cherch_c','rub_c','commentaire2_c','nb_etud_annee_obs_c','nb_ens_annee_obs_c','nb_cherch_annee_obs_c','chiffres_c'];//you can add the fields you want to hide here
                       

						$.each( remove_fields, function( key, value ) {
                        var dd_val =$( '#type_etablissement_c' ).val();
		                if(dd_val=='faculte'){
		                	$('td[field= ' + value + ']').css( 'color','white' );
		                	$('td[field= ' + value + ']').prev().css( 'color','white' );
		                	$('td[field= ' + value + ']').removeClass('inlineEdit');
		                	$('td[field= ' + value + ']').html('');


		                }
						else{
							$('td[field= ' + value + ']').css( 'color','black' );
							$('td[field= ' + value + ']').prev().css( 'color','black' );
							$('td[field= ' + value + ']').addClass('inlineEdit');
						}				
						});
            }

			</script>";
    

		echo $this->dv->display();
 	}
}

?>
