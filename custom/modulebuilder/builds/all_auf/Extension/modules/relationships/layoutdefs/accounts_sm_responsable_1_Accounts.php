<?php
 // created: 2015-12-21 14:04:34
$layout_defs["Accounts"]["subpanel_setup"]['accounts_sm_responsable_1'] = array (
  'order' => 100,
  'module' => 'sm_Responsable',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
  'get_subpanel_data' => 'accounts_sm_responsable_1',
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
