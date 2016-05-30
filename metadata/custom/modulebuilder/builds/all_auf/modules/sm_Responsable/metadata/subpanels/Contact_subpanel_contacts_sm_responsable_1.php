<?php
// created: 2016-03-18 16:40:08
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'vname' => 'LBL_NAME',
    'width' => '30%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => NULL,
    'target_record_key' => NULL,
  ),
  'priorite' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_PRIORITE',
    'width' => '10%',
    'default' => true,
  ),
  'accounts_sm_responsable_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_SM_RESPONSABLE_1ACCOUNTS_IDA',
    'width' => '50%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_sm_responsable_1accounts_ida',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'sm_Responsable',
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'sm_Responsable',
    'width' => '10%',
    'default' => true,
  ),
);