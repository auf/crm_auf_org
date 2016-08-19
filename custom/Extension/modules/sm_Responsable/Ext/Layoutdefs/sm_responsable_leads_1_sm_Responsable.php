<?php
 // created: 2016-07-28 16:12:11
$layout_defs["sm_Responsable"]["subpanel_setup"]['sm_responsable_leads_1'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SM_RESPONSABLE_LEADS_1_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'sm_responsable_leads_1',
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
