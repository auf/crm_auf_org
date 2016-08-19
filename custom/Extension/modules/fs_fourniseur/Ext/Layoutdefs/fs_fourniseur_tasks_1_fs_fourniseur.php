<?php
 // created: 2016-08-18 15:34:14
$layout_defs["fs_fourniseur"]["subpanel_setup"]['fs_fourniseur_tasks_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_FS_FOURNISEUR_TASKS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'fs_fourniseur_tasks_1',
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
