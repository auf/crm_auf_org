<?php
// created: 2016-06-28 17:33:02
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'type' => 'name',
    'vname' => 'LBL_NAME',
    'width' => '23%',
    'widget_class' => 'SubPanelDetailViewLink',
    'module' => 'Accounts',
    'default' => true,
  ),
  'type_etablissement_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TYPE_ETABLISSEMENT',
    'width' => '10%',
  ),
  'parent_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'parent_id',
  ),
  'parent_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PARENT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'account_id_c',
  ),
  'shipping_address_country' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'width' => '10%',
    'default' => true,
  ),
);