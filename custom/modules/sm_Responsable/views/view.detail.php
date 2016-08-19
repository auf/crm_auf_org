<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class sm_ResponsableViewDetail extends ViewDetail
	{
		
	public function display()
		{
			
		//require_once("custom/include/metrix/loadDynamicLists.php"); //helper class to autopoluate the dropdowns
		require_once('include/utils.php');
		global $sugar_config, $current_user,$app_list_strings; 
       
		/********************************************************************************************************/
		/*                                                   dynamic dd                                         */
		/********************************************************************************************************/ 
		//TODO
		/*$dynamic_dd_fileds = array(
	    //"priorite" =>array("tblname"=>"","listname"=>"priorite_list","field"=>""),
	    "pays_iso2_c" =>array("tblname"=>"ref_pays","listname"=>"pays_iso2_c_list","field"=>"nom"), 
		);*/

	  /*$list = new loadDynamicLists();
	  foreach($dynamic_dd_fileds as $k=>$v)
		{
		unset($app_list_strings[$v['listname']]);
		$app_list_strings[$v['listname']] = $list->populate_list($v['tblname'],$v['field']);
		}*/

			 //if the current user is not admin then hide the values of certain fields and make them non inline-editable 
			if($current_user->is_admin!=1 && $this->bean->modified_c!=0)
				{	
				echo "
				<script>				
					$(document).ready(
						function()
						{
						$('#pagecontent').html('<div class=\'alert alert-danger\' role=\'alert\'>Vos modifications sont en attente de validation</div>');
						}
					);
				</script>";
				}
				
				if($current_user->is_admin==1 && $this->bean->modified_c==1)
					{	
					//function to uncheck the modified checkbox in order to give access to this Contact to non Admin users
					echo "
					<script>				
						$(document).ready(
							function()
							{
							$('.subnav').prepend('<li><a href=\'#\' onclick=\'uncheckBox();\'>Valider</a></li>');
							}
						);

					var uncheckBox = function(){
						 
							$.ajax({
							url: 'index.php?module=Contacts&action=untag&m=sm_Responsable&record=".$this->bean->id."',
							data: {
							format: 'text'
							},
							dataType: 'text',
							success: function(data) 
							{
							$('#pagecontent').prepend('<div class=\'alert alert-success\' role=\'alert\'>You have successfully untagged this record.</div>');
							},
							type: 'GET'
							});
					}
					</script>";
					}
					
			parent::display();
		}
	}