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

require_once('modules/Contacts/views/view.detail.php');

class CustomContactsViewDetail extends ContactsViewDetail{
    public function display(){
        global $sugar_config,$current_user,$app_list_strings; 

        $aop_portal_enabled = !empty($sugar_config['aop']['enable_portal']) && !empty($sugar_config['aop']['enable_aop']);

        $this->ss->assign("AOP_PORTAL_ENABLED", $aop_portal_enabled);

          require_once('modules/AOS_PDF_Templates/formLetter.php');
          formLetter::DVPopupHtml('Contacts');
		  
		  require_once("custom/include/metrix/loadDynamicLists.php"); //helper class to autopoluate the dropdowns
		  require_once('include/utils.php');
		  
		    

/********************************************************************************************************/
/*                                                   dynamic dd                                         */
/********************************************************************************************************/ 
//TODO
  $dynamic_dd_fileds = array(
 	 "country_c" =>array("tblname"=>"ref_pays","listname"=>"country_list","field"=>"nom"),
 	
 	 
  );


  $list = new loadDynamicLists();
  foreach($dynamic_dd_fileds as $k=>$v){

		unset($app_list_strings[$v['listname']]);
		$app_list_strings[$v['listname']] = $list->populate_list($v['tblname'],$v['field']);
	
  }
          

         //if the current user is not admin then hide the values of certain fields and make them non inline-editable 
		if($current_user->is_admin!=1){	
			echo "
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

            //if the field modified_c is not 0 then the user cannot see this record until an Admin user sets it back to 0
			if($this->bean->modified_c!=0){
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
        }

            if($current_user->is_admin==1 && $this->bean->modified_c==1){	
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
					url: 'index.php?module=Contacts&action=untag&m=Contact&record=".$this->bean->id."',
					data: {
					format: 'text'
					},

					dataType: 'text',
					success: function(data) {
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