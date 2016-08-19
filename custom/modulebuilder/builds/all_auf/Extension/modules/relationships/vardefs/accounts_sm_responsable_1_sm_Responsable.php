<?php
// created: 2015-12-21 14:04:34
$dictionary["sm_Responsable"]["fields"]["accounts_sm_responsable_1"] = array (
  'name' => 'accounts_sm_responsable_1',
  'type' => 'link',
  'relationship' => 'accounts_sm_responsable_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_sm_responsable_1accounts_ida',
);
$dictionary["sm_Responsable"]["fields"]["accounts_sm_responsable_1_name"] = array (
  'name' => 'accounts_sm_responsable_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_sm_responsable_1accounts_ida',
  'link' => 'accounts_sm_responsable_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["sm_Responsable"]["fields"]["accounts_sm_responsable_1accounts_ida"] = array (
  'name' => 'accounts_sm_responsable_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_sm_responsable_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_SM_RESPONSABLE_1_FROM_SM_RESPONSABLE_TITLE',
);
