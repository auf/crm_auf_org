<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class auf_implantationViewDetail extends ViewDetail 
{
 	function auf_implantationViewDetail()
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

		require_once('include/utils.php');
		global  $current_user,$app_list_strings; 
			
		$billing_country = translate('pays_text_list', '', $this->bean->billing_address_country);
		$this->bean->billing_address_country = $billing_country;
			
		$shipping_country = translate('pays_text_list', '', $this->bean->shipping_address_country);
		$this->bean->shipping_address_country = $shipping_country;	
				
		parent::display();
	
		
		}
}

?>