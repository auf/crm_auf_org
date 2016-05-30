<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2015-12-21 14:04:34
$layout_defs["Accounts"]["subpanel_setup"]['accounts_sm_responsable_1'] = array (
  'order' => 100,
  'module' => 'sm_Responsable',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
  'get_subpanel_data' => 'accounts_sm_responsable_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

$layout_defs["Accounts"]["subpanel_setup"]["account_aos_quotes"] = array (
  'order' => 100,
  'module' => 'AOS_Quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'AOS_Quotes',
  'get_subpanel_data' => 'aos_quotes',
);

$layout_defs["Accounts"]["subpanel_setup"]["account_aos_invoices"] = array (
  'order' => 100,
  'module' => 'AOS_Invoices',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'AOS_Invoices',
  'get_subpanel_data' => 'aos_invoices',
);

$layout_defs["Accounts"]["subpanel_setup"]["account_aos_contracts"] = array (
  'order' => 100,
  'module' => 'AOS_Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'AOS_Contracts',
  'get_subpanel_data' => 'aos_contracts',
);





$layout_defs['Accounts']['subpanel_setup']['securitygroups'] = array(
	'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect'),),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page'=>1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
);






/**
 * sps_accountsLayoutdefs.php
 * @author SalesAgility <support@salesagility.com>
 * Date: 27/01/14
 */


$layout_defs["Accounts"]["subpanel_setup"]["history"]['searchdefs'] =
array (
    'collection' =>
        array (
            'name' => 'collection',
            'label' => 'LBL_COLLECTION_TYPE',
            'type' => 'enum',
            'options' => $GLOBALS['app_list_strings']['collection_temp_list'],
            'default' => true,
            'width' => '10%',
        ),
    'name' =>
        array (
            'name' => 'name',
            'default' => true,
            'width' => '10%',
        ),
    'current_user_only' =>
        array (
            'name' => 'current_user_only',
            'label' => 'LBL_CURRENT_USER_FILTER',
            'type' => 'bool',
            'default' => true,
            'width' => '10%',
        ),
    'date_modified' =>
        array (
            'name' => 'date_modified',
            'default' => true,
            'width' => '10%',
        ),
);

$layout_defs["Accounts"]["subpanel_setup"]["history"]['top_buttons'][] = array('widget_class' => 'SubPanelTopFilterButton');

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts']['override_subpanel_name'] = 'Account_subpanel_accounts';

    $layout_defs["Accounts"]["subpanel_setup"]["accounts"]["top_buttons"] = array(
        array(
            'widget_class' => 'SubPanelTopCreateButton',
        ),
        array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
        ),
    );


        $layout_defs["Accounts"]["subpanel_setup"]["contacts"]["top_buttons"] = array(
        array(
            'widget_class' => 'SubPanelTopCreateButton',
        ),
        array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
        ),
    );



     $layout_defs["Accounts"]["subpanel_setup"]["accounts_sm_responsable_1"]["top_buttons"] = array(
        array(
            'widget_class' => 'SubPanelTopCreateButton',
        ),
        array(
            'widget_class' => 'SubPanelTopSelectButton',
            'mode' => 'MultiSelect',
        ),
    );


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['accounts_sm_responsable_1']['override_subpanel_name'] = 'Account_subpanel_accounts_sm_responsable_1';

?>