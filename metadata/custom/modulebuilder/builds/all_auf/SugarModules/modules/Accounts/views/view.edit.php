<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AccountsViewEdit extends ViewEdit
{
	function AccountsViewEdit(){
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



  $list = new loadDynamicLists();


$domaine_c =  $this->bean->domaine_c;
$domaine_c = str_replace('^', '',$domaine_c);
$selected = explode(',',$domaine_c);



  $dynamic_dd_fileds = array(
 	
 	 "pays_text_c" =>array("tblname"=>"ref_pays","listname"=>"pays_text_list","field"=>"nom"),	
 	 "pays_iso2_c" =>array("tblname"=>"ref_pays","listname"=>"pays_iso2_c_list","field"=>"code"),
 	 "id_region_a_c" =>array("tblname"=>"ref_region","listname"=>"id_region_a_c_list","field"=>"nom"),
 	 //"id_region_a_c" =>array("tblname"=>"ref_region","listname"=>"id_region_a_c_list","field"=>"code","pay"=>"1"),
 	  	  
  );

////special multi enum
  $dynamic_dd_fileds2 = array(
 	 "domaine_c" =>array("tblname"=>"ref_discip","listname"=>"domaines_section_c_list","field"=>"Domaine","field2"=>"Discipline"),	 
 	 	 
  );
foreach($dynamic_dd_fileds2 as $k=>$v){
		unset($app_list_strings[$v['listname']]);
		$edit_enum= $list->populate_list2($v['tblname'],$v['field'],$v['field2'],$selected); 
  }

foreach($dynamic_dd_fileds as $k=>$v){
		unset($app_list_strings[$v['listname']]);
		$app_list_strings[$v['listname']] = $list->populate_list($v['tblname'],$v['field'],$v['pay']); 
  }



 



/********************************************************************************************************/
/*                                                   Javascript                                         */
/********************************************************************************************************/
//echo $edit_enum['list_edit'];




	        //if the orginisme is type_etablissement_c==faculte
		     echo "

			<script>
				
				$(document).ready(function()
				{     render();//init
					$('#domaine_c').html('".$edit_enum['list_edit']."');

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
		                	$('#' + value ).hide();
		                	$('#' + value +'_label' ).css( 'color','white' );
		                	$('#date_effectif_c_date').parent().parent().hide();
		                	$('#date_maj_c_date').parent().parent().hide();
		                	$('#adhesion_c_date').parent().parent().hide();
		                	
		                	
		                	
		                }
						else{
							$('#' + value  ).show();
							$('#' + value +'_label' ).show();
							$('#' + value +'_label' ).css( 'color','black' );
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