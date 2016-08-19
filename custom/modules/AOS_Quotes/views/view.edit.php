<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class AOS_QuotesViewEdit extends ViewEdit 
	{
	function AOS_QuotesViewEdit()
		{
		parent::ViewEdit();
		$this->useForSubpanel = true;
		$this->useModuleQuickCreateTemplate = true;
		}
		
	function display()
		{

		require_once ('include/utils.php');
		global $current_user, $app_list_strings;


		$this->ev->process();
		
		
		
		if ($_REQUEST['return_relationship'] == 'opportunities_aos_quotes_1') 
			{
			echo "<script>
					$(document).ready(function()
					{	
					
					
					SUGAR.clearRelateField(this.form, 'opportunity', 'opportunity_id');
					
					$('#type_p_c').val('Partenariat');
					/*$('#opportunity').hide();
					$('#btn_clr_opportunity').hide();
					$('#btn_opportunity').hide();
					$('#opportunity_id').hide();
					$('#opportunity_label').hide();
					$('#form_SubpanelQuickCreate_AOS_Quotes_opportunity_results').hide();*/
					
					});		
				</script>";
			}
		elseif ($_REQUEST['return_relationship'] == 'opportunity_aos_quotes')
			{
			echo "<script>
					$(document).ready(function()
					{	
					$('#type_p_c').val('Proposition');
					$('#opportunities_aos_quotes_1_name').hide();
					});		
				</script>";	
			}
		
		
		parent::display();
		}	
		
		
		
	}
?>
