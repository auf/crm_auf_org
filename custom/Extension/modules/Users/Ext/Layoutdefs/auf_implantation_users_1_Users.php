<?php
 // created: 2016-06-02 16:03:36
$layout_defs["Users"]["subpanel_setup"]['auf_implantation_users_1'] = array (
  'order' => 100,
  'module' => 'auf_implantation',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AUF_IMPLANTATION_USERS_1_FROM_AUF_IMPLANTATION_TITLE',
  'get_subpanel_data' => 'auf_implantation_users_1',
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
