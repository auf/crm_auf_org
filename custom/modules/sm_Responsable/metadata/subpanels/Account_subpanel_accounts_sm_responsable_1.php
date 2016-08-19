<?php
// created: 2016-03-18 17:18:59
$subpanel_layout['list_fields'] = array (
  'priorite' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_PRIORITE',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'sousfonction' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SOUSFONCTION',
    'width' => '20%',
    'default' => true,
  ),
  'actif' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_ACTIF',
    'width' => '5%',
  ),
  'contacts_sm_responsable_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_SM_RESPONSABLE_1CONTACTS_IDA',
    'width' => '30%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'contacts_sm_responsable_1contacts_ida',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'sm_Responsable',
    'width' => '5%',
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