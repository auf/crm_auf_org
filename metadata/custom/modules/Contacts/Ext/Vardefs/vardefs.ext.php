<?php 
 //WARNING: The contents of this file are auto-generated


$dictionary["Contact"]["fields"]["aos_quotes"] = array (
  'name' => 'aos_quotes',
    'type' => 'link',
    'relationship' => 'contact_aos_quotes',
    'module'=>'AOS_Quotes',
    'bean_name'=>'AOS_Quotes',
    'source'=>'non-db',
);
$dictionary["Contact"]["relationships"]["contact_aos_quotes"] = array (
	'lhs_module'=> 'Contacts', 
	'lhs_table'=> 'contacts', 
	'lhs_key' => 'id',
	'rhs_module'=> 'AOS_Quotes', 
	'rhs_table'=> 'aos_quotes', 
	'rhs_key' => 'billing_contact_id',
	'relationship_type'=>'one-to-many',
);

$dictionary["Contact"]["fields"]["aos_invoices"] = array (
  'name' => 'aos_invoices',
    'type' => 'link',
    'relationship' => 'contact_aos_invoices',
    'module'=>'AOS_Invoices',
    'bean_name'=>'AOS_Invoices',
    'source'=>'non-db',
);
$dictionary["Contact"]["relationships"]["contact_aos_invoices"] = array (
	'lhs_module'=> 'Contacts', 
	'lhs_table'=> 'contacts', 
	'lhs_key' => 'id',
	'rhs_module'=> 'AOS_Invoices', 
	'rhs_table'=> 'aos_invoices', 
	'rhs_key' => 'billing_contact_id',
	'relationship_type'=>'one-to-many',
);

$dictionary["Contact"]["fields"]["aos_contracts"] = array (
  'name' => 'aos_contracts',
    'type' => 'link',
    'relationship' => 'contact_aos_contracts',
    'module'=>'AOS_Contracts',
    'bean_name'=>'AOS_Contracts',
    'source'=>'non-db',
);
$dictionary["Contact"]["relationships"]["contact_aos_contracts"] = array (
	'lhs_module'=> 'Contacts', 
	'lhs_table'=> 'contacts', 
	'lhs_key' => 'id',
	'rhs_module'=> 'AOS_Contracts', 
	'rhs_table'=> 'aos_contracts', 
	'rhs_key' => 'contact_id',
	'relationship_type'=>'one-to-many',
);



/**
 *
 * @package Advanced OpenPortal
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
 * @author Salesagility Ltd <support@salesagility.com>
 */
$dictionary["Contact"]["fields"]["aop_case_updates"] = array (
    'name' => 'aop_case_updates',
    'type' => 'link',
    'relationship' => 'contacts_aop_case_updates',
    'source' => 'non-db',
    'id_name' => 'contact_id',
    'vname' => 'LBL_AOP_CASE_UPDATES',
);

$dictionary["Contact"]["relationships"]["contacts_aop_case_updates"] = array (
    'lhs_module'=> 'Contacts',
    'lhs_table'=> 'contacts',
    'lhs_key' => 'id',
    'rhs_module'=> 'AOP_Case_Updates',
    'rhs_table'=> 'aop_case_updates',
    'rhs_key' => 'contact_id',
    'relationship_type'=>'one-to-many',
);

$dictionary["Contact"]["fields"]["joomla_account_id"] = array (
    'name' => 'joomla_account_id',
    'vname' => 'LBL_JOOMLA_ACCOUNT_ID',
    'type' => 'varchar',
    'len' => '255',
    'importable' => 'false',
    'studio' => 'true',
);
$dictionary["Contact"]["fields"]["portal_account_disabled"] = array (
    'name' => 'portal_account_disabled',
    'vname' => 'LBL_PORTAL_ACCOUNT_DISABLED',
    'type' => 'bool',
    'importable' => 'false',
    'studio' => 'false',
);
$dictionary["Contact"]["fields"]["joomla_account_access"] = array (
    'name' => 'joomla_account_access',
    'vname' => 'LBL_JOOMLA_ACCOUNT_ACCESS',
    'type' => 'varchar',
    'source' => 'non-db',
    'len' => '255',
    'importable' => 'false',
    'studio' => 'false',
);
$dictionary["Contact"]["fields"]["portal_user_type"] = array (
    'name' => 'portal_user_type',
    'vname' => 'LBL_PORTAL_USER_TYPE',
    'type' => 'enum',
    'options' => 'contact_portal_user_type_dom',
    'len' => '100',
    'default' => 'Single',
);
 

