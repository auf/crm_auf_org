<?php
// created: 2016-03-04 10:44:00
$dictionary["sm_Responsable"]["fields"]["sm_responsable_contacts_1"] = array (
  'name' => 'sm_responsable_contacts_1',
  'type' => 'link',
  'relationship' => 'sm_responsable_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'sm_responsable_contacts_1contacts_idb',
);
$dictionary["sm_Responsable"]["fields"]["sm_responsable_contacts_1_name"] = array (
  'name' => 'sm_responsable_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'sm_responsable_contacts_1contacts_idb',
  'link' => 'sm_responsable_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["sm_Responsable"]["fields"]["sm_responsable_contacts_1contacts_idb"] = array (
  'name' => 'sm_responsable_contacts_1contacts_idb',
  'type' => 'link',
  'relationship' => 'sm_responsable_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_SM_RESPONSABLE_CONTACTS_1_FROM_CONTACTS_TITLE',
);
