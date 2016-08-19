<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class AccountsViewEdit extends ViewEdit
	{
	function AccountsViewEdit()
		{
		parent::ViewEdit();
		$this->useForSubpanel = true;
		$this->useModuleQuickCreateTemplate = true;
		}

	function display()
		{
	
		require_once ('include/utils.php');
		global $current_user, $app_list_strings;
		
		//if the current user is not admin then hide the values of certain fields and make them non inline-editable 
		echo "<script>
				$(document).ready(function()
				{
					render(); //init
					$('#type_etablissement_c').change(function()
					{
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
						'nb_cherch_annee_obs_c', 'chiffres_c','jjwg_maps_address_c'
					]; 
					
					//you can add the fields you want to hide here
					$.each(remove_fields, function(key, value)
					{
						var dd_val = $('#type_etablissement_c').val();
						if(dd_val == 'faculte')
						{
							$('#' + value).hide();
							$('#' + value + '_label').css('color', 'white');
							$('#date_effectif_c_date').parent().parent().hide();
							$('#date_maj_c_date').parent().parent().hide();
							$('#adhesion_c_date').parent().parent().hide();
						}
						else
						{
							$('#' + value).show();
							$('#' + value + '_label').show();
							$('#' + value + '_label').css('color', 'black');
							$('#date_effectif_c_date').parent().parent().show();
							$('#date_maj_c_date').parent().parent().show();
							$('#adhesion_c_date').parent().parent().show();
						}
					});
				}
			</script>";

		$this->ev->process();
		parent::display();
		}
	}