// created: 2016-03-04 11:01:23
$dictionary["Contact"]["fields"]["contacts_sm_responsable_1"] = array (
  'name' => 'contacts_sm_responsable_1',
  'type' => 'link',
  'relationship' => 'contacts_sm_responsable_1',
  'source' => 'non-db',
  'module' => 'sm_Responsable',
  'bean_name' => 'sm_Responsable',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
);


// created: 2013-04-15 12:13:27
$dictionary["Contact"]["fields"]["fp_events_contacts"] = array (
  'name' => 'fp_events_contacts',
  'type' => 'link',
  'relationship' => 'fp_events_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE',
);


// created: 2016-05-17 16:08:58
$dictionary["Contact"]["fields"]["fs_fourniseur_contacts_1"] = array (
  'name' => 'fs_fourniseur_contacts_1',
  'type' => 'link',
  'relationship' => 'fs_fourniseur_contacts_1',
  'source' => 'non-db',
  'module' => 'fs_fourniseur',
  'bean_name' => 'fs_fourniseur',
  'vname' => 'LBL_FS_FOURNISEUR_CONTACTS_1_FROM_FS_FOURNISEUR_TITLE',
);


// created: 2014-06-24 15:48:56
$dictionary["Contact"]["fields"]["project_contacts_1"] = array (
  'name' => 'project_contacts_1',
  'type' => 'link',
  'relationship' => 'project_contacts_1',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE',
);



$dictionary['Contact']['fields']['SecurityGroups'] = array (
  	'name' => 'SecurityGroups',
    'type' => 'link',
	'relationship' => 'securitygroups_contacts',
	'module'=>'SecurityGroups',
	'bean_name'=>'SecurityGroup',
    'source'=>'non-db',
	'vname'=>'LBL_SECURITYGROUPS',
);






