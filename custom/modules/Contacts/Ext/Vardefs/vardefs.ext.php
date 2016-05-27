<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2015-12-21 13:55:26
$dictionary['Contact']['fields']['phone_mobile']['inline_edit']=true;
$dictionary['Contact']['fields']['phone_mobile']['comments']='Mobile phone number of the contact';
$dictionary['Contact']['fields']['phone_mobile']['merge_filter']='disabled';

 

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


 // created: 2015-12-21 13:57:15
$dictionary['Contact']['fields']['primary_address_city']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_city']['comments']='City for primary address';
$dictionary['Contact']['fields']['primary_address_city']['merge_filter']='disabled';

 

 // created: 2015-12-21 12:47:24
$dictionary['Contact']['fields']['id_contact_c']['inline_edit']='1';
$dictionary['Contact']['fields']['id_contact_c']['labelValue']='id contact';

 

 // created: 2015-12-21 13:55:56
$dictionary['Contact']['fields']['primary_address_postalcode']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_postalcode']['comments']='Postal code for primary address';
$dictionary['Contact']['fields']['primary_address_postalcode']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:55:17
$dictionary['Contact']['fields']['email1']['inline_edit']=true;
$dictionary['Contact']['fields']['email1']['merge_filter']='disabled';

 

 // created: 2016-01-06 15:23:36
$dictionary['Contact']['fields']['modified_c']['inline_edit']='1';
$dictionary['Contact']['fields']['modified_c']['labelValue']='modified';

 

 // created: 2015-12-21 13:55:41
$dictionary['Contact']['fields']['primary_address_street']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_street']['comments']='Street address for primary address';
$dictionary['Contact']['fields']['primary_address_street']['merge_filter']='disabled';

 

 // created: 2015-12-21 12:49:42
$dictionary['Contact']['fields']['genre_c']['inline_edit']='1';
$dictionary['Contact']['fields']['genre_c']['labelValue']='Genre';

 

 // created: 2015-12-03 15:27:18
$dictionary['Contact']['fields']['first_name']['audited']=true;
$dictionary['Contact']['fields']['first_name']['inline_edit']=true;
$dictionary['Contact']['fields']['first_name']['comments']='First name of the contact';
$dictionary['Contact']['fields']['first_name']['merge_filter']='disabled';

 

 // created: 2015-12-11 14:01:20
$dictionary['Contact']['fields']['salutation']['len']=100;
$dictionary['Contact']['fields']['salutation']['inline_edit']=true;
$dictionary['Contact']['fields']['salutation']['comments']='Contact salutation (e.g., Mr, Ms)';
$dictionary['Contact']['fields']['salutation']['merge_filter']='disabled';

 

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


 // created: 2015-12-21 13:56:10
$dictionary['Contact']['fields']['primary_address_state']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_state']['comments']='State for primary address';
$dictionary['Contact']['fields']['primary_address_state']['merge_filter']='disabled';

 

 // created: 2015-10-21 11:17:57
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2015-12-21 14:00:22
$dictionary['Contact']['fields']['phone_fax']['inline_edit']=true;
$dictionary['Contact']['fields']['phone_fax']['comments']='Contact fax number';
$dictionary['Contact']['fields']['phone_fax']['merge_filter']='disabled';

 

 // created: 2015-10-21 11:17:57
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2015-10-21 11:17:57
$dictionary['Contact']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

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


 // created: 2016-01-08 16:09:08
$dictionary['Contact']['fields']['country_c']['inline_edit']='1';
$dictionary['Contact']['fields']['country_c']['labelValue']='Pays';

 

 // created: 2015-12-21 13:56:42
$dictionary['Contact']['fields']['alt_address_city']['inline_edit']=true;
$dictionary['Contact']['fields']['alt_address_city']['comments']='City for alternate address';
$dictionary['Contact']['fields']['alt_address_city']['merge_filter']='disabled';

 

 // created: 2015-12-21 13:56:59
$dictionary['Contact']['fields']['primary_address_country']['inline_edit']=true;
$dictionary['Contact']['fields']['primary_address_country']['comments']='Country for primary address';
$dictionary['Contact']['fields']['primary_address_country']['merge_filter']='disabled';

 

 // created: 2015-10-21 11:17:57
$dictionary['Contact']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 
?>