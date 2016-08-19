<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class AccountsViewDetail extends ViewDetail 
{
 	function AccountsViewDetail()
		{
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
 	function display()
		{

		/// require_once("custom/include/metrix/loadDynamicLists.php"); //helper class to autopoluate the dropdowns
		require_once('include/utils.php');
		global  $current_user,$app_list_strings; 

		/********************************************************************************************************/
		/*                                                   dynamic dd                                         */
		/********************************************************************************************************/ 

		if(empty($this->bean->id))
			{
			sugar_die($app_strings['ERROR_NO_RECORD']);
			}
		
		require_once('custom/modules/AOS_PDF_Templates/formLetter.php');
		formLetter::DVPopupHtml('Accounts');
		
		$this->dv->process();
		global $mod_strings;
		if(ACLController::checkAccess('Contacts', 'edit', true)) 
			{
	
			$push_billing = '<input class="button" title="' . $mod_strings['LBL_PUSH_CONTACTS_BUTTON_LABEL'] . 
								 '" type="button" onclick=\'open_contact_popup("Contacts", 600, 600, "&account_name=' .
								 $this->bean->name . '&html=change_address' .
								 '&primary_address_street_num_c=' . $this->bean->billing_address_street_num_c .
								 '&primary_address_street=' . str_replace(array("\rn", "\r", "\n"), array('','','<br>'), urlencode($this->bean->billing_address_street)) . 
								 '&primary_address_city=' . $this->bean->billing_address_city . 
								 '&ville_lg_origine_c=' . $this->bean->ville_lg_origine_c .
								 '&cedex_c=' . $this->bean->cedex_c .
								 '&primary_address_state=' . $this->bean->billing_address_state . 
								 '&primary_address_postalcode=' . $this->bean->billing_address_postalcode . 
								 '&primary_address_country=' . $this->bean->billing_address_country .
								 '&pays_text_c=' . $this->bean->pays_text_c .
								 '", true, false);\' value="' . $mod_strings['LBL_PUSH_CONTACTS_BUTTON_TITLE']. '">';
			$push_shipping = '<input class="button" title="' . $mod_strings['LBL_PUSH_CONTACTS_BUTTON_LABEL'] . 
								 '" type="button" onclick=\'open_contact_popup("Contacts", 600, 600, "&account_name=' .
								 $this->bean->name . '&html=change_address' .
								 '&primary_address_street_num_c =' . $this->bean->billing_address_street_num_c .
								 '&primary_address_street =' . str_replace(array("\rn", "\r", "\n"), array('','','<br>'), urlencode($this->bean->shipping_address_street)) . 
								 '&primary_address_city=' . $this->bean->shipping_address_city .
								 '&primary_address_state=' . $this->bean->shipping_address_state .
								 '&primary_address_postalcode=' . $this->bean->shipping_address_postalcode .
								 '&primary_address_country=' . $this->bean->shipping_address_country .
								 '&pays_text_c=' . $this->bean->pays_text_c .
								 '", true, false);\' value="' . $mod_strings['LBL_PUSH_CONTACTS_BUTTON_TITLE'] . '">';					 
			} 
		else 
			{
			$push_billing = '';
			$push_shipping = '';
			}

		$this->ss->assign("custom_code_billing", $push_billing);
		$this->ss->assign("custom_code_shipping", $push_shipping);
       //file_put_contents('acc.log', print_r($this->bean,true));
        $this->dv->ss->assign('ReadOnly', 'readonly');
        if(empty($this->bean->id))
			{
			global $app_strings;
			sugar_die($app_strings['ERROR_NO_RECORD']);
			}

			
			global $app_strings;
			$billing_country = translate('pays_text_list', '', $this->bean->billing_address_country);
			$this->bean->billing_address_country = $billing_country;
			
			$shipping_country = translate('pays_text_list', '', $this->bean->shipping_address_country);
			$this->bean->shipping_address_country = $shipping_country;	
				
		
			
			
			
        //if the current user is not admin then hide the values of certain fields and make them non inline-editable 
		echo "<script>
				$(document).ready(function()
				{
					
				console.log('changement1');	
					
					render(); //init
					$('#type_etablissement_c').change(function()
					{
						console.log('changement2');
						render();
					});
				});
				//custom function
				render = function()
				{
					var remove_fields = ['coda_name_c', 'coda_sname_c', 'prive_c',
						'id_etat_c', 'date_effectif_c', 'date_maj_c', 'statut_c',
						'commentaire2_c', 'code_hier_c', 'qualite_c', 'adhesion_c',
						'sigle_c', 'historique', 'nb_etud_c', 'nb_ens_c',
						'nb_cherch_c', 'rub_c', 'commentaire2_c',
						'nb_etud_annee_obs_c', 'nb_ens_annee_obs_c',
						'nb_cherch_annee_obs_c', 'chiffres_c'
					]; 
					
					//you can add the fields you want to hide here
					$.each(remove_fields, function(key, value)
					{
						var dd_val = $('#type_etablissement_c').val();
						if(dd_val == 'faculte')
						{
							$('td[field= ' + value + ']').css('color', 'white');
							$('td[field= ' + value + ']').prev().html('');
							$('td').removeClass('inlineEdit');
							$('td[field= ' + value + ']').html('');
						}
						else
						{
							$('td[field= ' + value + ']').css('color', 'black');
							$('td[field= ' + value + ']').prev().css('color', 'black');
							$('td[field= ' + value + ']').addClass('inlineEdit');
						}
					});
				}
			</script>";
		
		parent::display();
		
		
		
		}
}

?>