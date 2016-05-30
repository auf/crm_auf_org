<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-03-04 11:01:23
$layout_defs["Contacts"]["subpanel_setup"]['contacts_sm_responsable_1'] = array (
  'order' => 100,
  'module' => 'sm_Responsable',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
  'get_subpanel_data' => 'contacts_sm_responsable_1',
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


 // created: 2016-05-30 12:38:49
$layout_defs["Contacts"]["subpanel_setup"]['fs_fourniseur_contacts_1'] = array (
  'order' => 100,
  'module' => 'fs_fourniseur',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FS_FOURNISEUR_CONTACTS_1_FROM_FS_FOURNISEUR_TITLE',
  'get_subpanel_data' => 'fs_fourniseur_contacts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['contacts_sm_responsable_1']['override_subpanel_name'] = 'Contact_subpanel_contacts_sm_responsable_1';

?>