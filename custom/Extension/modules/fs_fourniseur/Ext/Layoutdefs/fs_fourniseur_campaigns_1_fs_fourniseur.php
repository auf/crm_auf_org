<?php
 // created: 2016-08-18 15:33:46
$layout_defs["fs_fourniseur"]["subpanel_setup"]['fs_fourniseur_campaigns_1'] = array (
  'order' => 100,
  'module' => 'Campaigns',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FS_FOURNISEUR_CAMPAIGNS_1_FROM_CAMPAIGNS_TITLE',
  'get_subpanel_data' => 'fs_fourniseur_campaigns_1',
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
