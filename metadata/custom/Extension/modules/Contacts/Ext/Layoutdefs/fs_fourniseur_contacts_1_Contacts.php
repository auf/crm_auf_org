<?php
 // created: 2016-05-17 16:08:58
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
