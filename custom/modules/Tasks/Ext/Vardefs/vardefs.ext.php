<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-08-24 11:16:03
$dictionary['Task']['fields']['date_due']['inline_edit']=true;
$dictionary['Task']['fields']['date_due']['merge_filter']='disabled';

 

 // created: 2016-08-25 14:10:29
$dictionary['Task']['fields']['typetache_c']['inline_edit']='1';
$dictionary['Task']['fields']['typetache_c']['labelValue']='Type de tâche';

 

// created: 2016-08-11 12:52:24
$dictionary["Task"]["fields"]["aos_invoices_activities_1_tasks"] = array (
  'name' => 'aos_invoices_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'aos_invoices_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'AOS_Invoices',
  'bean_name' => 'AOS_Invoices',
  'vname' => 'LBL_AOS_INVOICES_ACTIVITIES_1_TASKS_FROM_AOS_INVOICES_TITLE',
);


// created: 2015-12-22 14:51:55
$dictionary["Task"]["fields"]["sm_responsable_activities_1_tasks"] = array (
  'name' => 'sm_responsable_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'sm_responsable_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'sm_Responsable',
  'bean_name' => 'sm_Responsable',
  'vname' => 'LBL_SM_RESPONSABLE_ACTIVITIES_1_TASKS_FROM_SM_RESPONSABLE_TITLE',
);


 // created: 2016-08-08 16:08:02
$dictionary['Task']['fields']['cre_fic_four_coda_c']['inline_edit']='1';
$dictionary['Task']['fields']['cre_fic_four_coda_c']['labelValue']='Création fiche fournisseur CODA';

 

// created: 2016-08-11 10:52:42
$dictionary["Task"]["fields"]["aos_quotes_tasks_1"] = array (
  'name' => 'aos_quotes_tasks_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_tasks_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_TASKS_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_tasks_1aos_quotes_ida',
);
$dictionary["Task"]["fields"]["aos_quotes_tasks_1_name"] = array (
  'name' => 'aos_quotes_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_TASKS_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_tasks_1aos_quotes_ida',
  'link' => 'aos_quotes_tasks_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["aos_quotes_tasks_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_tasks_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_TASKS_1_FROM_TASKS_TITLE',
);


// created: 2016-08-18 15:34:00
$dictionary["Task"]["fields"]["fs_fourniseur_activities_1_tasks"] = array (
  'name' => 'fs_fourniseur_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'fs_fourniseur_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'fs_fourniseur',
  'bean_name' => 'fs_fourniseur',
  'vname' => 'LBL_FS_FOURNISEUR_ACTIVITIES_1_TASKS_FROM_FS_FOURNISEUR_TITLE',
);


 // created: 2016-08-08 16:11:22
$dictionary['Task']['fields']['demandeur_c']['inline_edit']='1';
$dictionary['Task']['fields']['demandeur_c']['labelValue']='Demandeur';

 

// created: 2016-08-12 10:36:41
$dictionary["Task"]["fields"]["aos_quotes_activities_1_tasks"] = array (
  'name' => 'aos_quotes_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'aos_quotes_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_ACTIVITIES_1_TASKS_FROM_AOS_QUOTES_TITLE',
);

?>