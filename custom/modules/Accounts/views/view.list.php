<?php

require_once('include/MVC/View/views/view.list.php');
require_once('modules/Accounts/AccountsListViewSmarty.php');

class AccountsViewList extends ViewList
{
    /**
     * @see ViewList::preDisplay()
     */
    public function preDisplay()
	{
   
    //require_once('custom/modules/AOS_PDF_Templates/formLetter.php');
	formLetter::DVPopupHtml('Accounts');
   
   
        parent::preDisplay();
		
		require_once('include/utils.php');

         global  $current_user,$app_list_strings;
		 
		 
		
        
                //if the current user is not admin then hide the values of certain fields and make them non inline-editable 
		if($current_user->is_admin!=1)
		{	

			echo "

			<script>
				$('html').hide();
				$(document).ready(
				function()
				{

				var remove_fields =    	['coda_name_c','coda_sname_c','prive_c','id_etat_c','date_effectif_c','date_maj_c','commentaire2_c','code_hier_c','adhesion_c','sigle_c','historique','nb_etud_c','nb_ens_c','nb_cherch_c','rub_c','commentaire2_c','nb_etud_annee_obs_c','nb_ens_annee_obs_c','nb_cherch_annee_obs_c','chiffres_c'];//you can add the fields you want to hide here


				$.each( remove_fields, function( key, value ) {


				$('td[field= ' + value + ']').html( '' );

				$('td[field=' + value + ']').removeAttr('field');
				});

				$('html').show(250);
				}
				);

			</script>";
        }

        $this->lv = new AccountsListViewSmarty();
    }

}
