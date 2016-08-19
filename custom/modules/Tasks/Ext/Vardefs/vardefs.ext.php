<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2016-08-18 15:34:14
$dictionary["Task"]["fields"]["fs_fourniseur_tasks_1"] = array (
  'name' => 'fs_fourniseur_tasks_1',
  'type' => 'link',
  'relationship' => 'fs_fourniseur_tasks_1',
  'source' => 'non-db',
  'module' => 'fs_fourniseur',
  'bean_name' => 'fs_fourniseur',
  'vname' => 'LBL_FS_FOURNISEUR_TASKS_1_FROM_FS_FOURNISEUR_TITLE',
  'id_name' => 'fs_fourniseur_tasks_1fs_fourniseur_ida',
);
$dictionary["Task"]["fields"]["fs_fourniseur_tasks_1_name"] = array (
  'name' => 'fs_fourniseur_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_FS_FOURNISEUR_TASKS_1_FROM_FS_FOURNISEUR_TITLE',
  'save' => true,
  'id_name' => 'fs_fourniseur_tasks_1fs_fourniseur_ida',
  'link' => 'fs_fourniseur_tasks_1',
  'table' => 'fs_fourniseur',
  'module' => 'fs_fourniseur',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["fs_fourniseur_tasks_1fs_fourniseur_ida"] = array (
  'name' => 'fs_fourniseur_tasks_1fs_fourniseur_ida',
  'type' => 'link',
  'relationship' => 'fs_fourniseur_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_FS_FOURNISEUR_TASKS_1_FROM_TASKS_TITLE',
);


 // created: 2016-08-08 16:08:02
$dictionary['Task']['fields']['cre_fic_four_coda_c']['inline_edit']='1';
$dictionary['Task']['fields']['cre_fic_four_coda_c']['labelValue']='Création fiche fournisseur CODA';

 

 // created: 2016-08-08 16:11:56
$dictionary['Task']['fields']['assignea_c']['inline_edit']='1';
$dictionary['Task']['fields']['assignea_c']['labelValue']='Assigné à';

 

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


// created: 2016-08-10 15:12:52
$dictionary["Task"]["fields"]["part_partenariat_activities_1_tasks"] = array (
  'name' => 'part_partenariat_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'part_partenariat_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'part_Partenariat',
  'bean_name' => 'part_Partenariat',
  'vname' => 'LBL_PART_PARTENARIAT_ACTIVITIES_1_TASKS_FROM_PART_PARTENARIAT_TITLE',
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


// created: 2016-08-10 15:12:22
$dictionary["Task"]["fields"]["prop_proposition_activities_1_tasks"] = array (
  'name' => 'prop_proposition_activities_1_tasks',
  'type' => 'link',
  'relationship' => 'prop_proposition_activities_1_tasks',
  'source' => 'non-db',
  'module' => 'Prop_Proposition',
  'bean_name' => 'Prop_Proposition',
  'vname' => 'LBL_PROP_PROPOSITION_ACTIVITIES_1_TASKS_FROM_PROP_PROPOSITION_TITLE',
);

?>