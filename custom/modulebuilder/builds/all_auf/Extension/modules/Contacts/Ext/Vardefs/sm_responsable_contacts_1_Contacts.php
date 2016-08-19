<?php
// created: 2016-03-04 10:44:00
$dictionary["Contact"]["fields"]["sm_responsable_contacts_1"] = array (
  'name' => 'sm_responsable_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_responsable_contacts_1',
  'source' => 'non-db',
  'module' => 'sm_Responsable',
  'bean_name' => 'sm_Responsable',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_SM_RESPONSABLE_TITLE',
  'id_name' => 'sm_responsable_contacts_1sm_responsable_ida',
);
$dictionary["Contact"]["fields"]["sm_responsable_contacts_1_name"] = array (
  'name' => 'sm_responsable_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_SM_RESPONSABLE_TITLE',
  'save' => true,
  'id_name' => 'sm_responsable_contacts_1sm_responsable_ida',
  'link' => 'sm_responsable_contacts_1',
  'table' => 'sm_responsable',
  'module' => 'sm_Responsable',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["sm_responsable_contacts_1sm_responsable_ida"] = array (
  'name' => 'sm_responsable_contacts_1sm_responsable_ida',
  'type' => 'link',
  'relationship' => 'sm_responsable_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_SM_RESPONSABLE_TITLE',
);
