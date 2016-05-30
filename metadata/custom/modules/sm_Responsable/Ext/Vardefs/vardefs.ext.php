<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2015-12-21 14:04:34
$dictionary["sm_Responsable"]["fields"]["accounts_sm_responsable_1"] = array (
  'name' => 'accounts_sm_responsable_1',
  'type' => 'link',
  'relationship' => 'accounts_sm_responsable_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_sm_responsable_1accounts_ida',
);
$dictionary["sm_Responsable"]["fields"]["accounts_sm_responsable_1_name"] = array (
  'name' => 'accounts_sm_responsable_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_sm_responsable_1accounts_ida',
  'link' => 'accounts_sm_responsable_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["sm_Responsable"]["fields"]["accounts_sm_responsable_1accounts_ida"] = array (
  'name' => 'accounts_sm_responsable_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_sm_responsable_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
);


// created: 2016-03-04 11:01:23
$dictionary["sm_Responsable"]["fields"]["contacts_sm_responsable_1"] = array (
  'name' => 'contacts_sm_responsable_1',
  'type' => 'link',
  'relationship' => 'contacts_sm_responsable_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_sm_responsable_1contacts_ida',
);
$dictionary["sm_Responsable"]["fields"]["contacts_sm_responsable_1_name"] = array (
  'name' => 'contacts_sm_responsable_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_sm_responsable_1contacts_ida',
  'link' => 'contacts_sm_responsable_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["sm_Responsable"]["fields"]["contacts_sm_responsable_1contacts_ida"] = array (
  'name' => 'contacts_sm_responsable_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_sm_responsable_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
);


// created: 2015-12-22 14:51:54
$dictionary["sm_Responsable"]["fields"]["sm_responsable_activities_1_calls"] = array (
  'name' => 'sm_responsable_activities_1_calls',
  'type' => 'link',
  'relationship' => 'sm_responsable_activities_1_calls',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_SM_RESPONSABLE_ACTIVITIES_1_CALLS_FROM_CALLS_TITLE',
);


