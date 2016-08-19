<?php
 // created: 2016-06-02 15:58:48
$layout_defs["auf_implantation"]["subpanel_setup"]['auf_implantation_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AUF_IMPLANTATION_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'auf_implantation_contacts_1',
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
