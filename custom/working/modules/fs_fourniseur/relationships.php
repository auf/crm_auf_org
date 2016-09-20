<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$relationships = array (
  'fs_fourniseur_modified_user' => 
  array (
    'id' => '3f312e74-1460-1fd0-38a8-57d062b56c8e',
    'relationship_name' => 'fs_fourniseur_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'fs_fourniseur',
    'rhs_table' => 'fs_fourniseur',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'fs_fourniseur_created_by' => 
  array (
    'id' => '3fb33b8d-aca2-49db-cbf0-57d0621b091e',
    'relationship_name' => 'fs_fourniseur_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'fs_fourniseur',
    'rhs_table' => 'fs_fourniseur',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'fs_fourniseur_assigned_user' => 
  array (
    'id' => '40900e69-3d4a-4591-a3bc-57d062d3e0fd',
    'relationship_name' => 'fs_fourniseur_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'fs_fourniseur',
    'rhs_table' => 'fs_fourniseur',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'fs_fourniseur_aos_contracts_1' => 
  array (
    'id' => '8dca9621-51c2-1b0d-7b07-57d0620858dd',
    'relationship_name' => 'fs_fourniseur_aos_contracts_1',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Contracts',
    'rhs_table' => 'aos_contracts',
    'rhs_key' => 'id',
    'join_table' => 'fs_fourniseur_aos_contracts_1_c',
    'join_key_lhs' => 'fs_fourniseur_aos_contracts_1fs_fourniseur_ida',
    'join_key_rhs' => 'fs_fourniseur_aos_contracts_1aos_contracts_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'fs_fourniseur_activities_1_notes' => 
  array (
    'id' => '92fa9c12-ef1d-3ec8-b953-57d062e9c76d',
    'relationship_name' => 'fs_fourniseur_activities_1_notes',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'fs_fourniseur',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'fs_fourniseur_leads_1' => 
  array (
    'id' => '95db41de-8191-12c3-8a81-57d0624cc865',
    'relationship_name' => 'fs_fourniseur_leads_1',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'id',
    'join_table' => 'fs_fourniseur_leads_1_c',
    'join_key_lhs' => 'fs_fourniseur_leads_1fs_fourniseur_ida',
    'join_key_rhs' => 'fs_fourniseur_leads_1leads_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'fs_fourniseur_campaigns_1' => 
  array (
    'id' => '9798cb4c-63cf-5e93-a283-57d062978339',
    'relationship_name' => 'fs_fourniseur_campaigns_1',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'Campaigns',
    'rhs_table' => 'campaigns',
    'rhs_key' => 'id',
    'join_table' => 'fs_fourniseur_campaigns_1_c',
    'join_key_lhs' => 'fs_fourniseur_campaigns_1fs_fourniseur_ida',
    'join_key_rhs' => 'fs_fourniseur_campaigns_1campaigns_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'fs_fourniseur_opportunities_1' => 
  array (
    'id' => '97d41626-3f3f-3729-e827-57d062d43592',
    'relationship_name' => 'fs_fourniseur_opportunities_1',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'join_table' => 'fs_fourniseur_opportunities_1_c',
    'join_key_lhs' => 'fs_fourniseur_opportunities_1fs_fourniseur_ida',
    'join_key_rhs' => 'fs_fourniseur_opportunities_1opportunities_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'fs_fourniseur_contacts_1' => 
  array (
    'id' => '981ee186-7122-de29-d7ec-57d0622ccd41',
    'relationship_name' => 'fs_fourniseur_contacts_1',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'join_table' => 'fs_fourniseur_contacts_1_c',
    'join_key_lhs' => 'fs_fourniseur_contacts_1fs_fourniseur_ida',
    'join_key_rhs' => 'fs_fourniseur_contacts_1contacts_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'fs_fourniseur_activities_1_tasks' => 
  array (
    'id' => 'a0266e12-003c-f79c-1be0-57d062b41aed',
    'relationship_name' => 'fs_fourniseur_activities_1_tasks',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'fs_fourniseur',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'fs_fourniseur_activities_1_calls' => 
  array (
    'id' => 'a224b22d-8038-f078-b798-57d06243e697',
    'relationship_name' => 'fs_fourniseur_activities_1_calls',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'fs_fourniseur',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'fs_fourniseur_activities_1_meetings' => 
  array (
    'id' => 'a6a30719-1349-353d-381e-57d0629bf3f6',
    'relationship_name' => 'fs_fourniseur_activities_1_meetings',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'fs_fourniseur',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'fs_fourniseur_aos_quotes_1' => 
  array (
    'id' => 'a7e8fe03-2933-5bcb-393c-57d0620ba415',
    'relationship_name' => 'fs_fourniseur_aos_quotes_1',
    'lhs_module' => 'fs_fourniseur',
    'lhs_table' => 'fs_fourniseur',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Quotes',
    'rhs_table' => 'aos_quotes',
    'rhs_key' => 'id',
    'join_table' => 'fs_fourniseur_aos_quotes_1_c',
    'join_key_lhs' => 'fs_fourniseur_aos_quotes_1fs_fourniseur_ida',
    'join_key_rhs' => 'fs_fourniseur_aos_quotes_1aos_quotes_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
);