// created: 2015-12-22 14:51:55
$dictionary["sm_Responsable"]["fields"]["sm_responsable_activities_1_emails"] = array (
  'name' => 'sm_responsable_activities_1_emails',
  'type' => 'link',
  'relationship' => 'sm_responsable_activities_1_emails',
  'source' => 'non-db',
  'module' => 'Emails',
  'bean_name' => 'Email',
  'vname' => 'LBL_SM_RESPONSABLE_ACTIVITIES_1_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2015-12-22 14:51:54
$dictionary["sm_Responsable"]["fields"]["sm_responsable_activities_1_meetings"] = array (
  'name' => 'sm_responsable_activities_1_meetings',
  'type' => 'link',
  'relationship' => 'sm_responsable_activities_1_meetings',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_SM_RESPONSABLE_ACTIVITIES_1_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2015-12-22 14:51:55
$dictionary["sm_Responsable"]["fields"]["sm_responsable_activities_1_notes"] = array (
  'name' => 'sm_responsable_activities_1_notes',
  'type' => 'link',
  'relationship' => 'sm_responsable_activities_1_notes',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_SM_RESPONSABLE_ACTIVITIES_1_NOTES_FROM_NOTES_TITLE',
);


// created: 2015-12-22 14:51:55
$dictionary["sm_Responsable"]["fields"]["sm_responsable_activities_1_tasks"] = array (
  'name' => 'sm_responsable_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'sm_responsable_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_SM_RESPONSABLE_ACTIVITIES_1_TASKS_FROM_TASKS_TITLE',
);


// created: 2016-03-04 10:44:00
$dictionary["sm_Responsable"]["fields"]["sm_responsable_contacts_1"] = array (
  'name' => 'sm_responsable_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_responsable_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'sm_responsable_contacts_1contacts_idb',
);
$dictionary["sm_Responsable"]["fields"]["sm_responsable_contacts_1_name"] = array (
  'name' => 'sm_responsable_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'sm_responsable_contacts_1contacts_idb',
  'link' => 'sm_responsable_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["sm_Responsable"]["fields"]["sm_responsable_contacts_1contacts_idb"] = array (
  'name' => 'sm_responsable_contacts_1contacts_idb',
  'type' => 'link',
  'relationship' => 'sm_responsable_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_CONTACTS_TITLE',
);


 // created: 2016-01-08 13:34:08
$dictionary['sm_Responsable']['fields']['addresse_org_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['addresse_org_c']['labelValue']='Utiliser l\'adresse de l\'organisme';

 

 // created: 2016-01-08 13:20:33
$dictionary['sm_Responsable']['fields']['adresse_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['adresse_c']['labelValue']='Adresse';

 

 // created: 2016-01-08 13:22:09
$dictionary['sm_Responsable']['fields']['cedex_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['cedex_c']['labelValue']='Cedex';

 

 // created: 2016-01-08 13:21:45
$dictionary['sm_Responsable']['fields']['code_postal_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['code_postal_c']['labelValue']='Code Postal';

 

 // created: 2015-12-21 13:34:14
$dictionary['sm_Responsable']['fields']['date_modified']['inline_edit']=true;
$dictionary['sm_Responsable']['fields']['date_modified']['comments']='Date record last modified';
$dictionary['sm_Responsable']['fields']['date_modified']['merge_filter']='disabled';

 

 // created: 2016-01-08 13:33:18
$dictionary['sm_Responsable']['fields']['fax2_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['fax2_c']['labelValue']='Télécopieur 2';

 

 // created: 2016-03-04 16:44:50

 

 // created: 2016-01-07 15:08:08
$dictionary['sm_Responsable']['fields']['modified_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['modified_c']['labelValue']='modified';

 

 // created: 2016-03-04 16:44:58
$dictionary['sm_Responsable']['fields']['name']['inline_edit']=true;
$dictionary['sm_Responsable']['fields']['name']['duplicate_merge']='disabled';
$dictionary['sm_Responsable']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['sm_Responsable']['fields']['name']['merge_filter']='disabled';
$dictionary['sm_Responsable']['fields']['name']['unified_search']=false;

 

 // created: 2016-01-11 14:15:47
$dictionary['sm_Responsable']['fields']['pays_iso2_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['pays_iso2_c']['labelValue']='Pays';

 

 // created: 2016-01-08 13:25:59
$dictionary['sm_Responsable']['fields']['phone_alternate_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['phone_alternate_c']['labelValue']='Téléphone 2';

 

 // created: 2016-01-08 13:29:40
$dictionary['sm_Responsable']['fields']['phone_fax_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['phone_fax_c']['labelValue']='Télécopieur 1';

 

 // created: 2016-01-08 13:28:27
$dictionary['sm_Responsable']['fields']['phone_office_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['phone_office_c']['labelValue']='Téléphone 1';

 

 // created: 2016-01-08 13:25:26
$dictionary['sm_Responsable']['fields']['poste1_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['poste1_c']['labelValue']='Poste 1';

 

 // created: 2016-01-08 13:29:01
$dictionary['sm_Responsable']['fields']['poste2_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['poste2_c']['labelValue']='Poste 2';

 

 // created: 2016-01-08 13:22:33
$dictionary['sm_Responsable']['fields']['province_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['province_c']['labelValue']='Province';

 

 // created: 2016-01-08 13:23:00
$dictionary['sm_Responsable']['fields']['ville_lg_fr_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['ville_lg_fr_c']['labelValue']='Ville (français)';

 

 // created: 2016-01-08 13:23:30
$dictionary['sm_Responsable']['fields']['ville_lg_origine_c']['inline_edit']='1';
$dictionary['sm_Responsable']['fields']['ville_lg_origine_c']['labelValue']='Ville (langue d\'origine)';

 
?>