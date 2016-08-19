<?php
 // created: 2016-08-10 15:08:56
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_prop_proposition_1'] = array (
  'order' => 100,
  'module' => 'Prop_Proposition',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_PROP_PROPOSITION_1_FROM_PROP_PROPOSITION_TITLE',
  'get_subpanel_data' => 'opportunities_prop_proposition_1',
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