// created: 2016-03-04 10:44:00
$dictionary["Contact"]["fields"]["sm_responsable_contacts_1"] = array (
  'name' => 'sm_responsable_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_responsable_contacts_1',
  'source' => 'non-db',
  'module' => 'sm_Responsable',
  'bean_name' => 'sm_Responsable',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_SM_RESPONSABLE_TITLE',
  'id_name' => 'sm_responsable_contacts_1sm_responsable_ida',
);
$dictionary["Contact"]["fields"]["sm_responsable_contacts_1_name"] = array (
  'name' => 'sm_responsable_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_SM_RESPONSABLE_TITLE',
  'save' => true,
  'id_name' => 'sm_responsable_contacts_1sm_responsable_ida',
  'link' => 'sm_responsable_contacts_1',
  'table' => 'sm_responsable',
  'module' => 'sm_Responsable',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["sm_responsable_contacts_1sm_responsable_ida"] = array (
  'name' => 'sm_responsable_contacts_1sm_responsable_ida',
  'type' => 'link',
  'relationship' => 'sm_responsable_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_SM_RESPONSABLE_TITLE',
);


 // created: 2015-12-21 13:56:42
$dictionary['Contact']['fields']['alt_address_city']['inline_edit']=true;
$dictionary['Contact']['fields']['alt_address_city']['comments']='City for alternate address';
$dictionary['Contact']['fields']['alt_address_city']['merge_filter']='disabled';

 

 // created: 2016-01-08 16:09:08
$dictionary['Contact']['fields']['country_c']['inline_edit']='1';
$dictionary['Contact']['fields']['country_c']['labelValue']='Pays';

 

 // created: 2015-12-21 13:55:17
$dictionary['Contact']['fields']['email1']['inline_edit']=true;
$dictionary['Contact']['fields']['email1']['merge_filter']='disabled';

 


$dictionary['Contact']['fields']['e_invite_status_fields'] =
		array (
			'name' => 'e_invite_status_fields',
			'rname' => 'id',
			'relationship_fields'=>array('id' => 'event_invite_id', 'invite_status' => 'event_status_name'),
			'vname' => 'LBL_CONT_INVITE_STATUS',
			'type' => 'relate',
			'link' => 'fp_events_contacts',
			'link_type' => 'relationship_info',
            'join_link_name' => 'fp_events_contacts',
			'source' => 'non-db',
			'importable' => 'false',
            'duplicate_merge'=> 'disabled',
			'studio' => false,
		);

$dictionary['Contact']['fields']['event_status_name'] =
		array(
            'massupdate' => false,
            'name' => 'event_status_name',
            'type' => 'enum',
            'studio' => 'false',
            'source' => 'non-db',
            'vname' => 'LBL_LIST_INVITE_STATUS_EVENT',
            'options' => 'fp_event_invite_status_dom',
            'importable' => 'false',
        );
$dictionary['Contact']['fields']['event_invite_id'] =
    array(
        'name' => 'event_invite_id',
        'type' => 'varchar',
        'source' => 'non-db',
        'vname' => 'LBL_LIST_INVITE_STATUS',
        'studio' => array('listview' => false),
    );


$dictionary['Contact']['fields']['e_accept_status_fields'] =
        array (
            'name' => 'e_accept_status_fields',
            'rname' => 'id',
            'relationship_fields'=>array('id' => 'event_status_id', 'accept_status' => 'event_accept_status'),
            'vname' => 'LBL_CONT_ACCEPT_STATUS',
            'type' => 'relate',
            'link' => 'fp_events_contacts',
            'link_type' => 'relationship_info',
            'join_link_name' => 'fp_events_contacts',
            'source' => 'non-db',
            'importable' => 'false',
            'duplicate_merge'=> 'disabled',
            'studio' => false,
        );


$dictionary['Contact']['fields']['event_accept_status'] =
        array(
            'massupdate' => false,
            'name' => 'event_accept_status',
            'type' => 'enum',
            'studio' => 'false',
            'source' => 'non-db',
            'vname' => 'LBL_LIST_ACCEPT_STATUS_EVENT',
            'options' => 'fp_event_status_dom',
            'importable' => 'false',
        );
$dictionary['Contact']['fields']['event_status_id'] =
    array(
        'name' => 'event_status_id',
        'type' => 'varchar',
        'source' => 'non-db',
        'vname' => 'LBL_LIST_ACCEPT_STATUS',
        'studio' => array('listview' => false),
    );


 // created: 2015-12-03 15:27:18
$dictionary['Contact']['fields']['first_name']['audited']=true;
$dictionary['Contact']['fields']['first_name']['inline_edit']=true;
$dictionary['Contact']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Contact']['fields']['first_name']['merge_filter']='disabled';

 

 // created: 2015-12-21 12:49:42
$dictionary['Contact']['fields']['genre_c']['inline_edit']='1';
$dictionary['Contact']['fields']['genre_c']['labelValue']='Genre';

 

 // created: 2015-12-21 12:47:24
$dictionary['Contact']['fields']['id_contact_c']['inline_edit']='1';
$dictionary['Contact']['fields']['id_contact_c']['labelValue']='id contact';

 

 // created: 2015-10-21 11:17:57
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2015-10-21 11:17:57
$dictionary['Contact']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2015-10-21 11:17:57
$dictionary['Contact']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2015-10-21 11:17:57
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2016-01-06 15:23:36
$dictionary['Contact']['fields']['modified_c']['inline_edit']='1';
$dictionary['Contact']['fields']['modified_c']['labelValue']='modified';

 

 // created: 2015-12-21 14:00:22
$dictionary['Contact']['fields']['phone_fax']['inline_edit']=true;
$dictionary['Contact']['fields']['phone_fax']['comments']='Contact fax number';
$dictionary['Contact']['fields']['phone_fax']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:55:26
$dictionary['Contact']['fields']['phone_mobile']['inline_edit']=true;
$dictionary['Contact']['fields']['phone_mobile']['comments']='Mobile phone number of the contact';
$dictionary['Contact']['fields']['phone_mobile']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:57:15
$dictionary['Contact']['fields']['primary_address_city']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_city']['comments']='City for primary address';
$dictionary['Contact']['fields']['primary_address_city']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:56:59
$dictionary['Contact']['fields']['primary_address_country']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_country']['comments']='Country for primary address';
$dictionary['Contact']['fields']['primary_address_country']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:55:56
$dictionary['Contact']['fields']['primary_address_postalcode']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_postalcode']['comments']='Postal code for primary address';
$dictionary['Contact']['fields']['primary_address_postalcode']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:56:10
$dictionary['Contact']['fields']['primary_address_state']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_state']['comments']='State for primary address';
$dictionary['Contact']['fields']['primary_address_state']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:55:41
$dictionary['Contact']['fields']['primary_address_street']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_street']['comments']='Street address for primary address';
$dictionary['Contact']['fields']['primary_address_street']['merge_filter']='disabled';

 

 // created: 2015-12-11 14:01:20
$dictionary['Contact']['fields']['salutation']['len']=100;
$dictionary['Contact']['fields']['salutation']['inline_edit']=true;
$dictionary['Contact']['fields']['salutation']['comments']='Contact salutation (e.g., Mr, Ms)';
$dictionary['Contact']['fields']['salutation']['merge_filter']='disabled';

 
?>