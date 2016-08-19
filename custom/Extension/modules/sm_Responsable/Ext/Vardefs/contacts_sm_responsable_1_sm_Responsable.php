<?php
// created: 2016-03-04 11:01:23
$dictionary["sm_Responsable"]["fields"]["contacts_sm_responsable_1"] = array (
  'name' => 'contacts_sm_responsable_1',
  'type' => 'link',
  'relationship' => 'contacts_sm_responsable_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_sm_responsable_1contacts_ida',
);
$dictionary["sm_Responsable"]["fields"]["contacts_sm_responsable_1_name"] = array (
  'name' => 'contacts_sm_responsable_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_sm_responsable_1contacts_ida',
  'link' => 'contacts_sm_responsable_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["sm_Responsable"]["fields"]["contacts_sm_responsable_1contacts_ida"] = array (
  'name' => 'contacts_sm_responsable_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_sm_responsable_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
);
