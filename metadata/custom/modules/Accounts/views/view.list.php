<?php

require_once('include/MVC/View/views/view.list.php');
require_once('custom/modules/Accounts/AccountsListViewSmarty.php');

class AccountsViewList extends ViewList
{
    /**
     * @see ViewList::preDisplay()
     */
    public function preDisplay(){
        require_once('modules/AOS_PDF_Templates/formLetter.php');
        formLetter::LVPopupHtml('Accounts');
        parent::preDisplay();

		require_once("custom/include/metrix/loadDynamicLists.php"); //helper class to autopoluate the dropdowns
		require_once('include/utils.php');

         global  $current_user,$app_list_strings; 

         $list = new loadDynamicLists();

		  $dynamic_dd_fileds = array(
		 	// "implantation_c_basic" =>array("tblname"=>"ref_implantation","listname"=>"custom_list","field"=>"nom_court"),
		 	//"id_region_a_c_basic" =>array("tblname"=>"ref_region","listname"=>"id_region_a_c_list","field"=>"nom"),
		 //	 "pays_iso2_c_basic" =>array("tblname"=>"ref_pays","listname"=>"pays_iso2_c_list","field"=>"nom"),
		 //	 "implantation_c" =>array("tblname"=>"ref_implantation","listname"=>"custom_list","field"=>"nom_court"),
		 	 //"id_region_a_c" =>array("tblname"=>"ref_zoneadministrative","listname"=>"id_region_a_c_list","field"=>"nom"),
		     "pays_text_c" =>array("tblname"=>"ref_pays","listname"=>"pays_text_list","field"=>"nom","tag"=>"0"),
		     "id_region_a_c" =>array("tblname"=>"ref_region","listname"=>"id_region_a_c_list","field"=>"nom","tag"=>"0"),

		     //"id_region_a_c" =>array("tblname"=>"ref_region","listname"=>"id_region_a_c_list","field"=>"nom","tag"=>"1"),
		 	 
		 	 
		  );


		  
		  foreach($dynamic_dd_fileds as $k=>$v){

				unset($app_list_strings[$v['listname']]);
				$app_list_strings[$v['listname']] = $list->populate_list($v['tblname'],$v['field'],$v['tag']);

		  }

//echo "<pre>";
				//var_dump($app_list_strings['id_region_a_c_list']);	

		 /* foreach($app_list_strings['id_region_a_c_list'] as $k=>$v){
		  	echo "'".$k."'=>'".$v."',<br>";
		  }*/


        
                //if the current user is not admin then hide the values of certain fields and make them non inline-editable 
		if($current_user->is_admin!=1){	


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
